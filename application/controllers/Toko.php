<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = "Toko";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->ModelBarang->cekData()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('toko/toko', $data);
        $this->load->view('footer', $data);
    }

    public function tambahKeranjang($id){
        $barang = $this->ModelBarang->find($id);
        $data = array(
            'id' => $barang->id,
            'qty' => 1,
            'price' => $barang->harga,
            'name' => $barang->barang
        );
        $this->cart->insert($data);
        redirect('toko');
    }

    public function detailKeranjang(){
        $data['judul'] = "Keranjang";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('toko/keranjang', $data);
        $this->load->view('footer', $data);
    }

    public function hapusKeranjang(){
        $this->cart->destroy();
        redirect('toko');
    }

    public function pembayaran(){
        $data['judul'] = "Pembayaran";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('toko/pembayaran', $data);
        $this->load->view('footer', $data);
    }

    public function prosesPesanan(){
        $data['judul'] = "Proses Pemesanan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $is_processed = $this->ModelInvoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" align="center" role="alert">Selamat! Pesanan Anda berhasil di proses!.</div>');
            redirect('toko');
        }
        else{
            echo "Maaf, Pesanan Anda Gagal di Proses. Silahkan Coba Lagi Ya!!";
        }
    }

    public function detailBarang($id){
        $data['judul'] = "Detail Barang";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->ModelBarang->detailBarang($id);
        $this->load->view('user/userheader', $data);
        $this->load->view('toko/detailbarang', $data);
        $this->load->view('footer', $data);
    }

    public function aksesoris(){
        $data['judul'] = "Aksesoris";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['aksesoris'] = $this->ModelBarang->dataAksesoris()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('toko/aksesoris', $data);
        $this->load->view('footer', $data);
    }

    public function pakaian(){
        $data['judul'] = "Pakaian";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pakaian'] = $this->ModelBarang->dataPakaian()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('toko/pakaian', $data);
        $this->load->view('footer', $data);
    }

    public function useful(){
        $data['judul'] = "Barang Bermanfaat";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['useful'] = $this->ModelBarang->dataUseful()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('toko/useful', $data);
        $this->load->view('footer', $data);
    }
}