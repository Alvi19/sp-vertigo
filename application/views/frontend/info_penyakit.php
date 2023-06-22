<section id="hero" class="hero d-flex align-items-center">
   <div class="container">
      <div class="row">
         <div class="section-header">
            <h1>Informasi Penyakit</h1>
         </div>
         <div class="container">
            <div class="table-responsive">
               <table class="table table-striped table-bordered" id="tabel">
                  <thead>
                     <tr>
                        <th>Kategori</th>
                        <th>Solusi</th>
                        <th>Nama Penyakit</th>
                        <th>Deskripsi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $_data) {
                     ?>
                        <tr>
                           <td><?= $_data->nama_kategori ?></td>
                           <td><?= $_data->solusi ?></td>
                           <td><?= $_data->nama_penyakit ?></td>
                           <td><?= $_data->deskripsi ?></td>
                        </tr>
                     <?php
                     }
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>