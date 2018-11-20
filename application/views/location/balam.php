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
<img src="<?=base_url()?>assets/img/caropagebaru/logobdl.png" class="img-thumbnail" alt="Bandar Lampung" height="200px" width="200px" style='background-color: #f2f3f4; border: none;'>
<h2 style="color: black; background-color: #f2f3f4;border-color: black; margin-top: -200px; margin-right: 0px; margin-left: 220px; font-style: bold;">Kota Bandar Lampung</h2>
<hr>
<h5 style="margin-right: 100px; margin-left: 220px; font-style: italic;">"Kota Bandar Lampung berpotensi untuk menjadi Kota Metropolis. Seiring dengan program pada tahun 2015, dimana Kota Bandar Lampung dan Kota Metro merupakan kawasan yang dipetakan Kementerian Pekerjaan Umum dan Perumahan Rakyat (Kemenpupera) berpotensi sebagai Area Metropolitan, terkhusus yang dalam cetak biru Wilayah Pengembangan Strategis Merak-Bakauheni-Bandar Lampung-Palembang Tanjung Api Api. Keunggulan Kota Metropolis ini adalah sebagai menjadi pusat kegiatan pemerintahan, perdagangan dan jasa, industri, pariwisata serta pendidikan." </h5>
<h2 style="margin-top: 50px;">Destinasi Wisata</h2>
<p style="font-style: italic;">"Kuy Lampung! Jelajahi Kekayaan Yang Di Miliki Indonesia, Cintai Alam & Negerimu!"</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="<?=base_url()?>assets/img/balam/mutun4.jpg" style="width:100%;">
      <h3 style="margin-top: 10px;">Pantai Mutun</h3>
      <p>Pantai Mutun dan Pulau Tangkil merupakan salah satu Tempat Wisata Menawan yang terletak di Provinsi Lampung.  
            Lokasinya tak jauh dari Kota Bandar Lampung,hanya sekitar 10 Km dari pusat kota menuju ke arah kecamatan 
            Padang Cermin Kabupaten Pesawaran.Pantai Mutun ini termasuk destinasi wisata favorit warga Bandarlampung dan sekitarnya.</p>

      <a href="<?php echo site_url('balam/balam1'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/balam/puncakmas1.jpg" alt="Lights" style="width:100%;">
      <h3 style="margin-top: 10px;">Puncak Mas</h3>
      <p>Begitu masuk komplek wisata Puncak Mas, yang paling mencolok adalah adanya balon-balon raksasa dan rumah-rumah pohon. 
            Balonnya dibuat seolah-olah hot air balloon gitu, tapi ga bisa terbang. Buat naik ke keranjang balon ada tangga, jadi 
            balonnya semacam diparkir di menara kecil. Boleh foto di dalam keranjang balon itu, gratis.
      </p>
      <a href="<?php echo site_url('balam/balam2'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/balam/kupu3.png" alt="Nature" style="width:100%;">
      <h3 style="margin-top: 10px;">Taman Kupu-Kupu</h3>
      <p>
      Tempat wisata dan sarana edukasi Taman Kupu-Kupu Gita Persada berada kecamatan Kemiling di kaki gunung Betung tepatnya di desa 
            Suka manis , suasana yang sangat sejuk dan asri tentu sangat menarik minak wisatawan untuk berkunjung. Perjalanan tempuh dari 
            kota Bandar Lampung sekitar 30 menit.
      </p>
      <a href="<?php echo site_url('balam/balam3'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/balam/museum2.jpg" alt="Mountains" style="width:100%;">
      <h3 style="margin-top: 10px;">Museum Lampung</h3>
      <p> Museum Lampung mulai dibangun tahun 1975, peletakan batu pertama tahun 1978. Diresmikan oleh Menteri Pendidikan dan Kebudayaan 
            kala itu, Prof. Dr. Fuad Hasan, pada 24 September 1988. Bertepatan dengan peringatan Hari Aksara Internasional yang dipusatkan 
            di PKOR Way Halim.
