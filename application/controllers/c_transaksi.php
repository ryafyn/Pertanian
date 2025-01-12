<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('transaksi_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['transaksi'] = $this->transaksi_model->get_all_transaksi();
        $this->load->view('control/hal_transaksi', $data);
    }

    public function update_status($id_transaksi, $status_baru)
    {
        $valid_status = ['Completed', 'Pending'];

        if (!in_array($status_baru, $valid_status)) {
            $this->session->set_flashdata('error', 'Status tidak valid!');
            redirect('c_transaksi');
            return;
        }

        $result = $this->transaksi_model->update_status($id_transaksi, $status_baru);

        if ($result) {
            $this->session->set_flashdata('success', 'Status transaksi berhasil diperbarui menjadi ' . $status_baru . '.');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui status transaksi.');
        }

        redirect('c_transaksi');
    }
}
