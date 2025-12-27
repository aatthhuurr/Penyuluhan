<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kunjungan_model extends CI_Model
{
    public function get_all()
    {
        $this->db->select('
    kunjungan.id_kunjungan,
    anak.name,
    CONCAT(ortu.name_ayah, " / ", ortu.name_ibu) AS nama_ortu,
    kunjungan.tgl_kunjungan,
    kunjungan.fasilitas
');
        $this->db->from('kunjungan');
        $this->db->join('anak', 'anak.id_anak = kunjungan.anak_id');
        $this->db->join('ortu', 'ortu.id_ortu = anak.ortu_id');

        return $this->db->get()->result_array();
    }



    public function tambah($data)
    {
        return $this->db->insert('kunjungan', $data);
    }

    public function hapus($id)
    {
        return $this->db->delete('kunjungan', ['id_kunjungan' => $id]);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('kunjungan', ['id_kunjungan' => $id])->row();
    }

    public function ubah($id, $data)
    {
        $this->db->where('id_kunjungan', $id);
        return $this->db->update('kunjungan', $data);
    }

    public function getKunjunganJoin()
    {
        $this->db->select('
        kunjungan.id_kunjungan,
        kunjungan.tgl_kunjungan,
        anak.name AS nama_anak,
        ortu.name_ayah,
        ortu.name_ibu
    ');
        $this->db->from('kunjungan');
        $this->db->join('anak', 'anak.id_anak = kunjungan.anak_id');
        $this->db->join('ortu', 'ortu.id_ortu = anak.ortu_id');
        return $this->db->get()->result_array();
    }
}
