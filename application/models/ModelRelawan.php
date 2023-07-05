<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelRelawan extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('relawan', $data);
    }
    public function cekData()
    {
        return $this->db->get('relawan');
    }
    public function getRelawanWhere($where = null)
    {
        return $this->db->get_where('relawan', $where);
    }
    public function updateRelawan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapusRelawan($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detailRelawan($id){
        $result = $this->db->where('id', $id)->get('relawan');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('relawan');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
