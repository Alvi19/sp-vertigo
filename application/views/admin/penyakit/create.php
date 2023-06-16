<div class="section-body">
   <div class="card card-primary">
      <div class="card-header">
         <h4>Tambah Penyakit</h4>
      </div>
      <form action="" method="post">

         <div class="card-body">
            <div class="form-group">
               <label for="gambar">Pilih Kategori</label>
               <select class="form-control" name="" id="">
                  <option value="<?= $kategori ?>" required></option>
               </select>
            </div>
            <div class="form-group">
               <label for="nama">Solusi</label>
               <input type="text" class="form-control r" id=" nama" name="nama" value="<?= $solusi ?>" required placeholder="Masukkan Solusi Penyakit" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="nama">Nama penyakit</label>
               <input type="text" class="form-control r" id=" nama" name="nama" value="<?= $nama_penyakit ?>" required placeholder="Masukkan Nama Penyakit" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="deskripsi">Deskripsi penyakit</label>
               <textarea name="deskripsi" id="deskripsi" class="form-control" value="<?= $deskripsi ?>" required></textarea>
            </div>
         </div>
         <div class="card-footer text-right">
            <a href="<?= base_url('admin/penyakit'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
         </div>
      </form>
   </div>
</div>