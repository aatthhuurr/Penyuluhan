<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Anak_model extends CI_Model
{
    public function get_all()
    {
        $this->db->select('
        anak.id_anak,
        anak.name,
        anak.bb_lahir,
        anak.tb_lahir,
        anak.jk,
        anak.tgl_lahir,
        ortu.name_ibu,
        ortu.name_ayah
    ');
        $this->db->from('anak');
        $this->db->join('ortu', 'anak.ortu_id = ortu.id_ortu', 'left');
        return $this->db->get()->result_array();
    }



    public function tambah($data)
    {
        return $this->db->insert('anak', $data);
    }

    public function hapus($id)
    {
        return $this->db->delete('anak', ['id_anak' => $id]);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('anak', ['id_anak' => $id])->row();
    }

    public function ubah($id, $data)
    {
        $this->db->where('id_anak', $id);
        return $this->db->update('anak', $data);
    }
}
