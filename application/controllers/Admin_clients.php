<?php
class Admin_clients extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function add(){
        $this->load->view('admin/clientadd');
    }
    function index(){
        $this->load->model('client');
        $objs = $this->client->gets();
        $data = array(
            'title'=>'Clients list',
            'pagetitle'=>'Clients',
            'pagesubtitle'=>'padi Internet',
            'objs'=>$objs['res'],
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin',
                'third'=>'Clients',
                'thirdurl'=>'/admin/clients'
            ),
            'menuactive'=>$this->set_menu_active('clients')
        );
        $this->load->view('admin/clients',$data);
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