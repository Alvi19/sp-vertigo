<section id="hero" class="">
   <div class="container">
      <div class="card">
         <div class="card-body mb-5">
            <h1 class="text-center fw-bold text-primary">DiAGNOSA PENYAKIT VERTIGO</h1>
            <div class='alert alert-primary alert-dismissible'>
               <h4><i class="bi bi-exclamation-triangle"></i>&nbsp;Perhatian !</h4>
               <p>Silahkan pilih gejala sesuai dengan kondisi anda</p>
            </div>
            <form action="" method="post">
               <table class="table tabled-bordered">
                  <thead class="thead-light">
                     <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gejala yang dialami</th>
                        <th scope="col">Pilih</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $index => $_gejala) { ?>
                        <tr>
                           <th scope="row" width="10%"><?= $index + 1 ?></th>
                           <td><?= $_gejala->nama_gejala ?></td>
                           <td width="25%">
                              <div class="form-group">
                                 <div class="row pb-1">
                                    <div class="col-6">
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="gejala[<?= $_gejala->id ?>]" id="gejala_<?= $_gejala->id ?>" value="Ya" required>
                                          <label class="form-check-label" for="Ya">Ya</label>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="gejala[<?= $_gejala->id ?>]" id="gejala_<?= $_gejala->id ?>" value="Tidak" required>
                                          <label class="form-check-label" for="Ya">Tidak</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
               <div class="card-footer d-flex justify-content-between">
                  <a href="http://127.0.0.1:8000/diagnosa/reset" class="btn btn-secondary">Kembali</a>
                  <button type="submit" class="btn btn-primary">Selesai</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>