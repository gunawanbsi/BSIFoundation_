<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('user/index', $data);
        $this->load->view('footer');
    }

    public function anggota()
    {
        $data['judul'] = 'Data Anggota';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id', 1);
        $data['anggota'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/anggota', $data);
        $this->load->view('templates/footer');
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak Boleh Kosong']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Alamat tidak Boleh Kosong']);
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required|trim', ['required' => 'Nomor Telepon tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/userheader', $data);
            $this->load->view('user/ubah-profile', $data);
            $this->load->view('footer');
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
            Profil Anda Berhasil di Ubah.
            </div>');
            redirect('user');
        }
    }
    public function home(){
        $data['judul'] = "Home";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('user/userhome', $data);
        $this->load->view('footer', $data);
    }

    public function orangutan(){
        $data['judul'] = "Orangutan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('konservasi/orangutan', $data);
        $this->load->view('footer', $data);
    }
    public function komodo(){
        $data['judul'] = "Komodo";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('konservasi/komodo', $data);
        $this->load->view('footer', $data);
    }
    public function bacusa(){
        $data['judul'] = "Badak Bercula Satu";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('konservasi/bacusa', $data);
        $this->load->view('footer', $data);
    }
    public function harimau(){
        $data['judul'] = "Harimau Sumatera";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('konservasi/harimau', $data);
        $this->load->view('footer', $data);
    }
    public function gajah(){
        $data['judul'] = "Gajah Sumatera";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('konservasi/gajah', $data);
        $this->load->view('footer', $data);
    }
    public function visimisi(){
        $data['judul'] = "Visi Misi";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('about/visimisi', $data);
        $this->load->view('footer', $data);
    }
    public function sejarah(){
        $data['judul'] = "Sejarah";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('about/sejarah', $data);
        $this->load->view('footer', $data);
    }
    public function lokasi(){
        $data['judul'] = "Lokasi";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('about/lokasi', $data);
        $this->load->view('footer', $data);
    }
    public function kontak(){
        $data['judul'] = "Hubungi Kami";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('about/kontak', $data);
        $this->load->view('footer', $data);
    }
    public function relawan(){
        $data['judul'] = "Relawan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('about/relawan', $data);
        $this->load->view('footer', $data);
    }

    public function berita(){
        $data['judul'] = "Berita Terkini";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('publikasi/berita', $data);
        $this->load->view('footer', $data);
    }

    public function galeri(){
        $data['judul'] = "Galeri Foto";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('publikasi/galeri', $data);
        $this->load->view('footer', $data);
    }

    public function adopsi(){
        $data['judul'] = "Adopsi";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewanWhere(['status_adopsi' => ("BELUM")])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('adopsi/adopsi', $data);
        $this->load->view('footer', $data);
    }

    public function adopsiHewan($id){
        $data['judul'] = "Adopsi Hewan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['adopsi'] = $this->ModelAdopsi->detailAdopsi($id);
        $this->load->view('user/userheader', $data);
        $this->load->view('adopsi/adopt', $data);
        $this->load->view('footer', $data);
       
    }

    public function prosesAdopsi(){
        $this->ModelAdopsi->index();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show mt-x" align="center" role="alert">Selamat! Anda sudah terretar menjadi Adopter.</div>');
        redirect('user/adopsi');
    }

    public function donasi()
    {
        $data['judul'] = "Donasi";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['donasi'] = $this->ModelDonasi->cekData()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('partisipasi/donasi', $data);
        $this->load->view('footer', $data);
    }

    public function bayarDonasi($id)
    {
        $data['judul'] = "Donasi";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['donasi'] = $this->ModelDonasi->detailDonasi($id);
        $this->load->view('user/userheader', $data);
        $this->load->view('partisipasi/bayar_donasi', $data);
        $this->load->view('footer', $data);
    }

    public function prosesDonasi()
    {
        $data['judul'] = "Proses Donasi";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['donasi'] = $this->ModelDonasi->cekData()->result();
        $this->form_validation->set_rules('nama','Nama Lengkap','required', ['required' => 'Nama Wajib diisi.']);
        $this->form_validation->set_rules('alamat','Alamat Lengkap','required', ['required' => 'Alamat Wajib diisi.']);
        $this->form_validation->set_rules('no_telepon','Nomor Telepon','required', ['required' => 'Nomor Telepon Wajib diisi.']);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/userheader', $data);
            $this->load->view('partisipasi/bayar_donasi');
            $this->load->view('footer');
        } 
        else {
            $id_donasi = $this->input->post('id_donasi');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $no_telepon = $this->input->post('no_telepon');
            $paket_donasi = $this->input->post('paket_donasi');
            $data = [   
                'id_donasi' => $id_donasi,
                'nama' => $nama,
                'alamat' => $alamat,
                'no_telepon' => $no_telepon,
                'paket_donasi' => $paket_donasi
            ];
            $this->ModelDonasi->simpanDonasi($data, 'detail_donasi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" align="center" role="alert">Terimakasih Atas Donasi Anda.</div>');
            redirect('user/donasi');
        }
    }
}