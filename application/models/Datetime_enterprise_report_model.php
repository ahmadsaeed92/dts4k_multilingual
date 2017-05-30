<?php

class Datetime_enterprise_report_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data($condition, $green_target, $red_target) {
        try {
            $data = array();
            if (!$res_events = $this->get_event_wise_stats($condition))
                return FALSE;
            elseif (!$res_goals = $this->get_goal_stats($condition, $green_target, $red_target)) {
                return FALSE;
            } elseif (!$res_top = $this->get_top_5($condition)) {
                return FALSE;
            } else {
                $data['events_result'] = $res_events;
                $data['goals_result'] = $res_goals;
                $data['top_result'] = $res_top;
                return $data;
            }
        } catch (Exception $ex) {
            
        }
    }

    public function get_event_wise_stats($condition) {
        try {
            $sql = "select
                    ifnull(round(avg(case when et.id = 5   then e.duration_dsec end)/10),0) as avg_time_puw,
                    ifnull(count(case when et.id = 5   then v.id end),0) as total_cars_puw,
                    ifnull(round(sum(case when et.id = 5  then e.duration_dsec end)/10),0) as total_time_puw,

                    ifnull(round(avg(case when et.id = 3 then e.duration_dsec end)/10),0) as avg_time_cash,
                    ifnull(count(case when et.id = 3  then v.id end),0) as total_cars_cash,
                    ifnull(round(sum(case when et.id = 3 then e.duration_dsec end)/10),0) as total_time_cash,

                    ifnull(round(avg(case when et.id = 2 then e.duration_dsec end)/10),0) as avg_time_menu,
                    ifnull(count(case when et.id = 2 then v.id end),0) as total_cars_menu,
                    ifnull(round(sum(case when et.id = 2 then e.duration_dsec end)/10),0) as total_time_menu,

                    ifnull(round(avg(case when et.id = 6 then e.duration_dsec end)/10),0) as avg_time_greet,
                    ifnull(count(case when et.id = 6 then v.id end),0) as total_cars_greet,
                    ifnull(round(sum(case when et.id = 6 then e.duration_dsec end)/10),0) as total_time_greet,

                    ifnull(count(distinct v.id),0) as total_cars_total,
                    (select ifnull(round(avg(duration_dsec)/10),0) from visit_tbl where $condition) as avg_time_total,
                    (select ifnull(sum(duration_dsec)/10,0) from visit_tbl where $condition) as total_time_total

                    from visit_tbl v join event_tbl e on v.id = e.visit_id join eventType_tbl et on et.id = e.eventType_id
                    where $condition";
            $query = $this->db->query($sql);
            if (!$query) {
                return FALSE;
            } else {
                return $query->result_array();
            }
        } catch (Exception $ex) {
            return FALSE;
        }
    }

    public function get_goal_stats($condition, $green_target, $red_target) {
        try {
            $green_target *= 10;
            $red_target *= 10;
            $green_avg = (($green_target * 2) + 10) / 2;
            $red_avg = (($red_target * 2) + 10) / 2;
            $sql = "select 
                    count(case when duration_dsec <= {$green_target} then id end) as green_count,
                    count(case when duration_dsec > {$green_avg} and duration_dsec <= {$red_avg} then id end ) as yellow_count,
                    count(case when duration_dsec > {$red_avg} then id end) as red_count
                    from visit_tbl
                    where $condition";
            $query = $this->db->query($sql);
            if (!$query)
                return FALSE;
            else {
                $result = $query->result_array();
                foreach ($result as $index => $row) {
                    $sum = array_sum($row);
                    foreach ($row as $key => $value) {
                        $k = explode("_", $key);
                        $new_key = array_shift($k) . "_pct";
                        $result[$index][$new_key] = ($sum == 0) ? 0 : round((floatval($value) / $sum) * 100, 2);
                    }
                }
                return $result;
            }
        } catch (Exception $ex) {
            return FALSE;
        }
    }

    public function get_top_5($condition) {
        try {
            $top_puw = "select v.id as car_no, v.begin_time as time_stamp, e.duration_dsec/10 as secs
                        from visit_tbl v join event_tbl e on v.id = e.visit_id join eventType_tbl et on et.id = e.eventType_id
                        where et.id = 5 and e.duration_dsec is not null and $condition
                        order by e.duration_dsec limit 5";
            $puw_query = $this->db->query($top_puw);
            if (!$puw_query)
                return FALSE;
            else {
                $top_puw_result = $puw_query->result_array();
            }
            $top_menu = "select v.id as car_no, v.begin_time as time_stamp, e.duration_dsec/10 as secs
                        from visit_tbl v join event_tbl e on v.id = e.visit_id join eventType_tbl et on et.id = e.eventType_id
                        where et.id = 2 and e.duration_dsec is not null and $condition
                        order by e.duration_dsec limit 5";
            $menu_query = $this->db->query($top_menu);
            if (!$menu_query)
                return FALSE;
            else {
                $top_menu_result = $menu_query->result_array();
            }
            $top_cash = "select v.id as car_no, v.begin_time as time_stamp, e.duration_dsec/10 as secs
                        from visit_tbl v join event_tbl e on v.id = e.visit_id join eventType_tbl et on et.id = e.eventType_id
                        where et.id = 3 and e.duration_dsec is not null and $condition
                        order by e.duration_dsec limit 5";
            $cash_query = $this->db->query($top_cash);
            if (!$cash_query)
                return FALSE;
            else {
                $top_cash_result = $cash_query->result_array();
            }
            $top_greet = "select v.id as car_no, v.begin_time as time_stamp, e.duration_dsec/10 as secs
                        from visit_tbl v join event_tbl e on v.id = e.visit_id join eventType_tbl et on et.id = e.eventType_id
                        where et.id = 6 and e.duration_dsec is not null and $condition
                        order by e.duration_dsec limit 5";
            $greet_query = $this->db->query($top_greet);
            if (!$greet_query)
                return FALSE;
            else {
                $top_greet_result = $greet_query->result_array();
            }
            $top_total = "select id as car_no, begin_time as time_stamp, duration_dsec/10 as secs
                        from visit_tbl v 
                        where duration_dsec is not null and $condition
                        order by duration_dsec limit 5";
            $total_query = $this->db->query($top_total);
            if (!$total_query)
                return FALSE;
            else {
                $top_total_result = $total_query->result_array();
            }
            $top_5_data = array();
            $top_5_data['top_puw'] = $top_puw_result;
            $top_5_data['top_menu'] = $top_menu_result;
            $top_5_data['top_cash'] = $top_cash_result;
            $top_5_data['top_greet'] = $top_greet_result;
            $top_5_data['top_total'] = $top_total_result;
            return $top_5_data;
        } catch (Exception $ex) {
            return FALSE;
        }
    }

}
