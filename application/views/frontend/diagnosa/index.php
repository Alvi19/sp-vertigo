<section id="hero" class="hero d-flex align-items-center">
   <div class="container">
      <div class="row">
         <div class="container">
            <h3 class="text-center fw-bold text-primary mb-3">SISTEM PAKAR DIAGNOSA PENYAKIT VERTIGO</h3>
            <form action="" method="post">
               <div class="row">
                  <div class="col">
                     <div class="card">
                        <div class="card-body">
                           <div class="form-group">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?= $nama ?>" </div>
                              <div class="form-group">
                                 <label class="pb-2">Jenis kelamin</label>
                                 <br>
                                 <div class="row pb-1">
                                    <div class="col-6">
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="laki-laki">
                                          <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="jk" id="perempuan" value="perempuan">
                                          <label class="form-check-label" for="perempuan">Perempuan</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="alamat">Alamat</label>
                                 <textarea class="form-control" id="alamat" name="alamat" cols="15" rows="5" placeholder="Masukkan Alamat Lengkap"><?= $alamat ?></textarea>
                              </div>
                              <br>
                              <div class="row mb-3">
                                 <div class="col">
                                    <div class="card">
                                       <div class="card-body">
                                          <h3>Jenis-Jenis Penyakit Vertigo</h3>
                                          <hr>
                                          <?php foreach ($data as $_penyakit) { ?>
                                             <div><?= $_penyakit->nama_penyakit ?>
                                             </div>
                                          <?php } ?>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="text-center mb-3">
                  <a href="<?php echo base_url('home'); ?>" class="btn btn-danger btn-md">Kembali</a>
                  <button type="submit" class="btn btn-primary btn-md" id="mulai">Mulai</button>
               </div>
            </form>
         </div>
      </div>
</section>