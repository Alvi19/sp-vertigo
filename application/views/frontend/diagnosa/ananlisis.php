<section id="hero" class="hero d-flex align-items-center">
   <div class="container">
      <div class="row">
         <div class="container">
            <h3>Diagnosa Penyakit Vertigo</h3>
            <form action="" method="post">
               <div class="card">
                  <div class="card-body">
                     <div class='alert alert-primary alert-dismissible'>
                        <h4><i class="bi bi-exclamation-triangle"></i>&nbsp;Perhatian !</h4>
                        <p>Silahkan pilih gejala sesuai dengan kondisi anda</p>
                     </div>
                     <form action="" method="post">
                        <input type="hidden" name="_token" value="PCSQgxZ2CAOpEsKg1jSfxBZ13I3fEozgTvgH0dWu">
                        <table class="table tabled-bordered">
                           <thead class="thead-light">
                              <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Gejala yang dialami</th>
                                 <th scope="col">Kondisi</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row" width="10%">1</th>
                                 <td>Batuk</td>
                                 <td width="25%">
                                    <div class="form-group">
                                       <select name="kondisi[]" id="kondisi" class="form-control">
                                          <option disabled selected>Pilih</option>
                                          <option value="G002_1">Ya</option>
                                          <option value="G002_0">Tidak</option>
                                       </select>
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                                 <th scope="row" width="10%">2</th>
                                 <td>Demam</td>
                                 <td width="25%">
                                    <div class="form-group">
                                       <select name="kondisi[]" id="kondisi" class="form-control">
                                          <option disabled selected>Pilih</option>
                                          <option value="G002_1">Ya</option>
                                          <option value="G002_0">Tidak</option>
                                       </select>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row" width="10%">3</th>
                                 <td>Mencret</td>
                                 <td width="25%">
                                    <div class="form-group">
                                       <select name="kondisi[]" id="kondisi" class="form-control">
                                          <option disabled selected>Pilih</option>
                                          <option value="G002_1">Ya</option>
                                          <option value="G002_0">Tidak</option>
                                       </select>
                                    </div>
                                 </td>
                              </tr>
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
      </div>
      </form>
   </div>
   </div>
</section>