<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('is_logged_in'))
            redirect('login');
    }

    public function index() {
        try {
            $data = array();
            $data['title'] = $this->lang->line('labels_titles_help');
            $this->load->view('templates/header', $data);
            $data['menu'] = $this->load->view('templates/left_menu');
            $data['content_header'] = $this->load->view('templates/content_header');
            $data['help_html'] = $this->load->view('components/help');
            $this->load->view('templates/footer');
            $this->load->view('help', $data, TRUE);
        } catch (Exception $ex) {
            
        }
    }

}
