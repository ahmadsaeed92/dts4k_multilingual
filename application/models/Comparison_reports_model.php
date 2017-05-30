<?php

class Comparison_reports_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data($cond1, $cond2, $day1, $day2, $type) {
        try {
            $on_clause = "on drill_down.comparitor = roll_up.comparitor and drill_down.dates = roll_up.dates order by drill_down.comparitor";
            $group_by = "1,2";
            $select_comp = "drill_down.comparitor,";
            if ($type == "hourly_comparison") {
                $comp_group = "strftime('%H', begin_time) as comparitor,";
            } elseif ($type == "daypart_comparison") {
                $comp_group = "CASE WHEN time(begin_time) between '04:00:00' and '10:29:59' THEN '1BREAKFAST' 
                                WHEN time(begin_time) between '10:30:00' and '13:59:59' THEN '2LUNCH' 
                                WHEN time(begin_time) between '14:00:00' and '16:59:59' THEN '3AFTERNOON' 
                                WHEN time(begin_time) between '17:00:00' and '19:59:59' THEN '4DINNER' 
                                WHEN time(begin_time) between '20:00:00' and '21:59:59' THEN '5LATENIGHT' 
                                WHEN time(begin_time) between '22:00:00' and '23:59:59' or time(begin_time) between '00:00:00' and '03:59:59'  THEN '6OVERNIGHT' 
                                END AS comparitor,";
            } else {
                $comp_group = "";
                $select_comp = "";
                $on_clause = "on drill_down.dates = roll_up.dates";
                $group_by = "1";
            }
            $sql = "select drill_down.dates, {$select_comp} drill_down.avg_time_greet,drill_down.avg_time_menu,drill_down.avg_time_cash
                    ,drill_down.avg_time_puw,roll_up.avg_time_total,drill_down.total_cars_total,drill_down.pullins,drill_down.pullouts 
                    from (select
                   case when {$cond1} then '{$day1}'
                    when {$cond2} then '{$day2}'
                        end
                    as dates,
                   {$comp_group}

                   ifnull(round(avg(case when et.id = 6 then e.duration_dsec end)/10),0) as avg_time_greet,
                   
                   ifnull(round(avg(case when et.id = 2 then e.duration_dsec end)/10),0) as avg_time_menu,
                   
                   ifnull(round(avg(case when et.id = 5   then e.duration_dsec end)/10),0) as avg_time_puw,

                   ifnull(round(avg(case when et.id = 3 then e.duration_dsec end)/10),0) as avg_time_cash,

                   ifnull(count(distinct v.id),0) as total_cars_total,

                   ifnull(count(distinct case when v.is_driveoff = 1 then  v.id end),0) as pullouts,

                   ifnull(count(distinct e.visit_id) - count(distinct case when e.eventType_id = 2 then e.visit_id end),0) as pullins

                   from visit_tbl v join event_tbl e on v.id = e.visit_id join eventType_tbl et on et.id = e.eventType_id
                   where $cond1 or $cond2 
                   group by {$group_by} ) AS drill_down
                   left outer join 
                   (select case when {$cond1} then '{$day1}'
                    when {$cond2} then '{$day2}'
                        end as dates, {$comp_group} ifnull(round(avg(duration_dsec)/10),0) as avg_time_total
                    from visit_tbl
                   where $cond1 or $cond2
                    group by {$group_by}) as roll_up
                    {$on_clause}";
//            die($sql);
            $query = $this->db->query($sql);
            if (!$query) {
                return FALSE;
            } else {
                return $query->result_array();
            }
        } catch (Exception $ex) {
            
        }
    }

}
