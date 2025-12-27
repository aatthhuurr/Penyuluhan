<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengukuran_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Pengukuran_model', 'Kunjungan_model']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list_pengukuran'] = $this->Pengukuran_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pengukuran/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_pengukuran()
    {
        if ($this->input->method() === 'post') {

            $data = [
                'tgl_ukur'  => $this->input->post('tgl_ukur'),
                'bb'      => $this->input->post('bb'),
                'tb' => $this->input->post('tb'),
                'lk' => $this->input->post('lk'),
                'vaksin' => $this->input->post('vaksin'),
                'status_gizi' => $this->input->post('status_gizi'),
            ];


            $this->Pengukuran_model->tambah($data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show">
                Data pengukuran berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>'
            );

            redirect('pengukuran');
        }

        // GET request → tampilkan form
        $data['kunjungan'] = $this->Kunjungan_model->getKunjunganJoin();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pengukuran/tambah_pengukuran', $data);
        $this->load->view('template/footer');
    }



    public function hapus_pengukuran($id)
    {
        $this->Pengukuran_model->hapus($id);
        redirect('pengukuran');
    }

    public function ubah_pengukuran($id)
    {
        if ($this->input->method() === 'post') {

            $data = [
                'tgl_ukur'  => $this->input->post('tgl_ukur'),
                'bb'      => $this->input->post('bb'),
                'tb' => $this->input->post('tb'),
                'lk' => $this->input->post('lk'),
                'vaksin' => $this->input->post('vaksin'),
                'status_gizi' => $this->input->post('status_gizi'),
            ];

            $this->Pengukuran_model->ubah($id, $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success">Data pengukuran berhasil diubah</div>'
            );

            redirect('pengukuran');
        }

        // GET → tampilkan form edit
        $data['pengukuran'] = $this->Pengukuran_model->get_by_id($id);
        $data['kunjungan'] = $this->Kunjungan_model->get_all();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pengukuran/ubah_pengukuran', $data);
        $this->load->view('template/footer');
    }
}
