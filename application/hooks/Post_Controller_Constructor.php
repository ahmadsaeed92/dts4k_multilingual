<?php

class Post_Controller_Constructor {

    public function load_languages() {
        try {
            $CI_Instance = & get_instance();
            $idiom = $CI_Instance->session->userdata('language');
            if(empty($idiom))
                $idiom = 'english';
            $CI_Instance->lang->load(array('left_menu','help_texts','tooltip_texts','labels','reports_labels'), $idiom);
        } catch (Exception $ex) {
            
        }
    }

}
