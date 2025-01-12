<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Haladmin_model'); 
        $this->load->library('session'); 
        $this->load->helper('url'); 
    }

    public function index() {
        $this->load->view('control/login'); 
    }


    public function login_action() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (!$username || !$password) {
            $data['error'] = "Username dan Password wajib diisi.";
            $this->load->view('control/login', $data);
            return;
        }
    
        $admin = $this->Haladmin_model->get_admin_by_username($username);
    
        if ($admin && $admin['password'] == $password) {
            $this->session->set_userdata(array(
                'username' => $admin['username'],
                'id_admin' => $admin['id_admin']));
            redirect('halwelcome');
        } else {
            $data['error'] = "Username atau Password salah.";
            $this->load->view('control/login', $data);
        }
    }
    

    public function halwelcome() {
        if ($this->session->userdata('username')) {
            $this->load->view('control/hal_welcome');
        } else {
            redirect('c_login'); 
        }
    }

    public function logout() {
        $this->session->sess_destroy(); 
        redirect('c_login'); 
    }
}