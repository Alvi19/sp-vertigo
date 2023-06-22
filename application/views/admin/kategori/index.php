<Section class="section">
   <div class="section-header">
      <h1>Kategori</h1>
   </div>
   <div class="section-body">
      <div class="card card-primary">
         <div class="card-header">

            <div class="card-header-action">
               <a href="<?php echo base_url('admin/kategori/create'); ?>" class="btn btn-primary"><i class="fa fa-plus" style=""></i> Tambah Kategori</a>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="table-responsive">
                     <table class="table table-striped table-bordered" id="tabel">
                        <thead>
                           <tr>
                              <th width='10%'>No</th>
                              <th width='10%'>Kode Kategori</th>
                              <th>Nama kategori</th>
                              <th>Deskripsi</th>
                              <th width='17%'>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($data as $_data) {
                           ?>
                              <tr>
                                 <td><?= $_data->id ?></td>
                                 <td><?= $_data->kode_kategori ?></td>
                                 <td><?= $_data->nama_kategori ?></td>
                                 <td><?= $_data->deskripsi ?></td>
                                 <td>
                                    <a class="btn btn-icon btn-warning btn-sm" href="<?= base_url('admin/kategori/edit/' . $_data->id); ?>"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= base_url('admin/kategori/delete/' . $_data->id); ?>" onclick="return deleteConfirmation();" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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