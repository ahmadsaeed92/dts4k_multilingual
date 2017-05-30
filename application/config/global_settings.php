<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$config['global_settings'] = array();
$config['global_settings']['date_format'] = 'm/d/Y'; // U.S Date Format
$config['global_settings']['date_time_format'] = 'm/d/Y H:i:s';
$config['global_settings']['store#'] = 'Store_test'; //Store Number

// "assets/images/{client's_logo_name}"
$config['client_logo_file_path'] = 'assets/images/wendys_logo.png';

// Values for red and green goals (Temporary)
$config['global_settings']['goals_green_value'] = 90;
$config['global_settings']['goals_red_value'] = 122;
