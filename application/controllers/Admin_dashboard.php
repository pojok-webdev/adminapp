<?php
class Admin_dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
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
            'menuactive'=>$this->set_menu_active('dashboard')
        );
        $this->load->view('admin/dashboard',$data);
    }
    function set_menu_active($par){
        $menu['dashboard'] = '';
        $menu['users'] = '';
        $menu['clients'] = '';
        $menu['devices'] = '';
        $menu[$par] = 'active';
        return $menu;
    }
}