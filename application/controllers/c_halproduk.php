<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_halproduk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Halproduk_model');
        $this->load->helper(['url', 'form']); 
        $this->load->library(['session', 'form_validation']); 
    }

    public function index() {
        $data['produk'] = $this->Halproduk_model->get_all_produk();

        $this->load->view('control/hal_produk', $data);
    }
    
    public function produk() {
        $data['produk'] = $this->Halproduk_model->get_all_produk();

        $this->load->view('website/produk', $data);
    }

    public function tambah() {
        $this->load->view('control/halproduk_tambah'); 
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
                    'kategori_produk' => $this->input->post('kategori_produk'),
                    'foto_produk'     => $upload_data['file_name']
                ];

                $this->Halproduk_model->insert_produk($data);
                $this->session->set_flashdata('message', 'Produk berhasil ditambahkan');
                redirect('c_halproduk');
            }
        }
    }

    public function edit($id) {
        $data['produk'] = $this->Halproduk_model->get_produk_by_id($id);
        $this->load->view('control/halproduk_edit', $data); 
    }

    public function update($id) {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|numeric');
        $this->form_validation->set_rules('stok_produk', 'Stok Produk', 'required|integer');
        $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['produk'] = $this->Halproduk_model->get_produk_by_id($id);
            $this->load->view('control/halproduk_edit', $data); 
        } else {
            $data = [
                'nama_produk'    => $this->input->post('nama_produk'),
                'deskripsi_produk' => $this->input->post('deskripsi_produk'),
                'harga_produk'   => $this->input->post('harga_produk'),
                'stok_produk'    => $this->input->post('stok_produk'),
                'kategori_produk' => $this->input->post('kategori_produk')
            ];

            if (!empty($_FILES['foto_produk']['name'])) {
                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_produk')) {
                    $upload_data = $this->upload->data();
                    $data['foto_produk'] = $upload_data['file_name'];
                }
            }

            $this->Halproduk_model->update_produk($id, $data);
            $this->session->set_flashdata('message', 'Produk berhasil diperbarui');
            redirect('c_halproduk');
        }
    }

    public function delete($id) {
        $produk = $this->Halproduk_model->get_produk_by_id($id);
        
        if ($produk) {
            if (!empty($produk['foto_produk']) && file_exists('./uploads/' . $produk['foto_produk'])) {
                unlink('./uploads/' . $produk['foto_produk']);
            }
    
            $this->Halproduk_model->delete_produk($id);
            $this->session->set_flashdata('message', 'Produk berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Produk tidak ditemukan');
        }
    
        redirect('c_halproduk');
    }
    
}

