<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($data = NULL) {
        if (!$data)
            $data = array();
        $data['title'] = $this->lang->line("labels_titles_{$this->uri->segment(1, 0)}");
        $this->load->view('templates/header', $data);
        $data['menu'] = $this->load->view('templates/left_menu');
        $data['content_header'] = $this->load->view('templates/content_header');
        $data['settings'] = $this->load->view('components/settings');
        $this->load->view('templates/footer');
        $this->load->view('settings', $data, TRUE);
    }

}
