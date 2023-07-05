<!-- Footer Start -->
<div
      class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-4 col-md-6">
            <h5 class="text-light mb-4">Alamat</h5>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Cilebut No.3a, RT.01/RW.04, RTO1 RW04,<br>
                Kec. Tanah Sereal, Kota Bogor, Jawa Barat, Indonesia</p>
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+62878 0135 4248
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>12211015@gmail.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <h5 class="text-light mb-4">Newsletter</h5>
            <p>Dapatkan kabar terbaru tentang konservasi kami</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-0 w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Email Anda"
              />
              <button
                type="button"
                class="button-green py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
               Daftar
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
            });
        }, 2500);
    </script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
  </body>
</html>