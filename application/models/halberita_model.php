<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halberita_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_news() {
        $query = $this->db->get('berita');
        return $query->result_array();
    }

    public function get_teratas() {
        $this->db->limit(4); 
        $query = $this->db->get('berita');
        return $query->result_array(); 
    }


    public function get_news_by_id($id) {
        $this->db->where('id_berita', $id);
        $query = $this->db->get('berita'); 
    
        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        } else {
            return null;
        }
    }    
    
    public function insert_news($data) {
        $this->db->insert('berita', $data);
        return $this->db->insert_id();
    }

    public function update_news($id, $data) {
        $this->db->where('id_berita', $id);
        return $this->db->update('berita', $data);
    }

    public function delete_news($id) {
        return $this->db->delete('berita', array('id_berita' => $id));
    }

    public function simpan() {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
        $this->form_validation->set_rules('tanggal_berita', 'Tanggal Berita', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('control/halberita_tambah');
        } else {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 2048;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar_berita')) {
                $error = ['error' => $this->upload->display_errors()];
                $this->load->view('control/halberita_tambah', $error);
            } else {
                $upload_data = $this->upload->data();

                $data = [
                    'judul_berita' => $this->input->post('judul_berita'),
                    'isi_berita'   => $this->input->post('isi_berita'),
                    'tanggal_berita' => $this->input->post('tanggal_berita'),
                    'gambar_berita'  => $upload_data['file_name'] 
                ];

                $this->insert_news($data);

                $this->session->set_flashdata('message', 'Berita berhasil ditambahkan');
                redirect('c_halberita'); 
            }
        }
    }
}
