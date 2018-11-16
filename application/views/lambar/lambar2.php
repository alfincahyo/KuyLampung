<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Danau Ranau</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/balam.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body>

<div class ='container'>
    <div class="head">
    Kabupaten Lampung Barat
    </div>
<br>
<h3>Danau Ranau</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lambar/danauranau4.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Danau Ranau <br><br>

Obyek Wisata Danau Ranau di Lampung Barat  Lampung merupakan tempat wisata yang harus anda kunjungi karena pesona keindahannya tidak ada duanya. Penduduk lokal daerah lampung juga sangat ramah tamah terhadap wisatawan lokal maupun wisatawan asing. <br> <br>

Kota lampung juga terkenal akan keindahan obyek wisatanya , salah satu contohnya adalah Obyek Wisata Danau Ranau di Lampung Barat  Lampung ini. Obyek Wisata Danau Ranau di Lampung Barat  Lampung Secara geografis, danau ini terletak di perbatasan Kabupaten OKU Selatan Propinsi Sumatera Selatan dan Kabupaten Lampung Barat, Provinsi Lampung. <br> <br>

Luas Danau Ranau sekitar 8×16 km dengan latar belakang Gunung Seminung (ketinggian ± 1.880 m dpl), dikelilingi oleh bukit dan lembah. Pada malam hari udara sejuk dan pada siang hari angin berhembus semilir,Secara geografis, topografi danau ranau adalah perbukitan berlembah, sehingga menjadikan danau Ranau memiliki cuaca sejuk. <br> <br>

Terdapat beberapa jenis ikan hidup di danau, antara lain mujair, kepor, kepiat, dan harongan.Pemandangan seputar Danau Ranau sungguh menakjubkan. Apaladi di tengah danau terdapat pulau bernama Pulau Marisa. Di sana juga terdapat sumber air panas.Danau ini dapat ditempuh dari kota Lampung selama 6 jam. <br> <br>

Danau Ranau memiliki pemandangan yang indah, dengan berlatar Gunung Seminung.  Airnya yang tenang, dengan pulau Marisa di tengahnya, yang pasti danau tidak kalah cantiknya dengan danau Toba di Sumatera Utara. Obyek Wisata Danau Ranau di Lampung Barat  Lampung ini sangat ramai di kunjunggi menjelang liburan tiba banyak wisatawan yang menghabiskan waktu Obyek Wisata Danau Ranau di Lampung Barat  Lampung untuk menikmati indahnya alam bersama keluarag ataupun teman. <br> <br>

Fasilitas : <br> Transportasi kedanau ranau, perahu untuk melihat pemandangan danau, berbagai macam penginapan.

            <br><br>
            </div>
            <!--buat dibawah-->
            <div class="row">
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/money.png" alt="uang" height="50x" width="50px";>	
					<br><br>
					FREE
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/emptystar.png" alt="bintang" height="25px" width="25px"  margin-bottom = "20px";>	
					<br><img src="<?=base_url()?>assets/img/lamsel/none.png"  height="50px" width="50px";>	
					<br>
					8.5 / 10
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/mytime.png" alt="waktu" height="50x" width="50px";>		
					<br><br>
					24 Jam
				</div>
            </div>
            <br><br>
            
            <?php
                include "formkomentar.php";
            ?>
        </div>
        


        <div class="col-3 ">
        <div id="sidebar" >
            <br><br>
            <div id="clock" class="clock2"></div>
            <script type="text/javascript">

                function showTime(){
                    var date = new Date();
                    var h = date.getHours();
                    var m = date.getMinutes();
                    var s = date.getSeconds();
                    var session = "A.M";
                    
                    if(h==0){
                        h=12;
                    }
                    if(h>12){
                        h= h-12;
                        session= "P.M";
                    }

                    h = (h<10) ? "0" + h : h;
                    m = (m<10) ? "0" + m : m;
                    s = (s<10) ? "0" + s : s;
                
                    var time = h + ":" + m + ":" + s + " " + session;
                    document.getElementById("clock").innerText = time;
                    document.getElementById("clock").textContent = time;

                    setTimeout(showTime, 1000);
                
                
                }
                    showTime();
                </script>
            <br><br>
                <div class="widget">
                    <h3 class="judulwidget">Artikel Menarik lainnya<br></h3>
                        <ul>
                            <li><a href="<?php echo site_url('lambar/lambar1'); ?>">Gunung Seminung<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar3'); ?>">Desa wisata lumbok<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar4'); ?>">Pantai Tanjung Setia<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar5'); ?>">Pantai labuhan jakung<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar6'); ?>">Danau Suoh<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar7'); ?>">Gunung Pesagi<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar8'); ?>">Bukit Barisan Selatan<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar9'); ?>">Sungai Way Besai<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar10'); ?>">Bukit Mandiangin<br></a></li><br>
                        </ul>
                </div>
                
        </div>
		<br>
        </div>
    </div>
    
</div>
</body>
</html>