<div class="section-body">
   <div class="card card-primary">
      <div class="card-header d-flex justify-content-between">
         <h4>Daftar Diagnosa</h4>
         <a href="<?= base_url('admin/diagnosa/laporan') ?>" class="btn btn-info btn-sm"><i class="fas fa-file" style="color:white"></i> Print</a>
      </div>
      <div class="card-body">
         <div class="row">
            <div class="table-responsive">
               <table class="table table-striped table-bordered display" id="dataTable">
                  <thead>
                     <tr>
                        <th width='7%'>No</th>
                        <th width='13%'>Tanggal</th>
                        <th width='13%'>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Presentase</th>
                        <th>Penyakit</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $index => $_data) {
                     ?>
                        <tr>
                           <td><?= $index + 1 ?></td>
                           <td><?= $_data->tanggal ?></td>
                           <td><?= $_data->nama ?></td>
                           <td><?= $_data->alamat ?></td>
                           <td><?= $_data->JK ?></td>
                           <td><?= $_data->presentase ?></td>
                           <td><?= $_data->nama_penyakit ?></td>
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