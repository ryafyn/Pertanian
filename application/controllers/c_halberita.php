<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_halberita extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('halberita_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['news'] = $this->halberita_model->get_all_news();

        $this->load->view('control/hal_berita', $data);
    
    }

    public function news() {
        $data['news'] = $this->halberita_model->get_all_news();

        $this->load->view('website/berita', $data);
    }

    public function detail($id) {
        $data['news'] = $this->halberita_model->get_news_by_id($id);
    
        if (!$data['news']) {
            show_404();
        }
    
        $this->load->view('website/detail_berita', $data);
    }
    

    
    public function tambah() {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }

        $this->load->view('control/halberita_tambah');
    }

    public function edit($id) {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }

        $data['news'] = $this->halberita_model->get_news_by_id($id);
        $this->load->view('control/halberita_edit', $data);
    }

    public function simpan() {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }

        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
        $this->form_validation->set_rules('tanggal_berita', 'Tanggal Berita', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('control/halberita_tambah');
        } else {
            $foto = $this->do_upload('gambar_berita');

            if (empty($foto)) {
                $foto = 'default.jpg'; 
            }

            $data = [
                'judul_berita'         => $this->input->post('judul_berita'),
                'isi_berita'           => $this->input->post('isi_berita'),
                'tanggal_berita'       => date('Y-m-d'),
                'gambar_berita'        => $foto,
                'id_admin'             => $this->session->userdata('id_admin') 
            ];

            $this->halberita_model->insert_news($data);

            redirect('c_halberita');
        }
    }

    public function update_news($id) {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }

        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
        $this->form_validation->set_rules('tanggal_berita', 'Tanggal Berita', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['news'] = $this->halberita_model->get_news_by_id($id);
            $this->load->view('control/halberita_edit', $data);
        } else {
            $foto = $this->do_upload('gambar_berita');

            if (empty($foto)) {
                $foto = ''; 
            }

            $data = [
                'judul_berita'         => $this->input->post('judul_berita'),
                'isi_berita'           => $this->input->post('isi_berita'),
                'tanggal_berita'       => date('Y-m-d'),
                'gambar_berita'        => $foto,
                'id_admin'             => $this->session->userdata('id_admin') 
            ];

            $this->halberita_model->update_news($id, $data);

            redirect('c_halberita');
        }
    }

    public function delete($id) {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }

        $this->halberita_model->delete_news($id);

        redirect('c_halberita');
    }


    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    private function do_upload($field_name) {
        $foto = ''; 

        if (!empty($_FILES[$field_name]['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;  
            $this->load->library('upload', $config);

            if (!is_dir($config['upload_path'])) {
                mkdir($config['upload_path'], 0777, true);
            }

            if ($this->upload->do_upload($field_name)) {
                $upload_data = $this->upload->data();
                $foto = $upload_data['file_name']; 
            } else {
                $error = ['error' => $this->upload->display_errors()];
                $this->load->view('control/halberita_tambah', $error);
            }
        }

        return $foto;
    }
}
