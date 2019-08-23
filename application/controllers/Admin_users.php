<?php
class Admin_users extends CI_Controller{
    function __construct(){
        parent::__construct();
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
            'menuactive'=>$this->set_menu_active('users')
        );
        $this->load->view('admin/useradd',$data);
    }
    function add_handler(){
        redirect('/admin_users/');
    }
    function index(){
        $data = array(
            'title'=>'Users list',
            'pagetitle'=>'Users',
            'pagesubtitle'=>'padi Internet',
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
        $this->load->view('admin/expandable_column',$data);
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
    function set_menu_active($par){
        $menu['dashboard'] = '';
        $menu['users'] = '';
        $menu['clients'] = '';
        $menu['devices'] = '';
        $menu[$par] = 'active';
        return $menu;
    }
}