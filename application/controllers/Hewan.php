<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hewan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['judul'] = 'Data Hewan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewan()->result_array();
        $data['kategori'] = $this->ModelHewan->getSpecies()->result_array();
        $this->form_validation->set_rules('Nama_Hewan', 'Nama Hewan', 'required|min_length[3]', [
            'required' => 'Nama Hewan harus diisi',
            'min_length' => 'Nama Hewan terlalu pendek'
        ]);
        $this->form_validation->set_rules('id_species', 'Species', 'required', [
            'required' => 'Species harus diisi',
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|min_length[3]', [
            'required' => 'Tanggal Lahir harus diisi',
            'min_length' => 'Tanggal Lahir terlalu pendek'
        ]);
        $this->form_validation->set_rules('status_adopsi', 'Status Adopsi', 'required', [
            'required' => 'Status Adopsi harus diisi',
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '8000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('user/userheader', $data);
            $this->load->view('profil/proforangutan', $data);
            $this->load->view('footer');
        } 
        else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } 
            else {
                $gambar = '';
            }
            $data = [
                'nama_hewan' => $this->input->post('nama_hewan', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'id_species' => $this->input->post('id_species', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'status_adopsi' => $this->input->post('status_adopsi', true),
                'image' => $gambar
            ];
            $this->ModelHewan->simpanHewan($data);
            redirect('hewan');
            }
    }

    public function profilHarimau(){
        $data['judul'] = "Profil Harimau";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewanWhere(['id_species' => (4)])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('profil/profharimau', $data);
        $this->load->view('footer', $data);
    }

    public function profilGajah(){
        $data['judul'] = "Profil Gajah";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewanWhere(['id_species' => (5)])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('profil/profgajah', $data);
        $this->load->view('footer', $data);
    }

    public function profilOrangutan(){
        $data['judul'] = "Profil Orangutan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewanWhere(['id_species' => (1)])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('profil/proforangutan', $data);
        $this->load->view('footer', $data);
    }

    public function profilKomodo(){
        $data['judul'] = "Profil Komodo";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewanWhere(['id_species' => (2)])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('profil/profkomodo', $data);
        $this->load->view('footer', $data);
    }

    public function profilBadak(){
        $data['judul'] = "Profil Badak";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewanWhere(['id_species' => (3)])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('profil/profbadak', $data);
        $this->load->view('footer', $data);
    }
}