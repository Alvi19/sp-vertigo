<section class="section">
   <div class="section-body">
      <div class="card card-primary">
         <div class="card-header">
            <h4>Edit Akun</h4>
         </div>
         <form action="" method="post">
            <div class="card-body">
               <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="nama" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?= $nama ?>" required>
               </div>
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="username" class="form-control" id="username" name="username" placeholder="Masukkan username" value="<?= $username ?>" required>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                     </div>
                  </div>
               </div>
               <div class="card-footer text-right">
                  <a href="<?= base_url('admin/akun'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
               </div>
         </form>
      </div>
   </div>
</section>