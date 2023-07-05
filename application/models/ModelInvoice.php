<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelInvoice extends CI_Model
{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $invoice = array (
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
        );
        $this->db->insert('pesanan', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'id_invoice' => $id_invoice,
                'id_barang' => $item['id'],
                'nama_barang' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            );
            $this->db->insert('detail_pesanan', $data);
        }
        return TRUE;
    }

    public function tampilData(){
        $result = $this->db->get('pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }

    public function ambilIdInvoice($id_invoice){
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('pesanan');
        if($result->num_rows() > 0){
            return $result->row();
        }
        else{
            return false;
        }
    }

    public function ambilIdPesanan($id_invoice){
        $result = $this->db->where('id_invoice', $id_invoice)->get('detail_pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }
}