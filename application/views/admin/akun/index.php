    <section class="section">
       <div class="section-body">
          <div class="card card-primary">
             <div class="card-header">
                <h4>Daftar</h4>
                <div class="card-header-action">
                   <a href="<?php echo base_url('admin/akun/create'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i>
                      Tambah
                   </a>
                </div>
             </div>
             <div class="card-body">
                <div class="row">
                   <div class="table-responsive">
                      <table class="table table-striped" id="tabel">
                         <thead>
                            <tr>
                               <th width="10%">No</th>
                               <th>Nama</th>
                               <th>Username</th>
                               <th width="25%">Email</th>
                               <th width="25%">Password</th>
                               <th width="17%">Aksi</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php foreach ($data as $index => $_data) {
                              ?>
                               <tr>
                                  <td><?= $index + 1 ?></td>
                                  <td><?= $_data->nama ?></td>
                                  <td><?= $_data->username ?></td>
                                  <td><?= $_data->email ?></td>
                                  <td><?= $_data->password ?></td>
                                  <td>
                                     <a class="btn btn-icon btn-warning btn-sm" href="<?= base_url('admin/akun/edit/' . $_data->id); ?>"><i class="fa fa-edit"></i> Edit</a>
                                     <a href="<?= base_url('admin/akun/delete/' . $_data->id); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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
    </section>