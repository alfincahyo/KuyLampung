<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Desa wisata lumbok</title>
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
<h3>Desa wisata lumbok</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lambar/lumbokx1.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Desa wisata lumbok <br><br>

Lumbok adalah nama desa yang terletak di kecamatan Sukau, kabupaten Lampung Barat. Desa ini sangat permai dengan pemandangan danau Ranau di tepiannya sehingga traveler yang berkunjung ke sana akan merasa kerasan dan damai. Lumbok telah ditetapkan sebagai desa wisata yang menawarkan ketenangan. <br> <br>

Desa Wisata Lumbok berada 30 km dari Liwa, ibukota kabupaten Lampung Barat. Pilihan kegiatan unutk pengunjung yang berlibur di desa wisata ini antara lain menangkap ikan dengan cara anti mainstream yaitu menombak dan memanah, berenang di Danau Ranau, memancing belut dan aktivitas malam yang seru bersama penduduk lokal.  <br> <br>

Untuk penginapan para wisatawan akan diajak berbaur dengan warga lokal dan menginap di rumah mereka. Selain itu di desa ini juga menyediakan berbagai penginapan mewah dan nyaman. <br> <br>

Fasilitas : <br> Berenang di danau, memancing, jogging, penginapan berupa rumah khas lampung, wisata rumah kuno, olahraga selancar, wisata penangkaran penyu.

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
					<img src="<?=base_url()?>assets/img/lamsel/halfstar.png" alt="bintang" height="25px" width="25px"  margin-bottom = "20px";>	
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
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/lambar/lumbokx2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lambar/lumbokx3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/lambar/lumbokx4.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lambar/lumbokx6.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
                </div>
            </div>
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
                            <li><a href="<?php echo site_url('lambar/lambar2'); ?>">Danau Ranau<br></a></li><br>
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