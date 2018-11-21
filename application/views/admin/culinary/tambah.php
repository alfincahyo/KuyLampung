<?php
  echo validation_errors();
  echo form_open(base_url('admin/culinary/tambah'));
?>
<body>
 <div class="container">

  <div class="col-md-7">
  <div class="form-group">
    <label for="nama">Judul Artikel :</label>
    <input type="text" name="judul_posting" class="form-control">
  </div>
</div>

<div class="col-md-7">
<div class="form-group">
  <label for="nama">Rating :</label>
  <input type="number" name="rating" min="1" max="10">
</div>
</div>

<div class="col-md-7">
<div class="form-group">
  <label for="nama">Resep :</label>
  <input type="url" name="resep">
</div>
</div>

<div class="col-md-7">
<div class="form-group">
  <label for="nama">Gambar :</label>
  Select a file: <input type="file" name="gambar">
</div>
</div>

<div class="col-md-7">
  <div class="form-group">
    <label for="alamat">Isi Artikel:</label><br>
    <textarea name="isi_posting" cols="120" rows="10" placeholder="Isi Artikel"></textarea>
  </div>
</div>

<div class="col-md-7">
  <div class="form-group">
  <button type="submit" class="btn btn-default">Submit</button>
</div>
</div>

    <?php
      echo form_close();
    ?>
<br>
<br>
 </div>

</body>
</html>
