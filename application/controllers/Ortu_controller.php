<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ortu_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ortu_model');
    }

    public function index()
    {
        $data['list_ortu'] = $this->Ortu_model->get_all_ortu();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ortu/index', $data);
        $this->load->view('template/footer');
    }
}
