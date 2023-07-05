<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['hewan'] = $this->ModelHewan->getHewan()->result_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/templates/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak Boleh Kosong']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Alamat tidak Boleh Kosong']);
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required|trim', ['required' => 'Nomor Telepon tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/templates/ubahprofile', $data);
            $this->load->view('admin/templates/footer', $data);
            }
            else {
                $nama = $this->input->post('nama', true);
                $email = $this->input->post('email', true);
                $alamat = $this->input->post('alamat', true);
                $no_telepon = $this->input->post('no_telepon', true);
                //jika ada gambar yang akan diupload
                $upload_image = $_FILES['image']['name'];

                if ($upload_image) {
                    $config['upload_path'] = './assets/img/profile/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '300000';
                    $config['max_width'] = '10024';
                    $config['max_height'] = '10000';
                    $config['file_name'] = 'pro' . time();
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {$gambar_lama = $data['user']['image'];
                        if ($gambar_lama != 'default.jpg') {unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                        }       
                        $gambar_baru = $this->upload->data('file_name');
                        $this->db->set('image', $gambar_baru);
                    } 
                    else { }
                }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->set('alamat', $alamat);
            $this->db->set('no_telepon', $no_telepon);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Profil Berhasil di Ubah.
            </div>');
            redirect('admin');
        }
    }

    public function data_barang()
    {
        $data['judul'] = 'Data Barang';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->ModelBarang->cekData()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/barang/data_barang', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function input_barang()
    {
        $barang = $this->input->post('barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok= $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = ''){}
        else {
            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal di Upload";
            }
            else{
                $gambar=$this->upload->data('file_name');
            }
        }
        $data = [
            'barang' => $barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        ];
        $this->ModelBarang->simpanBarang($data, 'barang');
        redirect('admin/data_barang');
    }

    public function detailBarang($id){
        $data['judul'] = 'Detail Barang';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->ModelBarang->detailBarang($id);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/barang/detail_barang', $data);
        $this->load->view('admin/templates/footer', $data);
    }
    public function editbarang($id)
    {
        $data['judul'] = 'Edit Data Barang';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['barang'] = $this->ModelBarang->getBarangWhere($where, 'barang')->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/barang/edit_barang', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updatebarang()
    {
        $id = $this->input->post('id');
        $barang = $this->input->post('barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok= $this->input->post('stok');

        $data = [
            'barang' => $barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok
        ];
        $where = [
            'id' => $id
        ];
        $this->ModelBarang->updateBarang($where, $data, 'barang');
        redirect('admin/data_barang');
    }

    public function hapusbarang($id)
    {
        $where = array('id' => $id);
        $this->ModelBarang->hapusBarang($where, 'barang');
        redirect('admin/data_barang');
    }

    public function invoice(){
        $data['judul'] = 'Pesanan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->ModelInvoice->tampilData();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/invoice/invoice', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detailInvoice($id_invoice){
        $data['judul'] = 'Detail Pesanan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->ModelInvoice->ambilIdInvoice($id_invoice);
        $data['pesanan'] = $this->ModelInvoice->ambilIdPesanan($id_invoice);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/invoice/detailinvoice', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function data_user(){
        $data['judul'] = 'Data User';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/user/data_user', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detailUser($id){
        $data['judul'] = 'Detail User';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->ModelUser->detailUser($id);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/user/detail_user', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function hapusUser($id)
    {
        $where = array('id' => $id);
        $this->ModelUser->hapusUser($where, 'user');
        redirect('admin/data_user');
    }

    public function dataHewan()
    {
        $data['judul'] = 'Data Hewan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewan()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/hewan/data_hewan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function inputHewan()
    {
        $nama_hewan = $this->input->post('nama_hewan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $id_species = $this->input->post('id_species');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $status_adopsi= $this->input->post('status_adopsi');
        $image = $_FILES['image']['name'];
        if ($image = ''){}
        else {
            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')){
                echo "Gambar Gagal di Upload";
            }
            else{
                $image=$this->upload->data('file_name');
            }
        }
        $data = [
            'nama_hewan' => $nama_hewan,
            'jenis_kelamin' => $jenis_kelamin,
            'id_species' => $id_species,
            'tanggal_lahir' => $tanggal_lahir,
            'status_adopsi' => $status_adopsi,
            'image' => $image
        ];
        $this->ModelHewan->simpanHewan($data, 'hewan');
        redirect('admin/dataHewan');
    }

    public function detailHewan($id){
        $data['judul'] = 'Detail Hewan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->detailHewan($id);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/hewan/detail_hewan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function editHewan($id)
    {
        $data['judul'] = 'Edit Data Hewan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['hewan'] = $this->ModelHewan->getHewanWhere($where, 'hewan')->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/hewan/edit_hewan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updateHewan()
    {
        $id = $this->input->post('id');
        $nama_hewan = $this->input->post('nama_hewan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $id_species = $this->input->post('id_species');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $status_adopsi= $this->input->post('status_adopsi');

        $data = [
            'nama_hewan' => $nama_hewan,
            'jenis_kelamin' => $jenis_kelamin,
            'id_species' => $id_species,
            'tanggal_lahir' => $tanggal_lahir,
            'status_adopsi' => $status_adopsi,
        ];
        $where = [
            'id' => $id
        ];
        $this->ModelHewan->updateHewan($where, $data, 'hewan');
        redirect('admin/dataHewan');
    }

    public function hapusHewan($id)
    {
        $where = array('id' => $id);
        $this->ModelHewan->hapusHewan($where, 'hewan');
        redirect('admin/dataHewan');
    }

    public function dataSpecies()
    {
        $data['judul'] = 'Data Species Hewan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['species'] = $this->ModelHewan->getSpecies()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/species/data_species', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function inputSpecies()
    {
        $species = $this->input->post('species');

        $data = [
            'species' => $species,
        ];
        $this->ModelHewan->simpanSpecies($data, 'species');
        redirect('admin/dataSpecies');
    }

    public function editSpecies($id)
    {
        $data['judul'] = 'Edit Data Species';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_species' => $id);
        $data['species'] = $this->ModelHewan->SpeciesWhere($where, 'species')->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/species/edit_species', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updateSpecies()
    {
        $id_species = $this->input->post('id_species');
        $species = $this->input->post('species');

        $data = [
            'species' => $species
        ];
        $where = [
            'id_species' => $id_species
        ];
        $this->ModelHewan->updateSpecies($where, $data, 'species');
        redirect('admin/dataSpecies');
    }

    public function hapusSpecies($id)
    {
        $where = array('id_species' => $id);
        $this->ModelHewan->hapusSpecies($where, 'species');
        redirect('admin/dataSpecies');
    }

    public function dataRelawan(){
        $data['judul'] = 'Data Relawan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['relawan'] = $this->ModelRelawan->cekData()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/relawan/data_relawan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detailRelawan($id){
        $data['judul'] = 'Detail Relawan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['relawan'] = $this->ModelRelawan->detailRelawan($id);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/relawan/detail_relawan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function editRelawan($id)
    {
        $data['judul'] = 'Edit Data Relawan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['relawan'] = $this->ModelRelawan->getRelawanWhere($where, 'relawan')->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/relawan/edit_relawan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updaterelawan()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');
        $status_relawan= $this->input->post('status_relawan');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon,
            'status_relawan' => $status_relawan
        ];
        $where = [
            'id' => $id
        ];
        $this->ModelRelawan->updateRelawan($where, $data, 'relawan');
        redirect('admin/dataRelawan');
    }

    public function hapusRelawan($id)
    {
        $where = array('id' => $id);
        $this->ModelRelawan->hapusRelawan($where, 'relawan');
        redirect('admin/dataRelawan');
    }
    
    public function dataDonasi(){
        $data['judul'] = 'Data Paket Donasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['donasi'] = $this->ModelDonasi->cekData()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/donasi/data_donasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detailDonasi($id_donasi){
        $data['judul'] = 'Detail Donasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['donasi'] = $this->ModelDonasi->ambilIDonasi($id_donasi);
        $data['detail'] = $this->ModelDonasi->ambilIdDetail($id_donasi);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/donasi/detail_donasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function dataAdopsi(){
        $data['judul'] = 'Data Adopsi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['adopsi'] = $this->ModelAdopsi->cekData()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/data_adopsi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    
}
