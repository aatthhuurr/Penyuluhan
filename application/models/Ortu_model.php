<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ortu_model extends CI_Model
{

    private $table = 'ortu';

    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert($this->table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
