<?php
class Admin_dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->session->set_userdata('HTTP_REFERER',current_url());
    }
    function index(){
        $data = array(
            'title'=>'Admin Dashboard',
            'pagetitle'=>'Dashboard',
            'pagesubtitle'=>'padi Internet',
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin',
                'third'=>'Users',
                'thirdurl'=>'/admin/dashboard'
            ),
            'menuactive'=>$this->common->set_menu_active('dashboard')
        );
        $this->load->view('admin/dashboard',$data);
    }
}