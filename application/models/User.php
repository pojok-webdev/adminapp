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
}