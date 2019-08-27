<?php
class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get($email){
        $sql = "select id,email,username,password,salt from users ";
        $sql.= "where email = '" . $email . "'";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return $res[0];
    }
    function gets(){
        $sql = "select a.id,a.username,a.email,createdate,group_concat(c.name)gr from users a ";
        $sql.= "left outer join groups_users b on b.user_id=a.id ";
        $sql.= "left outer join groups c on c.id = a.group_id ";
        $sql.= "where a.active = '1' ";
        $sql.= "group by a.id,a.username ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$que->result()
        );
    }
}