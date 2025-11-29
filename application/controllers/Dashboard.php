<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        // Proteksi halaman: jika user belum login, redirect ke login
        if(!$this->session->userdata('username')){
            redirect('auth'); // arahkan ke controller Auth/login
        }
    }
    
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
}
