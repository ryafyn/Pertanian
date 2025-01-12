<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_by_email($email) {
        $this->db->where('email_pembeli', $email);
        $query = $this->db->get('pembeli'); 
        return $query->row_array(); 
    }

    public function generate_new_id() {
        $this->db->select('id_pembeli');
        $this->db->order_by('id_pembeli', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pembeli');

        if ($query->num_rows() > 0) {
            $last_id = $query->row()->id_pembeli;
            $last_number = substr($last_id, 1);
            $new_number = str_pad($last_number + 1, 3, '0', STR_PAD_LEFT);  
            return 'C' . $new_number;
        } else {
            return 'C001'; 
        }
    }
    
    public function insert_user($data) {
        $this->db->insert('pembeli', $data);
    }
    
    
}
