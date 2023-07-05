<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Visitor extends CI_Controller{

    function __construct(){
        parent :: __construct();
    }

    public function index(){
        $data['judul'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer', $data);
    }

    public function orangutan(){
        $data['judul'] = "Orangutan";
        $this->load->view('header', $data);
        $this->load->view('konservasi/orangutan', $data);
        $this->load->view('footer', $data);
    }

    public function komodo(){
        $data['judul'] = "Komodo";
        $this->load->view('header', $data);
        $this->load->view('konservasi/komodo', $data);
        $this->load->view('footer', $data);
    }
    public function bacusa(){
        $data['judul'] = "Badak Bercula Satu";
        $this->load->view('header', $data);
        $this->load->view('konservasi/bacusa', $data);
        $this->load->view('footer', $data);
    }
    public function harimau(){
        $data['judul'] = "Harimau Sumatera";
        $this->load->view('header', $data);
        $this->load->view('konservasi/harimau', $data);
        $this->load->view('footer', $data);
    }
    public function gajah(){
        $data['judul'] = "Gajah Sumatera";
        $this->load->view('header', $data);
        $this->load->view('konservasi/gajah', $data);
        $this->load->view('footer', $data);
    }
    public function visimisi(){
        $data['judul'] = "Visi Misi";
        $this->load->view('header', $data);
        $this->load->view('about/visimisi', $data);
        $this->load->view('footer', $data);
    }
    public function sejarah(){
        $data['judul'] = "Sejarah";
        $this->load->view('header', $data);
        $this->load->view('about/sejarah', $data);
        $this->load->view('footer', $data);
    }
    public function lokasi(){
        $data['judul'] = "Lokasi";
        $this->load->view('header', $data);
        $this->load->view('about/lokasi', $data);
        $this->load->view('footer', $data);
    }
    public function kontak(){
        $data['judul'] = "Hubungi Kami";
        $this->load->view('header', $data);
        $this->load->view('about/kontak', $data);
        $this->load->view('footer', $data);
    }
    public function relawan(){
        $data['judul'] = "Relawan";
        $this->load->view('header', $data);
        $this->load->view('about/relawan', $data);
        $this->load->view('footer', $data);
    }

    public function berita(){
        $data['judul'] = "Berita Terkini";
        $this->load->view('header', $data);
        $this->load->view('publikasi/berita', $data);
        $this->load->view('footer', $data);
    }

    public function galeri(){
        $data['judul'] = "Galeri Foto";
        $this->load->view('header', $data);
        $this->load->view('publikasi/galeri', $data);
        $this->load->view('footer', $data);
    }

    
}