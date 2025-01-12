<?php
class C_userlogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function index() {
        $user = $this->session->userdata('user');
        
        if ($user) {
            redirect('dashboard');
        } else {
            $this->load->view('controluser/login_user');
        }
    }

    public function login_action() {
        $email = $this->input->post('email');

        if (!$email) {
            $data['error'] = "Email wajib diisi.";
            $this->load->view('controluser/login_user', $data);
            return;
        }

        $this->load->model('User_model');

        $user = $this->User_model->get_user_by_email($email);

        if ($user) {
            $this->session->set_userdata('user', $user);

            redirect('dashboard');
        } else {
            redirect('c_userlogin/registration');
        }
    }

    public function registration() {
        $this->load->view('controluser/registrasiuser');
    }

    public function register_action() {
        $data = array(
            'nama_pembeli' => $this->input->post('namaPembeli'),
            'alamat_pembeli' => $this->input->post('alamatPembeli'),
            'email_pembeli' => $this->input->post('emailPembeli'),
            'no_hp_pembeli' => $this->input->post('noHpPembeli')
        );

        $this->load->model('User_model');

        $new_id = $this->User_model->generate_new_id();

        $data['id_pembeli'] = $new_id;

        $existing_user = $this->User_model->get_user_by_email($data['email_pembeli']);
        if ($existing_user) {
            $data['error'] = "Email sudah terdaftar.";
            $this->load->view('controluser/registrasiuser', $data);
            return;
        }

        $this->User_model->insert_user($data);

        redirect('dashboard');
    }

}
