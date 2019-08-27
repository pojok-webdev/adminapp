<?php
class Ticket extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function gets(){
        $sql = "select id,kdticket,clientname,date_format(create_date,'%d/%m/%Y %H:%i:%s')create_date from tickets ";
        $sql.= "where status = '0' and date(create_date)>'2018-12-31' ";
        $sql.= "order by create_date desc";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
}