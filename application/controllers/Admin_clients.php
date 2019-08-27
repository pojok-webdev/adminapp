<?php
class Admin_clients extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->session->set_userdata('HTTP_REFERER',current_url());
        $this->load->library('common');
    }
    function add(){
        $data = array(
            'title'=>'Client Add',
            'pagetitle'=>'Add Client',
            'pagesubtitle'=>'padi Internet',
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin_clients',
                'third'=>'add',
                'thirdurl'=>'/add',
            ),
            'menuactive'=>$this->common->set_menu_active('dashboard')
        );
        $this->load->view('admin/clientadd',$data);
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
            'menuactive'=>$this->common->set_menu_active('clients')
        );
        $this->load->view('admin/clients',$data);
    }
}