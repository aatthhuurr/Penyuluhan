<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Anak_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Anak_model', 'Ortu_model']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list_anak'] = $this->Anak_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('anak/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_anak()
    {
        if ($this->input->method() === 'post') {

            $data = [
                'name'     => $this->input->post('name'),
                'ortu_id'  => $this->input->post('ortu_id'),
                'bb_lahir' => $this->input->post('bb_lahir'),
                'tb_lahir' => $this->input->post('tb_lahir'),
                'jk'       => $this->input->post('jk'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
            ];

            // 🔥 DEBUG SEKALI (hapus setelah tes)
            // var_dump($data); die;

            $this->Anak_model->tambah($data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show">
                Data anak berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>'
            );

            redirect('anak');
        }

        // GET request → tampilkan form
        $data['ortu'] = $this->Ortu_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('anak/tambah_anak', $data);
        $this->load->view('template/footer');
    }



    public function hapus_anak($id)
    {
        $this->Anak_model->hapus($id);
        redirect('anak');
    }

    public function ubah_anak($id)
    {
        $this->Anak_model->ubah($id);
        redirect('anak');
    }
}
