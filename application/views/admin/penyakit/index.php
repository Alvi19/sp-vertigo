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
                              <th width='10%'>Id Penyakit</th>
                              <th>Nama Penyakit</th>
                              <th width='17%'>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Penyakit</td>
                              <td></td>
                              <td>
                                 <a class="btn btn-icon btn-warning btn-sm" href=""><i class="fa fa-edit"></i> Ubah</a>
                                 <form action="" id="" method="POST" class="d-inline">

                                    <input type="hidden" name="id" value="">
                                    <button type="button" class="btn btn-icon btn-danger btn-sm btn-hapus" value=""><i class="fa fa-trash"></i>
                                       Hapus</button>
                                 </form>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</Section>