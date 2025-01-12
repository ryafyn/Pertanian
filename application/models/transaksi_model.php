<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_transaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function update_status($id_transaksi, $status_baru)
    {
        $this->db->where('id_transaksi', $id_transaksi);
        return $this->db->update('transaksi', ['status_transaksi' => $status_baru]);
    }
}
