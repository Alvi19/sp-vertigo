<Section class="section">
   <div class="section-header">
      <h1>Gejala</h1>
   </div>
   <div class="section-body">
      <div class="card card-primary">
         <div class="card-header">

            <div class="card-header-action">
               <a href="<?php echo base_url('admin/gejala/create'); ?>" class="btn btn-primary"><i class="fa fa-plus" style=""></i> Tambah Gejala</a>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="table-responsive">
                     <table class="table table-striped table-bordered" id="tabel">
                        <thead>
                           <tr>
                              <th width='10%'>No</th>
                              <th>Nama Gejala</th>
                              <th>Bobot</th>
                              <th width='17%'>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($data as $index => $_data) {
                           ?>
                              <tr>
                                 <td><?= $index + 1 ?></td>
                                 <td><?= $_data->nama_gejala ?></td>
                                 <td><?= $_data->bobot ?></td>
                                 <td>
                                    <a class="btn btn-icon btn-warning btn-sm" href="<?= base_url('admin/gejala/edit/' . $_data->id); ?>"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= base_url('admin/gejala/delete/' . $_data->id); ?>" onclick="return deleteConfirmation();" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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