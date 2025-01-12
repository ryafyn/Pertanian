<?php 
class c_dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Halproduk_model');
        $this->load->model('Halberita_model'); 
        $this->load->helper('url');
    }

    public function index() {
        $this->load->helper('url');
        $data['produk'] = $this->Halproduk_model->get_all_produk();
        $data['news'] = $this->Halberita_model->get_all_news();
        $data['produk'] = $this->Halproduk_model->get_teratas();
        $data['news'] = $this->Halberita_model->get_teratas();
        $this->load->view('website/dashboard', $data);
        
    }

    public function produk() {
        $this->load->view('website/produk');
    }

    public function berita() {
        $this->load->view('website/berita');
    }

    public function kontak() {
        $this->load->view('website/kontak');
    }

    public function userlogin() {
        $this->load->view('controluser/userlogin');
    }
    
}
?>
