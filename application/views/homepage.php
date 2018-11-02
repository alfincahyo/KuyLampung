<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <div class="menubar">
              <img class="rounded-circle" src="<?=base_url()?>assets/img/home/beach.png" width="140" height="140">
              <h2>Location</h2>
              <p>Berbatasan langsung dengan Bengkulu dan Sumatera Selatan, provinsi paling selatan Sumatera yaitu provinsi Lampung menyimpan segudang kekayaan alam yang luar biasa dan istimewa kerennya.</p>
              <p><a class="btn btn-secondary" href="<?php echo site_url('home/location'); ?>" role="button">View details »</a></p>
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="menubar">
              <img class="rounded-circle" src="<?=base_url()?>assets/img/home/food.png" alt="Generic placeholder image" width="140" height="140">
              <h2>Culinary</h2>
              <p>Pada kesempatan kali ini kami akan membagi informasi tentang makanan khas dari daerah Lampung .Berikut ini adalah makanan yang akan anda temukan saat berkunjung di Kota Tapis Berseri yaitu lampung
              <p><a class="btn btn-secondary" href="<?php echo site_url('home/culinar'); ?>" role="button">View details »</a></p>
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="menubar">
              <img class="rounded-circle" src="<?=base_url()?>assets/img/home/shop.png" alt="Generic placeholder image" width="140" height="140">
              <h2>Souvenirs</h2>
              <p>Mengunjungi suatu tempat wisata termasuk Lampung tentu tak lengkap tanpa membawa pulang oleh-oleh untuk keluarga di rumah. Bingung harus beli oleh-oleh yang mana? Simak saja rekomendasi oleh-oleh khas Lampung populer yang dirangkum Kuy Lampung !</p>
              <p><a class="btn btn-secondary" href="<?php echo site_url('home/souvenirs'); ?>" role="button">View details »</a></p>
            </div>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->




</body>
</html>