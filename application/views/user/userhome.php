    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
    <div id="carouselExampleCaptions" class="mycarousel carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3800">
            <img src="<?php echo base_url()?>assets/img/orangutan.jpg" class="d-block w-100 h-x" alt="...">
            <div class="carousel-caption d-md-block">
                    <a href="<?php echo base_url().'toko'?>" class="button-green">KUNJUNGI TOKO KAMI</a>
                    <h1>BELI MERCHENDISE MENARIK KAMI</h1>
                    <h4>Sebagian hasil dari penjualan merchendise dialokasikan untuk kegiatan konservasi</h4>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="3800">
            <img src="<?php echo base_url()?>assets/img/komodo.jpg" class="d-block w-100 h-x" alt="...">
            <div class="carousel-caption  d-md-block">
                <a href="<?php echo base_url().'relawan/dafrel'?>" class="button-green">DAFTAR RELAWAN</a>
                    <h1>JADILAH PAHLAWAN KONSERVASI</h1>
                    <h4>Jadilah pahlawan konservasi dengan cara menjadi relawan kami</h4>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="3800">
            <img src="<?php echo base_url()?>assets/img/badak.jpg" class="d-block w-100 h-x" alt="...">
            <div class="carousel-caption  d-md-block">
             <a href="<?php echo base_url().'user/donasi'?>" class="button-green">DONASI SEKARANG</a>
                    <h1>BANTU WUJUDKAN UPAYA KAMI</h1>
                    <h4> Donasi adalah tulang punggung bagi kegiatan kami.</h4>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p><span class="text-primary"></span>Selamat Datang di BSI Foundation</p>
            <h1>KISAH KAMI</h1>
            <p class="mb-4">
            BSI Fondation dibentuk untuk upaya melestarikan satwa-satwa yang dilindungi
            beserta habitatnya. Diharapkan, kedepan nya lembaga kami dapat bekerja sama dengan
            masyarakat sekitar wilayah konservasi, Pemerintah Indonesia dan lembaga-lembaga
            Mitra Internasional. Ketahui lebih jauh mengenai Visi Misi, Sejarah dan Relawan kami.
            </p>
            <h5 class="mb-3">
                <a href="<?php echo base_url().'user/visimisi'?>" class="button-green">Visi Misi</a>
            </h5>
            <h5 class="mb-3">
                <a href="<?php echo base_url().'user/sejarah'?>" class="button-green">Sejarah</a>
            </h5>
            <h5 class="mb-3">
                <a href="<?php echo base_url().'user/relawan'?>" class="button-green">Relawan</a>
            </h5>
            <h5 class="mb-3">
                <a href="<?php echo base_url().'user/kontak'?>" class="button-green">Hubungi Kami</a>
            </h5>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="img-border">
              <img class="img-fluid" src="<?php echo base_url()?>assets/img/img-galeri19.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div
      class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <i class="fa fa-paw fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up"><?=$this->ModelHewan->getHewan('id')->num_rows(); ?></h1>
            <p class="text-white mb-0">Jumlah Hewan di Konservasi Kami</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <i class="fa fa-users fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up"><?=$this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></h1>
            <p class="text-white mb-0">Jumlah User</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up"><?=$this->ModelRelawan->cekData('id')->num_rows(); ?></h1>
            <p class="text-white mb-0">Jumlah Relawan di Konservasi Kami</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up"><?=$this->ModelHewan->getSpecies('id')->num_rows(); ?></h1>
            <p class="text-white mb-0">Jumlah Species di Konservasi Kami</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Animal Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="row g-5 mb-5 align-items-end wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="col-lg-7">
            <p class="display-5 mb-0">Hewan di Konservasi Kami</p>
            <p>Saat ini, BSI Fondation fokus berfokus untuk menjaga kelestarian
            satwa-satwa dilindungi beserta habitatnya. Ada 5 Spesies yang berada di pengawasan BSI Fondation</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="<?php echo base_url().'user/komodo'?>"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/komodo2.jpg" alt="" />
                    <div class="animal-text p-4">
                      <h5 class="text-white text-center mb-0">Komodo</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a
                  class="animal-item"
                  href="<?php echo base_url().'user/bacusa'?>"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/bacusa.jpg" alt="" />
                    <div class="animal-text p-4">
                      <h5 class="text-white text-center mb-0">Badak Bercula Satu</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="<?php echo base_url().'user/orangutan'?>"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/ouu.jpg" alt="" />
                    <div class="animal-text p-4">
                      <h5 class="text-white text-center mb-0">Orangutan</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="<?php echo base_url().'user/harimau'?>"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/harimau.jpg" alt="" />
                    <div class="animal-text p-4">
                      <h5 class="text-white text-center mb-0">Harimau Sumatera</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a
                  class="animal-item"
                  href="<?php echo base_url().'user/gajah'?>"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/gajah.jpg" alt="" />
                    <div class="animal-text p-4">
                      <h5 class="text-white text-center mb-0">Gajah Sumatera</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Animal End -->