<!DOCTYPE html>
<html>
<head>
  <title>
<?php foreach ($daerah as $daerah) {?>
    <?php echo $daerah->nama_daerah ?>
  <?php } ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@import url('https://fonts.googleapis.com/css?family=Expletus+Sans');


* {
    box-sizing: border-box;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
    font-family: 'Expletus Sans', cursive;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    text-align: center;
    margin-right: -15px;
    margin-left: -15px;
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">
<img src="<?=base_url()?>assets/img/caropagebaru/logobdl.png" class="img-thumbnail" alt="Bandar Lampung" height="200px" width="200px" style='background-color: #f2f3f4; border: none;'>
<h2 style="color: black; background-color: #f2f3f4;border-color: black; margin-top: -200px; margin-right: 0px; margin-left: 220px; font-style: bold;">Kota Bandar Lampung</h2>
<hr>
<h5 style="margin-right: 100px; margin-left: 220px; font-style: italic;">"Kota Bandar Lampung berpotensi untuk menjadi Kota Metropolis. Seiring dengan program pada tahun 2015, dimana Kota Bandar Lampung dan Kota Metro merupakan kawasan yang dipetakan Kementerian Pekerjaan Umum dan Perumahan Rakyat (Kemenpupera) berpotensi sebagai Area Metropolitan, terkhusus yang dalam cetak biru Wilayah Pengembangan Strategis Merak-Bakauheni-Bandar Lampung-Palembang Tanjung Api Api. Keunggulan Kota Metropolis ini adalah sebagai menjadi pusat kegiatan pemerintahan, perdagangan dan jasa, industri, pariwisata serta pendidikan." </h5>
<h2 style="margin-top: 50px;">Destinasi Wisata</h2>
<p style="font-style: italic;">"Kuy Lampung! Jelajahi Kekayaan Yang Di Miliki Indonesia, Cintai Alam & Negerimu!"</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <?php foreach ($artikel as $artikel) { ?>
  <div class="col-lg-4">
      <img src="<?=base_url('assets/upload/gambar/'.$artikel->gambar)?>" class="img img-responsive" height="150px" width="310px">
      <h3 style="margin-top: 10px;"><?php echo $artikel->judul ?></h3>

      <?php echo character_limiter($artikel->isi,200); ?>

      <a href="<?php echo base_url('balam/read/'.$artikel->id_artikel) ?>">
                Baca Selengkapnya >>>>>
                </a>
  </div>
  <?php } ?>
<!-- END MAIN -->
</div>
</div>
</body>
</html>
