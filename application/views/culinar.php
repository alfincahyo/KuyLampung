<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
  <title>Culinary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</head>

<body>
  <div class="container">

    <h1 style="color: black; border-color: black; margin-left: -20px; margin-top: 20px;">CULINARY</h1>

    <?php
    		foreach($culinary as $u){
    		?>

  <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7" style="margin-top: 10px;">
            <h2 class="featurette-heading"><?php echo $u->judul_posting?></h2>
            <p class="lead"><?php echo $u->isi_posting?>
      </p>
      <br>
      <br>
      <img src="<?=base_url()?>assets/img/culinary/star.png" alt="bintang" height="25px" width="25px";>
          <img src="<?=base_url()?>assets/img/culinary/star.png" alt="bintang" height="25px" width="25px";>
          <img src="<?=base_url()?>assets/img/culinary/star.png" alt="bintang" height="25px" width="25px";>
          <img src="<?=base_url()?>assets/img/culinary/star.png" alt="bintang" height="25px" width="25px";>
          <img src="<?=base_url()?>assets/img/culinary/halfstar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";>
          <br><img src="<?=base_url()?>assets/img/culinary/none.png"  height="50px" width="50px";>
          <?php echo $u->rating ?>
          </div>

          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 450px;"
            src="<?=base_url()?>assets/img/culinary/<?php echo $u->gambar?>" data-holder-rendered="true">
            <br>
            <br>
            <a href=<?php echo $u->resep?> target="_top" class="btn btn-success" >Resep Seruit</a>
          </div>
        </div>

        <?php } ?>

        </div>
</body>
</html>
