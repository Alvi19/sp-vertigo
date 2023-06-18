<div class="section-body">
   <div class="card card-primary">
      <div class="card-header">
         <h4>Edit Penyakitkjkj</h4>
      </div>
      <form action="" method="post">

         <div class="card-body">
            <div class="form-group">
               <label for="kategori">Pilih Kategori</label>
               <select class="form-control" name="kategori" id="kategori" required>
                  <?php foreach ($data_kategori as $_kategori) { ?>
                     <option value="<?= $_kategori->id ?>" <?php if ($_kategori->id == $kategori) {
                                                               echo 'selected';
                                                            } ?>><?= $_kategori->nama_kategori ?></option>
                  <?php } ?>
               </select>
            </div>
            <div class="form-group">
               <label for="solusi">Solusi</label>
               <input type="text" class="form-control" id=" nama" name="solusi" value="<?= $solusi ?>" required placeholder="Masukkan Solusi Penyakit" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="nama_penyakit">Nama penyakit</label>
               <input type="text" class="form-control r" id=" nama" name="nama_penyakit" value="<?= $nama_penyakit ?>" required placeholder="Masukkan Nama Penyakit" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="deskripsi">Deskripsi penyakit</label>
               <textarea name="deskripsi" id="deskripsi" class="form-control" required><?= $deskripsi ?></textarea>
            </div>
            <?php foreach ($data_gejala as $_gejala) { ?>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gejala[]" value="<?= $_gejala->id ?>" id="gejala_<?= $_gejala->id ?>" <?php if (array_filter($data_gejala_check, function ($data) use ($_gejala) {
                                                                                                                                                   return $data->id_gejala == $_gejala->id;
                                                                                                                                                })) {
                                                                                                                                                   echo 'checked';
                                                                                                                                                } ?>>
                  <label class="form-check-label" for="gejala_<?= $_gejala->id ?>">
                     <?= $_gejala->nama_gejala ?>
                  </label>
               </div>
            <?php } ?>
         </div>
         <div class="card-footer text-right">
            <a href="<?= base_url('admin/penyakit'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
         </div>
      </form>
   </div>
</div>