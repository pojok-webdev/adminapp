<?php
class Admin_users extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->session->set_userdata('HTTP_REFERER',current_url());
        $this->load->library('common');
    }
    function add(){
        $data = array(
            'title'=>'User Add',
            'pagetitle'=>'Add User',
            'pagesubtitle'=>'padi Internet',
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin_users',
                'third'=>'Users',
                'thirdurl'=>'/admin_users',
            ),
            'menuactive'=>$this->common->set_menu_active('users')
        );
        $this->load->view('admin/useradd',$data);
    }
    function add_handler(){
        redirect('/admin_users/');
    }
    function index(){
        $this->load->model('user');
        $objs = $this->user->gets();
        $data = array(
            'title'=>'Users list',
            'pagetitle'=>'Users',
            'pagesubtitle'=>'padi Internet',
            'objs'=>$objs['res'],
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin',
                'third'=>'Users',
                'thirdurl'=>'/admin/users'
            ),
            'menuactive'=>$this->set_menu_active('users')
        );
        $this->load->view('admin/users',$data);
    }
    function custom_column(){
        $data = array(
            'title'=>'Users list',
            'pagetitle'=>'Users',
            'pagesubtitle'=>'padi Internet',
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin_users',
                'third'=>'Users',
                'thirdurl'=>'/admin_users',
            ),
            'menuactive'=>$this->set_menu_active('users')
        );
        $this->load->view('admin/custom_column',$data);
    }
    function edit(){
        $data = array(
            'title'=>'Users list',
            'pagetitle'=>'Users',
            'pagesubtitle'=>'padi Internet',
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin_users',
                'third'=>'Users',
                'thirdurl'=>'/admin_users',
            ),
            'menuactive'=>$this->set_menu_active('users')
        );
        $this->load->view('admin/user',$data);
    }
}