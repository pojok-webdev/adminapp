<?php
class Admin_tickets extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->model('ticket');
        $objs = $this->ticket->gets();
        $data = array(
            'title'=>'Tickets list',
            'pagetitle'=>'Tickets',
            'pagesubtitle'=>'padi Internet',
            'objs'=>$objs['res'],
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin',
                'third'=>'Tickets',
                'thirdurl'=>'/admin/tickets'
            ),
            'menuactive'=>$this->common->set_menu_active('tickets')
        );
        $this->load->view('admin/tickets',$data);
    }
}