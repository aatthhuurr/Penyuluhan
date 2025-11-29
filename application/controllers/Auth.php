<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function index()
    {
        $data['login_message'] = $this->session->flashdata('login_message');
        $this->load->view('login', $data);
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level    = $this->input->post('level');

        if (empty($username) || empty($password) || empty($level)) {
            $this->session->set_flashdata('login_message',
                "<div class='alert alert-danger mt-3'>Data tidak boleh kosong!</div>"
            );
            redirect('auth');
        }

        if ($level == "admin") {
            $query = $this->db->get_where('admin', [
                'username' => $username,
                'password' => $password
            ]);
        } else {
            $query = $this->db->get_where('user', [
                'email' => $username,
                'password' => $password
            ]);
        }

        if ($query->num_rows() > 0) {
            $user = $query->row();

            $this->session->set_userdata([
                'username' => $username,
                'level' => $level
            ]);

            redirect('dashboard');
        } else {
            $this->session->set_flashdata('login_message',
                '<div class="alert alert-danger mt-3">Username atau password salah!</div>'
            );
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
