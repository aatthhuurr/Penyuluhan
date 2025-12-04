<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ortu_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ortu_model');
        $this->load->library('form_validation'); // <-- Tambahan WAJIB!
    }

    public function index()
    {
        $data['list_ortu'] = $this->Ortu_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ortu/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_ortu()
{
    // Validasi input
    $this->form_validation->set_rules('ibu', 'Nama Ibu', 'required');

    // Jika tombol submit belum ditekan atau validasi gagal → tampilkan form
    if ($this->form_validation->run() == FALSE) {

        // TAMPILKAN FORM (bukan simpan!)
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ortu/tambah_ortu');
        $this->load->view('template/footer');

    } else {

        // Jika validasi berhasil → SIMPAN DATA
        $this->__simpan_ortu();
    }
}


    private function __simpan_ortu()
    {
        // Cegah insert NULL
        if (
            empty($this->input->post('ibu')) &&
            empty($this->input->post('ayah')) &&
            empty($this->input->post('hubungan')) &&
            empty($this->input->post('telp')) &&
            empty($this->input->post('alamat'))
        ) {
            // Jika semua kosong → tampilkan form, jangan simpan
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('ortu/tambah_ortu');
            $this->load->view('template/footer');
            return; 
        }

        $data = [
            'name_ibu' => $this->input->post('ibu'),
            'name_ayah' => $this->input->post('ayah'),
            'hubungan' => $this->input->post('hubungan'),
            'telp' => $this->input->post('telp'),
            'alamat' => $this->input->post('alamat'),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $simpan = $this->Ortu_model->tambah($data);

        if ($simpan)
        {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data orang tua berhasil ditambahkan</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data orang tua gagal ditambahkan</div>');
        }
    
        redirect('ortu');
    }
}
