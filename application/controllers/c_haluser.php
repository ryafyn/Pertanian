<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class C_haluser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('haluser_model');
        $this->load->helper(['url', 'form']); 
        $this->load->library(['session', 'form_validation']); 
    }

    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        
        $data['pembeli'] = $this->haluser_model->get_all_users();
        $this->load->view('control/hal_user', $data);
    }

    public function tambah() {
        $this->load->view('control/haluser_tambah');
    }

    public function simpan() {
        $this->form_validation->set_rules('id_pembeli', 'ID Pembeli', 'required');
        $this->form_validation->set_rules('nama_pembeli', 'Nama Pembeli', 'required');
        $this->form_validation->set_rules('alamat_pembeli', 'Alamat Pembeli', 'required');
        $this->form_validation->set_rules('email_pembeli', 'Email Pembeli', 'required|valid_email');
        $this->form_validation->set_rules('no_hp_pembeli', 'No. HP Pembeli', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('control/haluser_tambah');
        } else {
            $data = [
                'id_pembeli' => $this->input->post('id_pembeli'),
                'nama_pembeli' => $this->input->post('nama_pembeli'),
                'alamat_pembeli' => $this->input->post('alamat_pembeli'),
                'email_pembeli' => $this->input->post('email_pembeli'),
                'no_hp_pembeli' => $this->input->post('no_hp_pembeli')
            ];
            $this->haluser_model->insert_pembeli($data);
            redirect('c_haluser');
        }
    }

    public function edit($id) {
        if (!$id || !$this->haluser_model->get_pembeli_by_id($id)) {
            show_404(); 
        }

        // Validasi form
        $this->form_validation->set_rules('nama_pembeli', 'Nama Pembeli', 'required');
        $this->form_validation->set_rules('alamat_pembeli', 'Alamat Pembeli', 'required');
        $this->form_validation->set_rules('email_pembeli', 'Email Pembeli', 'required|valid_email');
        $this->form_validation->set_rules('no_hp_pembeli', 'No. HP Pembeli', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['pembeli'] = $this->haluser_model->get_pembeli_by_id($id);
            $this->load->view('control/haluser_edit', $data);
        } else {
            $data = [
                'nama_pembeli' => $this->input->post('nama_pembeli'),
                'alamat_pembeli' => $this->input->post('alamat_pembeli'),
                'email_pembeli' => $this->input->post('email_pembeli'),
                'no_hp_pembeli' => $this->input->post('no_hp_pembeli')
            ];
            $this->haluser_model->update_pembeli($id, $data);
            $this->session->set_flashdata('message', 'Data pembeli berhasil diperbarui');
            redirect('c_haluser');
        }
    }

    public function hapus($id_pembeli) {
        if ($this->haluser_model->delete_user($id_pembeli)) {
            $this->session->set_flashdata('message', 'user berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Terjadi kesalahan saat menghapus admin');
        }
    
        redirect('c_haluser');
    }
}
