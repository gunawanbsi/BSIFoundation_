<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>BSI Foundation | <?php echo $judul; ?> </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href ="<?php echo base_url()?>assets/img/logo.png" rel ="shortcut icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url()?>assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="<?php echo base_url().'visitor'?>" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="<?php echo base_url()?>assets/img/logo.png" alt="Icon" />
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="<?php echo base_url().'visitor'?>" class="nav-item nav-link">Home</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Konservasi</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="<?php echo base_url().'visitor/orangutan'?>" class="dropdown-item">Orangutan</a>
              <a href="<?php echo base_url().'visitor/komodo'?>" class="dropdown-item">Komodo</a>
              <a href="<?php echo base_url().'visitor/bacusa'?>" class="dropdown-item">Badak Bercula Satu</a>
              <a href="<?php echo base_url().'visitor/harimau'?>" class="dropdown-item">Harimau Sumatera</a>
              <a href="<?php echo base_url().'visitor/gajah'?>" class="dropdown-item">Gajah Sumatera</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Tentang Kami</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="<?php echo base_url().'visitor/visimisi'?>" class="dropdown-item">Visi Misi</a>
              <a href="<?php echo base_url().'visitor/sejarah'?>" class="dropdown-item">Sejarah</a>
              <a href="<?php echo base_url().'visitor/relawan'?>" class="dropdown-item">Relawan</a>
              <a href="<?php echo base_url().'visitor/kontak'?>" class="dropdown-item">Hubungi Kami</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Publikasi</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="<?php echo base_url().'visitor/berita'?>" class="dropdown-item">Berita Terkini</a>
              <a href="<?php echo base_url().'visitor/galeri'?>" class="dropdown-item">Galeri Foto</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Partisipasi</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="<?php echo base_url().'user/donasi'?>" class="dropdown-item">Donasi</a>
              <a href="<?php echo base_url().'user/adopsi'?>" class="dropdown-item">Adopsi</a>
              <a href="<?php echo base_url().'toko'?>" class="dropdown-item">Toko</a>
              <a href="<?php echo base_url().'relawan/dafrel'?>" class="dropdown-item">Jadilah Relawan Kami</a>
            </div>
          </div>
        </div>
        <a href="<?php echo base_url().'autentifikasi'?>" class="button-green"
          >Login<i class="fa fa-user ms-3"></i
        ></a>
      </div>
    </nav>
    <!-- Navbar End -->