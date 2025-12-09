<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ortu_model extends CI_Model
{
    private $table = 'ortu';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert($this->table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id_ortu' => $id])->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_ortu', $id);
        $this->db->update($this->table, $data);
        return ($this->db->affected_rows() >= 0) ? true : false;
    }

    public function hapus($id)
    {
        $this->db->delete($this->table, ['id_ortu' => $id]);
        return ($this->db->affected_rows() >= 0) ? true : false;
    }
}
