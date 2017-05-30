<?php

class Cars_details_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function generate_report($start, $end, $mode = "query", $limit = NULL, $offset = NULL) {
        try {
            $sql = "select v.id, v.begin_time, v.duration_dsec / 10 as total_time, v.laneStamp, 
                ifnull((select e.duration_dsec/10 from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Greet'
                and e.visit_id = v.id),0) as greet_time,
                ifnull((select e.duration_dsec/10 from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Order'
                and e.visit_id = v.id),0) as menu_time,
                ifnull((select e.duration_dsec/10 from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Pay'
                and e.visit_id = v.id),0) as cashier_time,
                ifnull((select e.duration_dsec/10 from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Serve'
                and e.visit_id = v.id),0) as pick_up,

                CASE(ifnull((select e.duration_dsec/10 from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Pay'
                and e.visit_id = v.id),0))
                WHEN 0 THEN 
                ifnull(
                CAST((select round(e.begin_dsec/10) from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Serve'
                and e.visit_id = v.id ) as Integer) - CAST((select round(e.duration_dsec/10) from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Order'
                and e.visit_id = v.id ) as Integer),
                0)
                ELSE
                ifnull(
                CAST((select round(e.begin_dsec/10) from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Pay'
                and e.visit_id = v.id ) as Integer) - CAST((select round(e.duration_dsec/10) from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Order'
                and e.visit_id = v.id ) as Integer),
                0)
                END as queue1,

                CASE(ifnull((select e.duration_dsec/10 from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Pay'
                and e.visit_id = v.id),0))
                WHEN 0 THEN 
                0
                ELSE
                ifnull(
                CAST((select round(e.begin_dsec/10) from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Serve'
                and e.visit_id = v.id ) as Integer) - CAST((select round((e.duration_dsec/10) + e.begin_dsec/10) from event_tbl e join eventType_tbl et on et.id = e.eventType_id where et.description = 'Pay'
                and e.visit_id = v.id ) as Integer),
                0)
                END as queue2
                from visit_tbl v WHERE v.begin_time >= ? and v.begin_time <= ? order by v.begin_time desc ";
            if ($mode != "count")
                $sql .= " limit {$limit} offset {$offset}";
            if (($query = $this->db->query($sql, array($start, $end))) === FALSE) {
                return FALSE;
            } else {
                if ($mode != "count") {
                    return $query->result_array();
                } else {
                    return count($query->result_array());
                }
            }
        } catch (Exception $ex) {
            
        }
    }
    
    public function get_count($start, $end) {
        try{
            $sql = "select count(v.id) as count_records from visit_tbl v WHERE v.begin_time >= ? and v.begin_time <= ? order by v.begin_time desc ";
            if (($query = $this->db->query($sql, array($start, $end))) === FALSE) {
                return FALSE;
            } else {
                $res = $query->result_array();
                return (int)$res[0]['count_records'];
            }
        } catch (Exception $ex) {

        }
    }

}
