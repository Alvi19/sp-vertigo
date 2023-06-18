<section id="hero" class="hero d-flex align-items-center">
   <div class="container">
      <h1 class="text-center text-bold">Hasil Diagnosa</h1> <br>
      <form action="" method="post">
         <div class="card-body">
            <div class='alert alert-primary alert-dismissible'>
               <div class="card mb-3">
                  <div class="row g-0">
                     <div class="col-md-5" style="background-image: url('<?= base_url('assets/'); ?>assets/img/vertigo.jpg'); background-position: center;">
                     </div>
                     <div class="col-md-7 p-4">
                        <div class="text-center">
                           <h3><?= $pasien->nama ?>, <?= $pasien->alamat ?>, <?= $pasien->JK ?></h3>
                           <h3 class="text-center">Hasil dari kriteria Gejela penyakit Vertigo anda adalah</h3>
                           <div class="alert alert-success">
                              <?= $penyakit ?> <br>
                              dengan kategori <?= $kategori ?>
                           </div>
                           <h3 class="">Dengan Kesimpulan</h3>
                           <ul>
                              <?php foreach ($detail_hasil as $hasil) {
                              ?>
                                 <li><?= $hasil->nama_penyakit ?> : <?= $hasil->presentase ?>%</li>
                              <?php
                              } ?>
                           </ul>
                           <h3>SOLUSINYA</h3>
                           <p><?= $solusi ?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </div>
</section>