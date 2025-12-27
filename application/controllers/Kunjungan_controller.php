<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kunjungan_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Kunjungan_model', 'Anak_model']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list_kunjungan'] = $this->Kunjungan_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kunjungan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_kunjungan()
    {
        if ($this->input->method() === 'post') {

            $data = [
                'anak_id'  => $this->input->post('anak_id'),
                'tgl_kunjungan'      => $this->input->post('tgl_kunjungan'),
                'fasilitas' => $this->input->post('fasilitas'),
            ];

            // 🔥 DEBUG SEKALI (hapus setelah tes)
            // var_dump($data); die;

            $this->Kunjungan_model->tambah($data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show">
                Data kunjungan berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>'
            );

            redirect('kunjungan');
        }

        // GET request → tampilkan form
        $data['anak'] = $this->Anak_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kunjungan/tambah_kunjungan', $data);
        $this->load->view('template/footer');
    }



    public function hapus_kunjungan($id)
    {
        $this->Kunjungan_model->hapus($id);
        redirect('kunjungan');
    }

    public function ubah_kunjungan($id)
    {
        if ($this->input->method() === 'post') {

            $data = [
                'anak_id'       => $this->input->post('anak_id'),
                'tgl_kunjungan' => $this->input->post('tgl_kunjungan'),
                'fasilitas'     => $this->input->post('fasilitas'),
            ];

            $this->Kunjungan_model->ubah($id, $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success">Data kunjungan berhasil diubah</div>'
            );

            redirect('kunjungan');
        }

        // GET → tampilkan form edit
        $data['kunjungan'] = $this->Kunjungan_model->get_by_id($id);
        $data['anak']      = $this->Anak_model->get_all();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kunjungan/ubah_kunjungan', $data);
        $this->load->view('template/footer');
    }

    public function getOrtuByAnak($anak_id)
    {
        $this->db->select('ortu.name_ayah, ortu.name_ibu');
        $this->db->from('anak');
        $this->db->join('ortu', 'ortu.id_ortu = anak.ortu_id');
        $this->db->where('anak.id_anak', $anak_id);

        $data = $this->db->get()->row();

        echo json_encode($data);
    }
}
