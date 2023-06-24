<h1 class="text-center text-bold">MANAJEMEN DATA DIRI</h1>
<br>
<div>
   <form action="" method="post">
      <div class="row">
         <div class="col">
            <div class="form-group">
               <label for="nama">Nama</label>
               <input required name="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Enter nama" value="<?= $user->nama ?>">
            </div>
            <div class="form-group">
               <label for="username">Username</label>
               <input required name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" value="<?= $user->username ?>">
            </div>
            <div class="form-group">
               <label for="exampleInputPassword">Password</label>
               <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Konfirmasi Password</label>
               <input name="konfirmasi password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password">
            </div>
         </div>
         <div class="col">
            <div class="form-group">
               <label for="email">Email</label>
               <input required name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $user->email ?>">
            </div>
            <div class="form-group">
               <label for="no_hp">Handphone</label>
               <input required name="no_hp" class="form-control" id="no_hp" aria-describedby="emailHelp" placeholder="Enter handphone" value="<?= $user->no_hp ?>">
            </div>
            <div class="form-group">
               <label for="alamat">Alamat</label>
               <input required name="alamat" class="form-control" id="alamat" placeholder="alamat" value="<?= $user->alamat ?>">
            </div>
            <div class="form-group">
               <label for="JK">Jenis Kelamin</label>
               <select required name="jk" id="jk" class="form-control">
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
               </select>
            </div>
         </div>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
   </form>
</div>