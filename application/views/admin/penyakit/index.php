<Section class="section">
   <div class="section-header">
      <h1>Penyakit</h1>
   </div>
   <div class="section-body">
      <div class="card card-primary">
         <div class="card-header">

            <div class="card-header-action">
               <a href="<?php echo base_url('admin/penyakit/create'); ?>" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="table-responsive">
                     <table class="table table-striped table-bordered" id="tabel">
                        <thead>
                           <tr>
                              <th width='10%'>No</th>
                              <th>Kategori</th>
                              <th>Solusi</th>
                              <th>Nama Penyakit</th>
                              <th>Deskripsi</th>
                              <th width='17%'>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($data as $_data) {
                           ?>
                              <tr>
                                 <td><?= $_data->id ?></td>
                                 <td><?= $_data->kategori ?></td>
                                 <td><?= $_data->solusi ?></td>
                                 <td><?= $_data->nama_penyakit ?></td>
                                 <td><?= $_data->deskripsi ?></td>
                                 <td>
                                    <a class="btn btn-icon btn-warning btn-sm" href="<?= base_url('admin/penyakit/edit/' . $_data->id); ?>"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= base_url('admin/penyakit/delete/' . $_data->id); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                                 </td>
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
      </div>
   </div>
</Section>