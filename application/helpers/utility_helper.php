<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$hour_range = array();
$hour_range['00'] = '00:00-01:00';
$hour_range['01'] = '01:00-02:00';
$hour_range['02'] = '02:00-03:00';
$hour_range['03'] = '03:00-04:00';
$hour_range['04'] = '04:00-05:00';
$hour_range['05'] = '05:00-06:00';
$hour_range['06'] = '06:00-07:00';
$hour_range['07'] = '07:00-08:00';
$hour_range['08'] = '08:00-09:00';
$hour_range['09'] = '09:00-10:00';
$hour_range['10'] = '10:00-11:00';
$hour_range['11'] = '11:00-12:00';
$hour_range['12'] = '12:00-13:00';
$hour_range['13'] = '13:00-14:00';
$hour_range['14'] = '14:00-15:00';
$hour_range['15'] = '15:00-16:00';
$hour_range['16'] = '16:00-17:00';
$hour_range['17'] = '17:00-18:00';
$hour_range['18'] = '18:00-19:00';
$hour_range['19'] = '19:00-20:00';
$hour_range['20'] = '20:00-21:00';
$hour_range['21'] = '21:00-22:00';
$hour_range['22'] = '22:00-23:00';
$hour_range['23'] = '23:00-23:59';

function asset_url() {
    return base_url() . 'assets/';
}

function db_date($date_string, $mode = NULL) {
    if (is_null($mode))
        $format = 'Y-m-d H:i:s';
    else
        $format = 'Y-m-d';
    return date($format, strtotime($date_string));
}

function user_date($date_string, $format = NULL) {
    if (is_null($date_string))
        return NULL;
    $CI_Instance = & get_instance();
    if (!is_null($format))
        $format = $format;
    elseif ($CI_Instance->config->item('date_time_format', 'global_settings'))
        $format = $CI_Instance->config->item('date_time_format', 'global_settings');
    else
        $format = 'm/d/Y H:i:s';
    return date($format, strtotime($date_string));
}

function get_hour_range_by_number($hour_no) {
    if (is_null($hour_no)) {
        return NULL;
    }
    $hour_range = array();
    $hour_range['00'] = '00:00-01:00';
    $hour_range['01'] = '01:00-02:00';
    $hour_range['02'] = '02:00-03:00';
    $hour_range['03'] = '03:00-04:00';
    $hour_range['04'] = '04:00-05:00';
    $hour_range['05'] = '05:00-06:00';
    $hour_range['06'] = '06:00-07:00';
    $hour_range['07'] = '07:00-08:00';
    $hour_range['08'] = '08:00-09:00';
    $hour_range['09'] = '09:00-10:00';
    $hour_range['10'] = '10:00-11:00';
    $hour_range['11'] = '11:00-12:00';
    $hour_range['12'] = '12:00-13:00';
    $hour_range['13'] = '13:00-14:00';
    $hour_range['14'] = '14:00-15:00';
    $hour_range['15'] = '15:00-16:00';
    $hour_range['16'] = '16:00-17:00';
    $hour_range['17'] = '17:00-18:00';
    $hour_range['18'] = '18:00-19:00';
    $hour_range['19'] = '19:00-20:00';
    $hour_range['20'] = '20:00-21:00';
    $hour_range['21'] = '21:00-22:00';
    $hour_range['22'] = '22:00-23:00';
    $hour_range['23'] = '23:00-23:59';
    return $hour_range[$hour_no];
}

function get_daypart_substring($daypart) {
    if (!is_null($daypart)) {
        return substr($daypart, 1);
    }
}

function user_date_only($date_string) {
    if (is_null($date_string))
        return NULL;
    $CI_Instance = & get_instance();
    if ($CI_Instance->config->item('date_format', 'global_settings'))
        $format = $CI_Instance->config->item('date_format', 'global_settings');
    else
        $format = 'm/d/Y';
    return date($format, strtotime($date_string));
}

function secs2minsecs($secs) {
    if (is_null($secs))
        return NULL;
    elseif ($secs < 1)
        return '00:00';
    else {
        $minutes = sprintf("%02d", floor($secs / 60));
        $seconds = sprintf("%02d", $secs % 60);
        return "{$minutes}:{$seconds}";
    }
}

function secs2hour_min_secs($secs) {
    if ($secs < 1)
        return '00:00';
    else {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$secs");
//        return $dtF->diff($dtT)->format('%h:%i:%s');
//        return gmdate("H:i:s", $secs);
//        $hours = sprintf("%02d", floor($secs / 3600));
        $hours = sprintf("%02d", floor($secs / 3600));

        $secs -= $hours * 3600;
//        $minutes = sprintf("%02d", $secs % 3600);
        $minutes = sprintf("%02d", floor($secs / 60));
//        $seconds = sprintf("%02d", $secs % 60);
        return "{$hours}:{$minutes}";
//        return "{$hours}:{$minutes}:{$seconds}";
    }
}

?>