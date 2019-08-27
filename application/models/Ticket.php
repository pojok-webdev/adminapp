<?php
class Ticket extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function gets(){
        $sql = "select id,kdticket,clientname,create_date from tickets ";
        $sql.= "where status = '0' ";
        $sql.= "order by create_date ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
}