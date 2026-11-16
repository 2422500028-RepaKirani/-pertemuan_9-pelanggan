<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan1234_model extends CI_Model {

    private $_table = "pelanggan";

    public function get_all() {
        $query = $this->db->get($this->_table);
        return $query->result_array();
    }

    public function tambah($data) {
        $this->db->insert($this->_table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function get_by_id($id) {
        $this->db->where('id_pelanggan', $id);
        $query = $this->db->get($this->_table);
        return $query->row_array();
    }

    public function ubah($id, $data) {
        $this->db->where('id_pelanggan', $id);
        $this->db->update($this->_table, $data);
        return ($this->db->affected_rows() >= 0) ? true : false;
    }

    public function hapus($id) {
        $this->db->delete($this->_table, array('id_pelanggan' => $id));
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
?>