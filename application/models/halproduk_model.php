<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halproduk_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }


    public function get_all_produk() {
        $query = $this->db->get('produk'); 
        return $query->result_array(); 
    }

    public function get_teratas() {
        $this->db->limit(4); 
        $query = $this->db->get('produk');
        return $query->result_array();
    }

    public function get_produk_by_id($id) {
        return $this->db->get_where('produk', ['id_produk' => $id])->row_array();
    }

    public function insert_produk($data) {
        return $this->db->insert('produk', $data);
    }

    public function update_produk($id, $data) {
        $this->db->where('id_produk', $id);
        return $this->db->update('produk', $data);
    }

    public function simpan() {
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
        $this->form_validation->set_rules('id_admin', 'ID Admin', 'required');
        $this->form_validation->set_rules('nama_produk', 'Jenis Tanaman', 'required');
        $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|numeric');
        $this->form_validation->set_rules('stok_produk', 'Stok Produk', 'required|integer');
        $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('control/halproduk_tambah');
        } else {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 2048;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_produk')) {
                $error = ['error' => $this->upload->display_errors()];
                $this->load->view('control/halproduk_tambah', $error);
            } else {
                $upload_data = $this->upload->data();
                $data = [
                    'id_produk'       => $this->input->post('id_produk'),
                    'id_admin'        => $this->input->post('id_admin'),
                    'nama_produk'     => $this->input->post('nama_produk'),
                    'deskripsi_produk'=> $this->input->post('deskripsi_produk'),
                    'harga_produk'    => $this->input->post('harga_produk'),
                    'stok_produk'     => $this->input->post('stok_produk'),
                    'foto_produk'     => $upload_data['file_name'],
                    'kategori_produk' => $this->input->post('kategori_produk')
                    
                ];

                $this->Halproduk_model->insert_produk($data);
                $this->session->set_flashdata('message', 'Produk berhasil ditambahkan');
                redirect('c_halproduk');
            }
        }
    }

    public function delete_produk($id) {
        $this->db->where('id_produk', $id);
        return $this->db->delete('produk'); 
    }
 
}
