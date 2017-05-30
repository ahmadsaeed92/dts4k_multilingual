<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datetime_enterprise_report extends CI_Controller {

    protected $condition;
    protected $start_date;
    protected $end_date;
    protected $user_start_date;
    protected $user_end_date;
    protected $day_start_offset;
    protected $day_end_offset;
    protected $dayparts = array();
    protected $descriptor;

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('is_logged_in'))
            redirect('login');
        $this->load->model('Datetime_enterprise_report_model');
        $this->day_start_offset = "04:00:00";
        $this->day_end_offset = "03:59:59";
        $this->dayparts['DP1'] = "04:00:00-10:29:59";
        $this->dayparts['DP2'] = "10:30:00-13:59:59";
        $this->dayparts['DP3'] = "14:00:00-16:59:59";
        $this->dayparts['DP4'] = "17:00:00-19:59:59";
        $this->dayparts['DP5'] = "20:00:00-21:59:59";
        $this->dayparts['DP6'] = "22:00:00-03:59:59";
    }

    public function index($data = NULL, $mode = NULL) {
        if (!$data)
            $data = array();
        $data['title'] = $this->get_title($mode);
        if (is_null($mode)) {
            $data['start_date'] = $this->user_start_date;
            $data['end_date'] = $this->user_end_date;
        }
        $this->load->view('templates/header', $data);
        $form_name = $this->uri->segment(1, 0);
        $data['menu'] = $this->load->view('templates/left_menu');
        $data['content_header'] = $this->load->view('templates/content_header');
        $data['form'] = $this->load->view("forms/{$form_name}");
        $data['hours_report_table_html'] = $this->load->view('components/datetime_enterprise_report');
        $this->load->view('templates/footer');
        $this->load->view('datetime_enterprise_report', $data, TRUE);
    }

    public function get_title($mode = NULL) {
        if (is_null($mode)) {
            $today_date = date("m/d/Y");
            $today_datetime = date("m/d/Y H:i");
            $week_start = date('m/d/Y', strtotime('-7 days'));
            $month = date("m/Y");
            $year = date("Y");
            switch ($this->uri->segment(1, 0)) {
                case "hourly":
                    $this->user_start_date = $today_datetime;
                    break;
                case "daypart":
                    $this->user_start_date = $today_date;
                    break;
                case "daily":
                    $this->user_start_date = $today_date;
                    break;
                case "weekly":
                    $this->user_start_date = $week_start;
                    break;
                case "monthly":
                    $this->user_start_date = $month;
                    break;
                case "yearly":
                    $this->user_start_date = $year;
                    break;
                case "custom":
                    $this->user_start_date = $today_datetime;
                    $this->user_end_date = $today_datetime;
                    break;
                default:
                    break;
            }
        }
        return $this->lang->line("labels_titles_{$this->uri->segment(1, 0)}");
    }

    public function generate_report() {
        try {
            if (!$this->mutator($this->input->post('start_date'), $this->input->post('end_date'))) {
                $this->session->set_flashdata('message', 'Please select start date and end date');
                redirect($this->uri->segment(1, 0));
            } else {
                $data = array();
                $data['green_target'] = empty($this->input->post('green_target')) ? $this->config->item('goals_green_value', 'global_settings') : $this->input->post('green_target');
                $data['red_target'] = empty($this->input->post('red_target')) ? $this->config->item('goals_red_value', 'global_settings') : $this->input->post('red_target');
                $start_date = $this->input->post('start_date');
                $end_date = $this->input->post('end_date');
                if (!$res = $this->Datetime_enterprise_report_model->get_data($this->condition, $data['green_target'], $data['red_target'])) {
                    $this->session->set_flashdata('message', 'Error Wile generating report! PLease try again!');
                    redirect($this->uri->segment(1, 0));
                } else {
                    $data['data'] = $res;
                    $data['start_date'] = $this->user_start_date;
                    $data['end_date'] = $this->user_end_date;
                    $data['store'] = $this->config->item('store#', 'global_settings');
                    $data['descriptor'] = $this->descriptor;
                    $this->index($data, 1);
                }
            }
        } catch (Exception $ex) {
            
        }
    }

    public function mutator($start, $end = NULL) {
        try {
            if (empty($start)) {
                return FALSE;
            } else {
                $store = $this->config->item('store#', 'global_settings');
                $now = date("m/d/Y H:i:s");
                $call = $this->uri->segment(1, 0);
                $this->user_start_date = $start;
                $this->user_end_date = $end;
                switch ($call) {
                    case "hourly":
                        $date_hour_begin = db_date($start);
                        $date_hour_end = date('Y-m-d H:i:s', strtotime($date_hour_begin) + 60 * 60);
                        $this->start_date = $date_hour_begin;
                        $this->end_date = $date_hour_end;
                        $this->condition = " begin_time between '{$date_hour_begin}' and '{$date_hour_end}'";
                        $user_start_date = user_date($date_hour_begin);
                        $user_end_date = user_date($date_hour_end);
                        $this->descriptor = "Report Generated for '{$store}' from {$user_start_date} to {$user_end_date} at {$now}";
                        break;

                    case "daypart":
                        $start_date = db_date($start, 1);
                        if ($end == "DP6")
                            $end_date = date('Y-m-d', strtotime($start_date) + 60 * 60 * 24);
                        else
                            $end_date = $start_date;
                        $start_offset = explode("-", $this->dayparts[$end])[0];
                        $end_offset = explode("-", $this->dayparts[$end])[1];
                        $start_date = "{$start_date} {$start_offset}";
                        $end_date = "{$end_date} {$end_offset}";
                        $this->start_date = $start_date;
                        $this->end_date = $end_date;
                        $this->condition = " begin_time between '{$start_date}' and '{$end_date}'";
                        $user_start_date = user_date($start_date);
                        $user_end_date = user_date($end_date);
                        $this->descriptor = "Report Generated for '{$store}' from {$user_start_date} to {$user_end_date} at {$now}";
                        break;
                    case "daily":
                        $start_date = db_date($start, 1) . " {$this->day_start_offset}";
                        $end_date = date('Y-m-d', strtotime($start_date) + 60 * 60 * 24) . " {$this->day_end_offset}";
                        $this->start_date = $start_date;
                        $this->end_date = $end_date;
                        $this->condition = " begin_time between '{$start_date}' and '{$end_date}'";
                        $user_start_date = user_date_only($start_date);
                        $this->descriptor = "Report Generated for '{$store}' for {$user_start_date} at {$now}";
                        break;
                    case "weekly":
                        $start_date = db_date($start, 1) . " {$this->day_start_offset}";
                        $end_date = date("Y-m-d H:i:s", strtotime("+7 days", strtotime($start_date)));
//                        $end_date = db_date($end, 1) . " {$this->day_end_offset}";
                        $this->start_date = $start_date;
                        $this->end_date = $end_date;
                        $this->condition = " begin_time between '{$start_date}' and '{$end_date}'";
                        $user_start_date = user_date($start_date);
                        $user_end_date = user_date($end_date);
                        $this->descriptor = "Report Generated for '{$store}' from {$user_start_date} to {$user_end_date} at {$now}";
                        break;
                    case "monthly":
                        $month = explode("/", $start)[0];
                        $year = explode("/", $start)[1];
                        $this->condition = " strftime('%m',begin_time) = '{$month}' and strftime('%Y',begin_time) = '{$year}'";
                        $this->descriptor = "Report Generated for '{$store}' for {$month} {$year} at {$now}";
                        break;
                    case "yearly":
                        $this->condition = "strftime('%Y',begin_time) = '{$start}'";
                        $this->descriptor = "Report Generated for '{$store}' for {$start} at {$now}";
                        break;
                    case "custom":
                        $start_date = db_date($start);
                        $end_date = db_date($end);
                        $this->start_date = $start_date;
                        $this->end_date = $end_date;
                        $this->condition = " begin_time between '{$start_date}' and '{$end_date}'";
                        $user_start_date = user_date($start_date);
                        $user_end_date = user_date($end_date);
                        $this->descriptor = "Report Generated for '{$store}' from {$user_start_date} to {$user_end_date} at {$now}";
                        break;
                    default:
                        break;
                }
                return TRUE;
            }
        } catch (Exception $ex) {
            
        }
    }

}
