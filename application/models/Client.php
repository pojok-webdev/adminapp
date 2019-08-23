<?php
class Client extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function gets(){
        $sql = "select a.id,a.name,a.address,b.username am,siup,npwp,date_format(activedate,'%d %b %Y')activedate,group_concat(d.name)srv from clients a ";
        $sql.= "left outer join users b on b.id=a.sale_id ";
        $sql.= "left outer join client_sites c on c.client_id = a.id ";
        $sql.= "left outer join clientservices d on d.client_site_id=c.id  ";
        $sql.= "where a.active = '1' ";
        $sql.= "group by a.id,a.name,a.address,b.username,siup,npwp,activedate ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$que->result()
        );
    }
}