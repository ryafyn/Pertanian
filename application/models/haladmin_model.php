<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Haladmin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function get_all_admin() {
        $query = $this->db->get('admin'); 
        return $query->result_array();
    }

    public function get_admin_by_username($username) {
        $query = $this->db->get_where('admin', ['username' => $username]);
        return $query->row_array();
    }

    public function insert_admin($data) {
        $this->db->insert('admin', $data);
        return $this->db->insert_id();
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
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT), 
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

    // Update admin data
    public function update_admin($username, $data) {
        $this->db->where('username', $username);
        $this->db->update('admin', $data);
    }
    

    public function delete_admin($id_admin) {
        $this->db->trans_start();

        $this->db->where('id_admin', $id_admin);
        $this->db->delete('admin');
        
        $this->db->trans_complete();
        
        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
}