<!DOCTYPE html>
<html>
<head>
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
<img src="<?=base_url()?>assets/img/caropagebaru/logolambar.png" class="img-thumbnail" alt="Bandar Lampung" height="200px" width="200px" style='background-color: #f2f3f4; border: none;'>
<h2 style="color: black; background-color: #f2f3f4;border-color: black; margin-top: -200px; margin-right: 0px; margin-left: 220px; font-style: bold;">Kabupaten Lampung Barat</h2>
<hr>
<h5 style="margin-right: 100px; margin-left: 220px; font-style: italic;">"Kabupaten Lampung Barat adalah salah satu kabupaten di provinsi Lampung, Indonesia. Ibu kota kabupaten ini terletak di Liwa. Kabupaten ini dibentuk berdasarkan Undang-Undang Nomor 6 Tahun 1991 tanggal 16 Agustus 1991 yang merupakan hasil pemekaran dari Kabupaten Lampung Utara. Daerah pegunungan yang merupakan punggung Bukit Barisan, ditempati oleh vulkanik quarter dari beberapa formasi. Daerah ini berada pada ketinggian 50 - > 1000 mdpl." </h5>
<h2 style="margin-top: 50px;">Destinasi Wisata</h2>
<p style="font-style: italic;">"Kuy Lampung! Jelajahi Kekayaan Yang Di Miliki Indonesia, Cintai Alam & Negerimu!"</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="<?=base_url()?>assets/img/lambar/gunungseminungx.jpg" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Gunung Seminung</h3>
      <p>Gunung Seminung berada di barat laut Kota Liwa, ibukota Lampung Barat dengan jarak sekitar 25 kilometer. Gunung ini terletak di perbatasan antar propinsi, beberapa wilayahnya menjadi kecamatan Sukau, kabupaten Lampung Barat; sementara yang lain berada di Ranau, di provinsi Sumatera Selatan.
      </p>

      <a href="<?php echo site_url('lambar/lambar1'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lambar/danauranau4.jpg" alt="Lights" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Danau Ranau</h3>
      <p>Danau Ranau 
Obyek Wisata Danau Ranau di Lampung Barat  Lampung merupakan tempat wisata yang harus anda kunjungi karena pesona keindahannya tidak ada duanya. Penduduk lokal daerah lampung juga sangat ramah tamah terhadap wisatawan lokal maupun wisatawan asing.  </p>
      <a href="<?php echo site_url('lambar/lambar2'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lambar/lumbokx1.jpg" alt="Nature" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Desa wisata lumbok</h3>
      <p>
      Lumbok adalah nama desa yang terletak di kecamatan Sukau, kabupaten Lampung Barat. Desa ini sangat permai dengan pemandangan danau Ranau di tepiannya sehingga traveler yang berkunjung ke sana akan merasa kerasan dan damai. Lumbok telah ditetapkan sebagai desa wisata yang menawarkan ketenangan.
      </p>
      <a href="<?php echo site_url('lambar/lambar3'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lambar/tjsetia1.jpg" alt="Mountains" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Pantai Tanjung Setia</h3>
      <p>Terpencil di sepanjang pantai barat Lampung, di luar hutan tebal Taman Nasional Bukit Barisan Selatan terletak surga tersembunyi yang mempesona disebut Pantai Tanjung Setia. Meskipun tertutup dari lampu sorot, gelombang di Tanjung Setia yang disebut-sebut sebagai salah satu yang terbaik di dunia oleh peselancar dari seluruh dunia.
</p>
      <a href="<?php echo site_url('lambar/lambar4'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="<?=base_url()?>assets/img/lambar/jakung1.png" alt="Bear" style="width:100%;">
  <h3 style="margin-top: 10px;">Pantai Labuhan Jakung</h3>
  <p>
  	Salah satu pantai di Krui Pesisir Barat yang memiliki panorama menakjubkan adalah Pantai Labuhan Jukung. Sunset di pantai ini merupakan salah satu yang terbaik diantara patai-pantai di Pesisir Barat Lampung lainnya. Sampai di Pantai Labuhan Jukung Krui anda akan disambut dengan gemuruh ombak dan lautan lepas yang menghampar.
  </p>
    <a href="<?php echo site_url('lambar/lambar5'); ?>">
                Baca Selengkapnya >>>>>
                </a>
</div>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="<?=base_url()?>assets/img/lambar/suoh5.jpg" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Danau Suoh</h3>
      <p>Danau Lebar Suoh yang memiliki luas 65 hektare. Setibanya di Danau Suoh anda akan disambut dengan hamparan savana ilalang yang menakjubkan. Ada puluhan hektar savana ilalang berwarna hijau yang siap memanjakan mata anda. Menurut catatan sejarah, Danau Suoh ini terbentuk atas letusan gunung berapi pada saat purbakala.</p>

      <a href="<?php echo site_url('lambar/lambar6'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lambar/pesagi1.jpg" alt="Lights" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Gunung Pesagi</h3>
      <p>
        Gunung Pesagi merupakan sebuah gunung yang berada di Liwa, Kabupaten Lampung Barat dengan ketinggian mencapai 2389 mdpl. Keindahan alam di Lampung Barat sudah tidak diragukan lagi, dan Gunung Pesagi merupakan salah satu destinasi wisata yang wajib dikunjungi, karena dari puncak Gunung Pesagi kalian dapat menikmati keindahan wilayah Lampung Barat
      </p>
      <a href="<?php echo site_url('lambar/lambar7'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lambar/baris1.jpg" alt="Nature" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Bukit Barisan Selatan</h3>
      <p>
      Taman Nasional Bukit Barisan Selatan terletak di ujung wilayah selatan – barat Sumatera, dengan total luas 3.588 km², meliputi tiga propinsi yaitu Lampung, Bengkulu dan Sumatera Selatan. Secara historis, Taman Nasional Bukit Barisan Selatan dinyatakan sebagai Wildlife Sanctuary pada tahun 1935, dan menjadi Taman Nasional pada tahun 1982.
      </p>
      <a href="<?php echo site_url('lambar/lambar8'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/lambar/besai1.jpg" alt="Mountains" style="width:100%; height: 23%;">
      <h3 style="margin-top: 10px;">Sungai  Way Besai</h3>
      <p> Kabupaten Lampung Barat sebagian besar dilintasi oleh sungai besar yang disebut Sungai Way Besai. Potensi besar yang dimiliki oleh sungai digunakan untuk kebutuhan pariwisata, yaitu arung jeram. Sepanjang jalur rafting ada sekitar 13 jeram yang harus dilewati.
</p>
      <a href="<?php echo site_url('lambar/lambar9'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="<?=base_url()?>assets/img/lambar/angin1.jpg" alt="Bear" style="width:100%;">
  <h3 style="margin-top: 10px;">Bukit  Mandiangin</h3>
  <p>
    Bukit Mandiangin berada di Lumbok Ranau, Lampung Barat, bukit ini berdiri kokoh dengan ketinggian 400 meter di atas permukaan laut dan bakal menjadi titik lepas landas untuk olahraga yang sangat populer, paralayang.
Dari atas Bukit Mandiangin, para traveler tak hanya digoda dengan indahnya panorama alam Lampung Barat
  </p>
    <a href="<?php echo site_url('lambar/lambar10'); ?>">
                Baca Selengkapnya >>>>>
                </a>
</div>

<!-- END MAIN -->
</div>

</body>
</html>
