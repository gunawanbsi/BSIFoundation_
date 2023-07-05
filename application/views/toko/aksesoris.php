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
<div class="container-xxl py-2">
        <div class="row gy-3 gx-4">
            <?php foreach ($aksesoris as $k) : ?>
                <div class="card mb-3 ms-3" style="width: 18rem;">
				<img src="<?php echo base_url().'/assets/img/upload/'.$k->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body" align="center">
                    <h5 class="card-title"><?php echo $k->barang ?></h5>
					<p> <?php echo $k->keterangan ?> </p>
					<p> Rp. <?php echo number_format($k->harga, 0, ',', '.') ?></p>
					<?php echo anchor('toko/tambahKeranjang/' .$k->id, '<div class="button-green mb-3 mt-3">Tambah ke Keranjang </div>') ?>
					<?php echo anchor('toko/detailBarang/' .$k->id, '<div class="button-blue mb-3 mt-3">Detail </div>') ?>
				</div>
			</div>
		    <?php endforeach ?>
        </div>
    </div>