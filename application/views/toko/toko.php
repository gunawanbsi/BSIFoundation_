<div class="container-xxl py-5">
    <div class="container">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
            <h1 class>BSI FOUNDATION SHOP</h1>
            <p class>Apakah Anda sedang mencari hadiah yang bisa membantu kami memberikan perawatan sepanjang waktu kepada hewan-hewan konservasi kami yang membutuhkan?
			<br>Anda berada di tempat yang tepat! Selamat datang di Toko BSI Foundation.</p>
        </div>
    </div>
</div>
<div class="container-xxl py-5">
      <div class="container">
        <div class="row mt-3">
			<div class="col-lg-4 kategori-produk text-center wow fadeInUp" data-wow-delay="0.2s">
				<a href="<?php echo base_url('toko/aksesoris')?>">
					<figure>
						<img src="<?php echo base_url().'/assets/img/upload/shop1.png'?>">
					</figure>
					<h4><b> AKSESORIS </b></h4>
				</a>
			</div>
			<div class="col-lg-4 kategori-produk text-center wow fadeInUp" data-wow-delay="0.2s">
				<a href="<?php echo base_url('toko/pakaian')?>">
					<figure>
						<img src="<?php echo base_url().'/assets/img/upload/shop2.png'?>">
					</figure>
					<h4><b> PAKAIAN </b></h4>
				</a>
			</div>
			<div class="col-lg-4 kategori-produk text-center wow fadeInUp" data-wow-delay="0.2s">
				<a href="<?php echo base_url('toko/useful')?>">
					<figure>
						<img src="<?php echo base_url().'/assets/img/upload/shop3.png'?>">
					</figure>
					<h4><b> BARANG BERMANFAAT </b></h4>
				</a>
			</div>
		</div>
		
	</div>
</div>
	<h2  class="mb-5" align="center">TERPOPULER</h2>
	<div class="container-xxl py-2">
        <div class="row gy-3 gx-4">
            <?php foreach ($barang as $b) : ?>
                <div class="card mb-3 ms-3 wow fadeInUp" data-wow-delay="0.3s" style="width: 18rem;">
				<img src="<?php echo base_url().'/assets/img/upload/'.$b->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body" align="center">
                    <h5 class="card-title"><?php echo $b->barang ?></h5>
					<p> <?php echo $b->keterangan ?> </p>
					<p> Rp. <?php echo number_format($b->harga, 0, ',', '.') ?></p>
					<?php echo anchor('toko/tambahKeranjang/' .$b->id, '<div class="button-green mb-3 mt-3">Tambah ke Keranjang </div>') ?>
					<?php echo anchor('toko/detailBarang/' .$b->id, '<div class="button-blue mb-3 mt-3">Detail </div>') ?>
				</div>
			</div>
		    <?php endforeach ?>
        </div>
    </div>
</div>