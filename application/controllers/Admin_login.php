<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }
    public function index(){
        $data['pesan']="";
        $this->load->view('login',$data);
    }
    public function proses_login(){
        $user=$this->input->post('username');
        $pass=$this->input->post('password');

        $ceklogin=$this->Login_model->akses_login($user,$pass);
        if ($ceklogin) {
            foreach($ceklogin as $r){
                $this->session->set_userdata('id_admin',$r->id_admin);
                $this->session->set_userdata('username',$r->username);
                $this->session->set_userdata('password',$r->password);
                $this->session->set_userdata('status',$r->status);
                redirect('Admin/index');
            }
        } else {
            $data['pesan']="Username atau Password Salah";
            $this->load->view('login',$data);
        }
        
    }
    public function keluar(){
        $this->session->sess_destroy();
        redirect('login');
    }
        
}