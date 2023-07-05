<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Daftar Relawan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('partisipasi/dafrel', $data);
        $this->load->view('footer');
    }
    public function dafrel()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        //membuat rule untuk inputan nama agar tidak boleh kosong dengan membuat pesan error dengan 
        //bahasa sendiri yaitu 'Nama Belum diisi'
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', ['required' => 'Nama Belum diisi!!']);

        //membuat rule untuk inputan email agar tidak boleh kosong, tidak ada spasi, format email harus valid
        //dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri 
        //yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email belum diisi,
        //maka pesannya adalah 'Email Belum diisi', dan jika email yang diinput sudah dipakai user lain,
        //maka pesannya 'Email Sudah dipakai'
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', ['valid_email' => 'Email Tidak Benar!!',
        'required' => 'Email Belum diisi!!','is_unique' => 'Email Sudah Terdaftar!']);
        $this->form_validation->set_rules('alamat','Alamat','required', ['required' => 'Alamat Wajib diisi']);
        $this->form_validation->set_rules('no_telepon','Nomor Telepon','required', ['required' => 'Nomor Telepon Wajib diisi']);
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required', ['required' => 'Tanggal Lahir Wajib diisi']);
        
        //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
        //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang 
        //diinput akan disimpan ke dalam tabel user
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Daftar Relawan';
            $this->load->view('user/userheader', $data);
            $this->load->view('partisipasi/dafrel');
            $this->load->view('footer');
        } 
        else {
            $email = $this->input->post('email', true);
            $image = $data['user']['image'];
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'image' => htmlspecialchars($image),
                'status_relawan' => "Calon Relawan",
                'tanggal_input' => time()
               
            ];
            $this->ModelRelawan->simpanData($data); //menggunakan model
 
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Selamat! Anda sudah terdaftar menjadi Relawan kami. Tim kami Akan menghubungi Anda via Email.
            </div>');
            redirect('user');
        }
    }

    public function listRelawan()
    {
        $data['judul'] = 'Daftar Relawan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['relawan'] = $this->ModelRelawan->cekData()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('about/listrelawan', $data);
        $this->load->view('footer');
    }

}
  