<?php
class App extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function logout(){
        $data = array(
            'title'=>'PadiApp Login Page',
            'pagetitle'=>'Login',
            'pagesubtitle'=>'padi Internet',
            'breadcrumbs'=>array(
                'first'=>'Home',
                'firsturl'=>'/',
                'second'=>'Admin',
                'secondurl'=>'/admin_users',
                'third'=>'Users',
                'thirdurl'=>'/admin_users',
            ),
        );
        $this->load->view('admin/login_soft',$data);
    }
    function login_handler(){
        $params = $this->input->post();
        $email = $params['email'];
        $userpassword = $params['password'];
        $checkuser = $this->ceklogin($email,$userpassword);
        if($checkuser!==false){
            $this->session->set_userdata('useremail',$email);
            $this->session->set_userdata('username',$checkuser->username);
            $this->session->set_userdata('userid',$checkuser->id);
            redirect('admin_users');
        }else{
            redirect('app/logout');
        }
    }
    function lock(){
        $data = array(
            'title'=>'PadiApp Lock'
        );
        $this->load->view('admin/extra_lock',$data);
    }
    function ceklogin($email,$userpassword){
        $this->load->model('user');
        $user = $this->user->get($email);
        $password = $user->password;
        $salt = $user->salt;
        if($salt == null){
            $salt = "";
        }
        $_salt = substr($password,0,10);
        $_temp = sha1($_salt . $userpassword);

        $_password = $_salt . substr($_temp,0,strlen($_temp)-10);
        if(strcmp($_password,$password)===0){
            return $user;
        }else{
            return false;
        }
    }
}