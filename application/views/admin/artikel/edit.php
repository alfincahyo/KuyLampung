<script src="<?php echo base_url('assets/tinymce/js/tinymce/tinymce.min.js') ?>" type="text/javascript"></script>
<script>tinymce.init({ selector:'textarea'});</script>

<?php
  echo validation_errors('<div class="alert alert-warning">','</div>');

  echo form_open_multipart(base_url('admin/artikel/edit/'.$artikel->id_artikel));
?>

    <div class="col-md-8">
      <div class="form-group form-group-lg">
        <label>Pilih Daerah</label>
        <select class="form-control" name="id_daerah">
          <?php foreach ($daerah as $daerah) { ?>
            <option value="<?php echo $daerah->id_daerah ?>">
              <?php echo $daerah->nama_daerah ?>
            </option>
          <?php  } ?>
        </select>
      </div>
      <div class="form-group form-group-lg">
        <label>Judul Artikel</label>
        <input type="text" name="judul" class="form-control" value="<?php echo $artikel->judul ?>" placeholder="Masukkan Judul" required>
      </div>
    </div>

    <div class="col-md-8">
      <div class="form-group form-group-lg">
        <label>Gambar</label>
        <input type="file" name="gambar_artikel" class="form-control" placeholder="Alamat" required>
      </div>
    </div>

  <div class="col-md-8">
    <div class="form-group">
      <label>Isi Artikel</label>
      <textarea name="isi" class="form-control" placeholder="Isi Artikel" rows="8" cols="80" required><?php echo $artikel->isi ?></textarea>
    </div>
    <div class="form-group">
      <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Save">
      <input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
    </div>
  </div>

    <?php
    echo form_close();
    ?>
