<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        try {
            if ($this->session->has_userdata('is_logged_in'))
                redirect('cars_details');
            $data = array();
            $data['title'] = 'DTS4K Login';
            $this->load->view('templates/header', $data);
            $this->load->view('login');
            $this->load->view('templates/footer');
        } catch (Exception $ex) {
            
        }
    }

    public function check() {
        try {
            if (empty($this->input->post('password'))) {
                $this->session->set_flashdata('message', 'Please Enter A Password');
                redirect('login');
            } else {
                if (($stored_pw = file_get_contents(".pw")) === FALSE) {
                    $this->session->set_flashdata('message', 'Please Try Again');
                    redirect('login');
                } else {
                    if (trim(md5($this->input->post('password'))) == trim($stored_pw)) {
                        $this->session->set_userdata('is_logged_in', TRUE);
                        $this->session->set_userdata('language', $this->input->post('language'));
                        redirect('cars_details');
                    } else {
                        $this->session->set_flashdata('message', 'Incorrect Password Supplied! Please Try Again!');
                        redirect('login');
                    }
                }
            }
        } catch (Exception $ex) {
            
        }
    }

    public function logout() {
        try {
            $this->session->unset_userdata('is_logged_in');
            redirect('login');
        } catch (Exception $ex) {
            
        }
    }

    public function switch_language() {
        try {
            $referer = $this->agent->referrer();
            $redirect = strstr($referer, "generate_report", TRUE);
            if (!$redirect)
                $redirect = $this->agent->referrer();
            $language = empty($this->session->userdata('language')) || $this->session->userdata('language') == "english" ? "french" : "english";
            $this->session->set_userdata('language', $language);
            redirect($redirect, 'refresh');
        } catch (Exception $ex) {
            
        }
    }

}

?>