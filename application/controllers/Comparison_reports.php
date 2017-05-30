<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comparison_reports extends CI_Controller {

    protected $day_start_offset;
    protected $day_end_offset;

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('is_logged_in'))
            redirect('login');
        $this->load->model('Comparison_reports_model');
        $this->day_start_offset = "04:00:00";
        $this->day_end_offset = "03:59:59";
    }

    public function index($data = NULL) {
        if (!$data)
            $data = array();
        if (!isset($data['start_date']) && !isset($data['end_date'])) {
            $data['start_date'] = date("m/d/Y", strtotime("-1 day"));
            $data['end_date'] = date("m/d/Y", strtotime("-30 days", strtotime($data['start_date'])));
        }
        $data['title'] = $this->get_title();
        $this->load->view('templates/header', $data);
        $data['menu'] = $this->load->view('templates/left_menu');
        $data['content_header'] = $this->load->view('templates/content_header');
        $data['comparsion_report_html'] = $this->load->view('components/comparison_reports');
        $this->load->view('templates/footer');
        $this->load->view('comparison_reports', $data, TRUE);
    }

    public function get_title() {
//        $str = str_replace("_", " ", $this->uri->segment(1, 0));
        return $this->lang->line("labels_titles_{$this->uri->segment(1, 0)}");
    }

    public function generate_report() {
        try {
            if (empty($this->input->post('start_date')) && empty($this->input->post('end_date'))) {
                $this->session->set_flashdata('message', 'Please select Day 1 and Day 2');
                redirect($this->uri->segment(1, 0));
            } else {
                $data = array();
                $start_date = $this->input->post('start_date');
                $end_date = $this->input->post('end_date');
                $day1_start = db_date($start_date, 1) . " {$this->day_start_offset}";
                $day1_end = date("Y-m-d H:i:s", strtotime("+1 day", strtotime($day1_start) - 1));
                $day2_start = db_date($end_date, 1) . " {$this->day_start_offset}";
                $day2_end = date("Y-m-d H:i:s", strtotime("+1 day", strtotime($day2_start) - 1));
                $condition1 = "begin_time between '{$day1_start}' and '{$day1_end}'";
                $condition2 = "begin_time between '{$day2_start}' and '{$day2_end}'";
                if (($res = $this->Comparison_reports_model->get_data($condition1, $condition2, db_date($start_date, 1), db_date($end_date, 1), $this->uri->segment(1, 0))) === FALSE) {
                    $this->session->set_flashdata('message', 'Error While generating report! PLease try again!');
                    redirect($this->uri->segment(1, 0));
                } else {
                    $report_type = $this->uri->segment(1, 0);
                    $data['get_daypart_or_hour'] = $report_type == "hourly_comparison" ? NULL : 1;
                    $data['report_type'] = $report_type;
                    $data['comparator_column'] = ($report_type == "daypart_comparison") ? "Daypart" : (($report_type == "hourly_comparison") ? "Hour" : "");
                    $data['data'] = $this->get_structured_data($res, db_date($start_date, 1), db_date($end_date, 1));
                    $data['start_date'] = user_date_only($start_date);
                    $data['end_date'] = user_date_only($end_date);
                    $data['store'] = $this->config->item('store#', 'global_settings');
                    $this->index($data);
                }
            }
        } catch (Exception $ex) {
            
        }
    }

    public function get_structured_data($records, $day1, $day2) {
        try {
            if (count($records) == 0)
                return $records;
            $groups = array();
            $groups[$day1] = array();
            $groups[$day2] = array();
            foreach ($records as $row) {
//                if (!array_key_exists($row['dates'], $groups))
//                    $groups[$row['dates']] = array();
                array_push($groups[$row['dates']], $row);
            }
//            print_r($groups);
            $grouping_keys = array_keys($groups);
            $set1 = $groups[$grouping_keys[0]];
//            $set2 = $groups[$grouping_keys[1]];
            $set2 = (isset($grouping_keys[1])) ? $groups[$grouping_keys[1]] : array();
            $loop_over = (count($set1) >= count($set2)) ? 1 : 2;
//            print($loop_over);
            $record_set = array();
            if ($loop_over == 1) {
                foreach ($set1 as $index => $record) {
                    $empty_array = array_fill_keys(array_keys($set1[$index]), NULL);
                    $row = isset($set2[$index]) ? array_merge_recursive(($set1[$index]), ($set2[$index])) : array_merge_recursive(($set1[$index]), $empty_array);
                    array_push($record_set, $row);
                }
            } else {
                foreach ($set2 as $index => $value) {
                    $empty_array = array_fill_keys(array_keys($set2[$index]), NULL);
                    $row = isset($set1[$index]) ? array_merge_recursive(($set1[$index]), ($set2[$index])) : array_merge_recursive($empty_array, ($set2[$index]));
                    array_push($record_set, $row);
                }
            }
            return $record_set;
        } catch (Exception $ex) {
            
        }
    }

}
