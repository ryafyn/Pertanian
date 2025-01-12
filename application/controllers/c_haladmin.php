<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_haladmin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Haladmin_model'); 
        $this->load->library('session');    
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');          
    }

    public function index() {
        $data['admins'] = $this->Haladmin_model->get_all_admin(); 
        $this->load->view('control/hal_admin', $data);            
    }

    public function tambah() {
        $this->load->view('control/haladmin_tambah'); 
    }

    public function simpan() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('id_admin', 'Id Admin', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
            $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('control/haladmin_tambah');
            } else {
                $data = [
                    'id_admin' => $this->input->post('id_admin'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'nama_admin' => $this->input->post('nama_admin'),
                ];
                
                $this->Haladmin_model->insert_admin($data);

                $this->session->set_flashdata('message', 'Admin berhasil ditambahkan');
                redirect('c_haladmin'); 
            }
        } else {
            $this->load->view('control/haladmin_tambah');
        }
    }


    public function edit($username) {
        $data['admin'] = $this->Haladmin_model->get_admin_by_username($username);
        if ($data['admin'] == null) {
            $this->session->set_flashdata('message', 'Admin not found');
            redirect('c_haladmin'); 
        }
        $this->load->view('control/haladmin_edit', $data); 
    }

    public function update($username) {
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'min_length[4]');
            $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['admin'] = $this->Haladmin_model->get_admin_by_username($username);
                $this->load->view('control/haladmin_edit', $data);
            } else {
                $data = [
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'nama_admin' => $this->input->post('nama_admin'),
                ];

                $this->Haladmin_model->update_admin($username, $data);

                $this->session->set_flashdata('message', 'Admin berhasil diubah');
                redirect('c_haladmin'); 
            }
        } else {
            $data['admin'] = $this->Haladmin_model->get_admin_by_username($username);
            $this->load->view('control/haladmin_edit', $data); 
        }
    }

    public function hapus($id_admin) {
        if ($this->Haladmin_model->delete_admin($id_admin)) {
            $this->session->set_flashdata('message', 'Admin berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Terjadi kesalahan saat menghapus admin');
        }
    
        redirect('c_haladmin');
    }
    
    public function logout() {
        $this->session->sess_destroy(); 
        redirect('c_login'); 
    }
    
}