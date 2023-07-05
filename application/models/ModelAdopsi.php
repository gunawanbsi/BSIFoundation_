<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelAdopsi extends CI_Model
{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');
        $nama_hewan = $this->input->post('nama_hewan');
        $id_species = $this->input->post('id_species');
        $harga = $this->input->post('harga');

        $adopsi = array (
            'nama' => $nama,
            'alamat' => $alamat,
            'nama_hewan' => $nama_hewan,
            'no_telepon' => $no_telepon,
            'id_species' => $id_species,
            'tgl_adopsi' => date('Y-m-d H:i:s'),
            'batas_adopsi' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d'), date('Y') + 1)),
            'harga' => $harga,
        );
        $this->db->insert('adopsi', $adopsi);
    }

    public function detailAdopsi($id){
        $result = $this->db->where('id', $id)->get('hewan');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }

    public function cekData(){
        return $this->db->get('adopsi');
    }
}