<?php
echo validation_errors('<div class="alert alert-warning">,</div>');

echo form_open(base_url('admin/daerah/edit/'.$daerah->id_daerah));

?>

<div class="col-md-4">
  <div class="form-group form-group-lg">
    <label>Nama Daerah</label>
    <input type="text" name="nama_daerah" class"form-control" placeholder="Nama Daerah" value="
        <?php
          echo $daerah->nama_daerah ?>" required>
  </div>
</div>

<div class="col-md-3">
  <div class="form-group form-group-lg">
    <label>Alamat</label>
    <input type="text" name="alamat" class"form-control" placeholder="Masukkan Alamat" value="
        <?php
          echo $daerah->alamat ?>" required>
  </div>
</div>
<div class="form-group">
  <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Save">
  <input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
</div>

<?php echo form_close(); ?>
