<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengukuran_model extends CI_Model
{
    public function get_all()
    {
        $this->db->select('
        pengukuran.id_ukur,
        pengukuran.tgl_ukur,
        pengukuran.bb,
        pengukuran.tb,
        pengukuran.lk,
        pengukuran.vaksin,
        pengukuran.status_gizi,

        kunjungan.tgl_kunjungan,

        anak.name AS nama_anak,

        CONCAT(ortu.name_ayah, " / ", ortu.name_ibu) AS nama_ortu
    ');
        $this->db->from('pengukuran');
        $this->db->join('kunjungan', 'kunjungan.id_kunjungan = pengukuran.kunjungan_id');
        $this->db->join('anak', 'anak.id_anak = kunjungan.anak_id');
        $this->db->join('ortu', 'ortu.id_ortu = anak.ortu_id');

        return $this->db->get()->result_array();
    }

    public function tambah($data)
    {
        return $this->db->insert('pengukuran', $data);
    }

    public function hapus($id)
    {
        return $this->db->delete('pengukuran', ['id_ukur' => $id]);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('pengukuran', ['id_ukur' => $id])->row();
    }

    public function ubah($id, $data)
    {
        $this->db->where('id_ukur', $id);
        return $this->db->update('pengukuran', $data);
    }
}
