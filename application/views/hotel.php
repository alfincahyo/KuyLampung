<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .button {
    border-radius: 4px;
    background-color: #4286f4;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }

  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .button:hover span {
    padding-right: 25px;
  }

  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  </style>
</head>

<body>
 	<div class="container">

    <h1 style="color: black; border-color: black; margin-left: -20px; margin-top: 20px;">Hotel</h1>

	<hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7" style="margin-top: 10px;">
            <h2 class="featurette-heading">Hotel Novotel Bandar Lampung</h2>
            <p class="lead">Novotel Lampung terletak di pusat kota Bandar Lampung, menghadap pantai di ujung selatan Pulau Sumatera. Hotel ini menawarkan 220 kamar modern, plus 2.400 m² ruang pertemuan dan acara, restoran, lounge bar, Lounge Premium, dan fasilitas kebugaran top seperti kolam renang luar ruang, kamar uap, jacuzzi, spa, dan gimnasium, serta Kapel Pernikahan. Terletak 10 menit dari kawasan bisnis dan dekat dengan daya tarik wisata, Novotel Lampung ideal untuk bisnis dan liburan.

            Novotel Lampung adalah hotel bintang 4 yang memberi Anda akses mudah untuk mencapai dan menjelajahi tempat menarik terdekat di Bandar Lampung, seperti Museum Lampung, pusat perbelanjaan, banyak pantai indah (Sari Ringgung, Mutun, Ketapang). Terdapat pula Taman Bumi Kedaton, Taman Kupu-Kupu. Anda juga dapat mengunjungi lebih banyak destinasi wisata di Provinsi Lampung. Misalnya: Teluk Kiluan, Pantai Tanjung Setia, Taman Nasional Bukit Barisan, Pusat Konservasi Gajah Way Kambas.
			</p>
      <button class="button" ><span>Website</span></button>
          </div>

          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 250px;" src="<?=base_url()?>assets/img/hotel/Novotel.jpg" data-holder-rendered="true">
          </div>
        </div>


        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2" style="margin-top: 10px;">
            <h2 class="featurette-heading">Hotel Grand Anugerah Bandar Lampung</h2>
            <p class="lead">Berjarak 200 meter dari Plaza Lotus, Hotel Grand Anugerah Lampung menawarkan pusat kebugaran dan spa. Hotel juga menyediakan meja depan 24 jam dan Wi-Fi gratis di seluruh gedungnya. Parkir tersedia secara gratis.

            Hotel Grand Anugerah Lampung dapat dicapai dalam 15 menit berkendara dari Lembah Hijau dan 30 menit berkendara dari Pantai Mutung. Bandara Radin Inten II hanya 45 menit berkendara dari hotel.

            Masing-masing kamar ber-AC-nya dilengkapi dengan TV kabel layar datar, minibar, dan fasilitas membuat teh/kopi. Kamar-kamar tertentu memiliki balkon yang menawarkan pemandangan kota.

            Anda dapat bersantai dengan layanan pijat di spa atau menyewa mobil untuk menjelajahi kota. Hotel ini menawarkan layanan binatu dan menyetrika serta memiliki meja pramutamu.

            Aneka hidangan Indonesia dan internasional disajikan di kedai kopi, yang juga menawarkan layanan kamar. </p>
            <button class="button" ><span>Website</span></button>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 330px;" src="<?=base_url()?>assets/img/hotel/Grand.jpg" data-holder-rendered="true">
            </div>
        </div>


        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7" style="margin-top: 10px;">
            <h2 class="featurette-heading">Hotel Grand Elty Krakatoa Lampung Selatan</h2>
            <p class="lead"> Dikelilingi pantai berpasir putih yang menghadap Selat Sunda, Grand Elty Krakatoa menyediakan kamar-kamar dengan Wi-Fi gratis dan TV kabel layar datar. Resor ini juga memiliki kolam renang outdoor.

            Grand Elty Krakatoa berjarak kira-kira 2 jam berkendara dari Bandara Raden Intan.

            Kamar-kamar Grand Elty Krakatoa ber-AC dan dilengkapi fasilitas membuat teh/kopi dan minibar. Kamar mandi pribadinya menawarkan shower dan perlengkapan mandi gratis.

            Peralatan olahraga laut seperti banana boat dan jet ski tersedia untuk disewakan. Anda juga dapat berkaraoke di lounge. Layanan penyewaan sepeda tersedia bagi Anda yang ingin menjelajahi daerah sekitar.

            Rakata Coffee Shop menyajikan berbagai hidangan Barat, Asia, dan Indonesia. Tersedia layanan kamar. 

            Akomodasi ini juga berada di salah satu kawasan paling favorit di Kaliandak! Tamu lebih senang di sini dibandingkan dengan di akomodasi lain di area yang sama.

            Akomodasi ini juga dinilai memiliki harga terbaik di Kaliandak! Tamu mendapatkan fasilitas lebih banyak untuk uang yang mereka keluarkan dibandingkan akomodasi lain di kota ini.</p>
          	<button class="button" ><span>Website</span></button>
		</div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 330px;" src="<?=base_url()?>assets/img/hotel/Krakatoa.jpg" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2 " style="margin-top: 10px;">
            <h2 class="featurette-heading">Krui Mutun Walur Surf Camp</h2>
            <p class="lead">Terletak tepat di tepi Pantai Walur di Krui, Sumatera Selatan, Krui Mutun Walur Surf Camp Sumatra menawarkan akomodasi sederhana yang nyaman dengan meja depan 24-jam serta fasilitas parkir pribadi gratis di lokasi untuk tamu yang berkendara.

            Akomodasi ini berjarak 7 menit berkendara dari lokasi berselancar di Krui Left dan Krui Right, serta 10 menit berkendara dari Bandara Pekon Serai. Pantai Mandiri dapat dijangkau dalam 25 menit berkendara, sementara perjalanan ke Bandara Radin Inten II memakan waktu sekitar 6 jam berkendara.

            Krui Mutun Walur Surf Camp Sumatra memiliki area tempat duduk. Kamar mandi pribadinya menyediakan shower dan perlengkapan mandi gratis. Anda dapat menikmati pemandangan laut dan taman dari kamar. Fasilitas lain meliputi seprai dan kipas angin.

            Krui Mutun Walur Surf Camp Sumatra menawarkan meja depan 24-jam, taman, dan teras. Tersedia juga fasilitas lain seperti layanan binatu dan menyetrika. Berbagai kegiatan dapat dilakukan di akomodasi atau di sekitarnya, termasuk berselancar dan menyelam.

            Untuk pilihan tempat bersantap, restoran di akomodasi ini menyajikan masakan Indonesia dan makanan ringan. Anda juga dapat memesan makanan melalui layanan kamar. </p>
          	<button class="button" ><span>Website</span></button>
		</div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 330px;" src="<?=base_url()?>assets/img/hotel/kruimutun.jpg" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7" style="margin-top: 10px;">
            <h2 class="featurette-heading">Hotel Aston Lampung City </h2>
            <p class="lead"> Aston Lampung City Hotel di Bandar Lampung, 11 km dari Boemi Kedaton Mall, menyediakan akomodasi bintang 3 dengan taman, taman, lounge bersama, kolam renang terbuka, resepsionis 24 jam, serta minuman di bar atau makanan di restoran.

            Kamar-kamar di hotel dilengkapi dengan teko serta TV layar datar dengan saluran kabel.

            Sarapan prasmanan disajikan setiap hari.

            Terdapat juga kolam renang terbuka.

            Untuk kenyamanan Anda, Aston Lampung City Hotel memiliki pusat bisnis. Resepsionisnya yang fasih berbahasa Inggris dan Indonesia selalu siap membantu Anda.  </p>
          	<button class="button" ><span>Website</span></button>
		</div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 400px;" src="<?=base_url()?>assets/img/hotel/Aston.jpg" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2" style="margin-top: 10px;">
            <h2 class="featurette-heading">Alau Alau Boutique Hotel</h2>
            <p class="lead">Memiliki pantai pribadi, Alau Alau Boutique Resort Hotel terletak di Pantai Laguna di Kalianda dan menawarkan pemandangan Selat Sunda. Kolam renang outdoor dan parkir gratis juga tersedia. Anda dapat memesan makanan melalui layanan kamar.

            Alau Alau Boutique Hotel berjarak 1 jam berkendara dari Pelabuhan Bakauhani dan 1,5 jam berkendara dari Bandara Radin Inten II dan Pusat Kota Bandar Lampung. Dalam 45 menit berkendara dari hotel, Anda akan tiba di Dermaga Canti di Pantai Kalianda, di mana Anda dapat naik perahu selama 3 jam untuk mengunjungi Gunung Anak Krakatau.

            Hotel menawarkan bungalow 1-3 kamar tidur yang luas dengan teras pribadi. Air mineral dan mesin membuat kopi disediakan. Kamar mandi en suite-nya dilengkapi dengan shower air panas outdoor dan perlengkapan mandi gratis.

            Wisata sehari dan penyewaan mobil dapat dipesan di meja layanan wisata. Hotel ini juga menyediakan meja pramutamu. </p>
		  <button class="button" ><span>Website</span></button>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 330px;" src="<?=base_url()?>assets/img/hotel/alau.jpg" data-holder-rendered="true">
          </div>
        </div>

       

        </div>
</body>
</html>
