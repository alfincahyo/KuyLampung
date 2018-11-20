<?php
  echo validation_errors('<div class="alert alert-warning">,</div>');

  echo form_open(base_url('admin/dasbor/edit/'.$admin->id_admin));
?>

    <div class="col-md-6">
      <div class="form-group form-group-lg">
        <label>Masukkan Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $admin->nama ?>" required></input>
      </div>
    </div>

  <div class="col-md-6">
    <div class="form-group form-group-lg">
      <label>Masukkan Username</label>
      <input type="text" name="username" class="form-control" placeholder="Masukkan Username" value="<?php echo $admin->username ?>" readonly></input>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group form-group-lg">
      <label>Masukkan Password (Minimal 6 Karakter , Maksimasl 32 Karakter)</label>
      <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required ></input>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group form-group-lg">
      <label>Masukkan Email</label>
      <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo $admin->email ?>" required></input>
    </div>
  </div>

 <div class="col-md-12">
  <div class="form-group form-group-lg">
    <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Save"></input>
    <input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset"></input>
  </div>
</div>

    <?php
    echo form_close();
    ?>
