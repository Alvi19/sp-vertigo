<section class="section">
   <div class="section-body">
      <div class="card card-primary">
         <div class="card-header">
            <h4>Tambah Akun</h4>
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
               <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= $email ?>" required>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="<?= $password ?>" required>
                     </div>
                  </div>
                  <!-- <div class="col-md-6">
                     <div class="form-group">
                        <label for="password">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="konfirmasi password" name="password" placeholder="Masukkan Konfirmasi Password" required>
                     </div>
                  </div> -->
               </div>
               <div class="card-footer text-right">
                  <a href="" class="btn btn-danger">
                     <i class="fas fa-arrow-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
               </div>
         </form>
      </div>
   </div>
</section>