</p>
      <a href="<?php echo site_url('balam/balam4'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="<?=base_url()?>assets/img/balam/horti1.jpg" alt="Bear" style="width:100%;">
  <h3 style="margin-top: 10px;">Horti Park</h3>
  <p>Lingkungan yang hijau dan asri juga dapat tercipta melalui kegiatan tanam yang bukan hanya dilakukan oleh lingkungan pertanian tetapi juga pemanfaatan lahan semaksimal mungkin. Adalah hortikultura yang merupakan salah satu metode budidaya pertanian modern yang saat ini sedang marak diterapkan. Bidang kerja dari hortikultura meliputi pembenihan, pembibitan, kultur jaringan, produksi tanaman, hama dan penyakit, panen, pengemasan dan distribusi.</p>
    <a href="<?php echo site_url('balam/balam5'); ?>">
                Baca Selengkapnya >>>>>
                </a>
</div>

<div class="row">
  <div class="column">
    <div class="content">
      <img src="<?=base_url()?>assets/img/balam/bukit2.jpeg" style="width:100%;">
      <h3 style="margin-top: 10px;">Bukit Sakura</h3>
      <p>Bukit Sakura Kemiling sangat pas sebagai tempat berlibur bagi kaum muda mudi, sebab di sana tersedia banyak spot foto kekinian yang menjadi spot favorit bagi para pengunjung untuk berselfie. Buat liburan keluarga juga bagus, di sana bisa bersantai dan jalan-jalan menikmati indahnya panorama alam yang luar biasa.</p>

      <a href="<?php echo site_url('balam/balam6'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/balam/lembah1.jpg" alt="Lights" style="width:100%;">
      <h3 style="margin-top: 10px;">Lembah Hijau</h3>
      <p>
        Taman Wisata Lembah
Hijau adalah taman wisata keluarga berorentasi lingkungan, memadukan antara 
            rekreasi, nuansa kesegaran alam nan hijau dan pengetahuan, taman wisata yang 
            berlokasi di  Bandar Lampung yang menjadi ibukota Provinsi Lampung ini 
            berdiri diatas kawasan lembah dengan luas 30 Ha di Jalan Raden Imba Kesuma Ratu
      </p>
      <a href="<?php echo site_url('balam/balam7'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/balam/wawai2.jpg" alt="Nature" style="width:100%;">
      <h3 style="margin-top: 10px;">Alam Wawai</h3>
      <p>
      Mencari taman yang indah dan asri khusus wisata Lampung dengan konsep unik sulit ditemukan.
Namun Taman Wisata Alam Wawai Eco Park menawarkan tempat yang berbeda dan bisa menjadi destinasi di akhir pekan.Menuju ke lokasi tidaklah sulit dari pusat kota Bandar Lampung dengan hanya berjarak sekitar 1 km. Jarak tempuh setengah jam<br>telah sampai ke lokasi.
      </p>
      <a href="<?php echo site_url('balam/balam8'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="<?=base_url()?>assets/img/balam/pinus5.jpg" alt="Mountains" style="width:100%;">
      <h3 style="margin-top: 10px;">Hutan Pinus</h3>
      <p> Zona 235 adalah tempat atau kawasan hutan yang terdapat villa dan digunakan sebagai tempat outbond, training centre, paintball, 
            dan camping. Letaknya masih disekitar kawasan wisata Sukadanaham Bandar Lampung. Untuk mencapai ke Zona 235 cukup ditempuh dengan
             15 menit perjalanan dari Tanjung Karang menggunakan kendaraan.
</p>
      <a href="<?php echo site_url('balam/balam9'); ?>">
                Baca Selengkapnya >>>>>
                </a>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="<?=base_url()?>assets/img/balam/rusa1.jpg" alt="Bear" style="width:100%;">
  <h3 style="margin-top: 10px;">Penangkaran Rusa</h3>
  <p>
    Penangkaran Rusa Taman Hutan Raya Wan Abdul Rachman atau Penangkaran Rusa Tahura WAR
merupakan sebuah tempat penangkaran rusa yang secara teknis dikelola oleh polisi hutan. Penangkaran Rusa Tahura War secara resmi 
            mendapat izin pada tanggal 7 Desember 2012 dengan luas lahan sekitar 2 hektar.
Rusa yang dikembangkan di penangkaran ini adalah Rusa Timur.
  </p>
    <a href="<?php echo site_url('balam/balam10'); ?>">
                Baca Selengkapnya >>>>>
                </a>
</div>

<!-- END MAIN -->
</div>

</body>
</html>
