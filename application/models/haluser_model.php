<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class haluser_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_users() {
        $query = $this->db->get('pembeli');
        return $query->result_array();
    }

    public function insert_pembeli($data) {
        return $this->db->insert('pembeli', $data);
    }

    public function get_pembeli_by_id($id) {
        $this->db->where('id_pembeli', $id);
        $query = $this->db->get('pembeli');
        return $query->row_array();
    }
    
    public function update_pembeli($id, $data) {
        $this->db->where('id_pembeli', $id);
        return $this->db->update('pembeli', $data);
    }
    
    public function delete_user($id_pembeli) {

        $this->db->trans_start();

        $this->db->where('id_pembeli', $id_pembeli);
        $this->db->delete('pembeli');
        
        $this->db->trans_complete();
        
        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
