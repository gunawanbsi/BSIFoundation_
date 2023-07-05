<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelDonasi extends CI_Model
{   
    public function cekData(){
        return $this->db->get('donasi');
    }

    public function detailDonasi($id){
        $result = $this->db->where('id', $id)->get('donasi');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }

    public function simpanDonasi($data, $table){
        $this->db->insert($table,$data);
    }

    public function ambilIDonasi($id_donasi){
        $result = $this->db->where('id', $id_donasi)->limit(1)->get('donasi');
        if($result->num_rows() > 0){
            return $result->row();
        }
        else{
            return false;
        }
    }

    public function ambilIdDetail($id_donasi){
        $result = $this->db->where('id_donasi', $id_donasi)->get('detail_donasi');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }

    public function cekDataDetail(){
        return $this->db->get('detail_donasi');
    }
    
}