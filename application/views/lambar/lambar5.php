<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Pantai Labuhan Jakung</title>
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
<h3>Pantai Labuhan Jakung</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lambar/jakung1.png" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Pantai labuhan  jakung <br><br>

Salah satu pantai di Krui Pesisir Barat yang memiliki panorama menakjubkan adalah Pantai Labuhan Jukung. Sunset di pantai ini merupakan salah satu yang terbaik diantara patai-pantai di Pesisir Barat Lampung lainnya. Sampai di Pantai Labuhan Jukung Krui anda akan disambut dengan gemuruh ombak dan lautan lepas yang menghampar. Pantai ini juga memiliki pasir yang putih dan halus.<br><br>
Untuk tarif masuk Pantai Labuhan Jukung Krui ini gratis. Hanya ada biaya parkir kendaraan yang diminta saat masuk ke lokasi ini. Untuk kendaraan roda dua tarifnya sebesar Rp. 5000 dan Kendaraan roda empat sebesar Rp. 10.000.<br><br>
Lalu apa yang bisa anda nikmati ketika berkunjung ke pantai yang menghadap langsung ke Samudra Hindia ini? Ada banyak yang bisa anda lakukan seperti bermain di laut, mandi dilaut, berselancar, menikmati sunset, atau sekedar menikmati pemandangan laut dengan ombaknya yang tinggi.<br><br>
Keistimewaan dari pantai ini adalah ombak dan susetnya. Ombak disini tergolong tinggi oleh sebab itu menjadi incaran wisatwan asing untuk berselancar. Jika anda penghobi olahraga ini anda bisa mencoba berselancar disini.<br><br>
Sedangkan untuk sunset, keindahannya sudah tidak perlu diragukan lagi. Karena laut disini adalah laut lepas hal ini membuat pandangan tak terhalang. Tidak ada pulau yang menghalangi mata anda untuk menyaksikan keindahan sunset disini.<br><br>
Sore hari merupakan waktu terbaik untuk anda berkunjung kesini. Suguhan sunsetya dijamin akan membius mata anda. Apa yang membuat sunset begitu indah? Lokasi daratan disini berada disebelah timur, sedangkan lautan berada di barat. Hal ini secara otomatis menciptakan pemandangan yang pas pada saat pergeseran matahari tenggelam.<br><br>
Fasilitas : transportasi umum, penginapan



            <br><br>
            </div>
            <!--buat dibawah-->
            <div class="row">
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/money.png" alt="uang" height="50x" width="50px";>	
					<br><br>
					10.000 - 50.000
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/halfstar.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/emptystar.png" alt="bintang" height="25px" width="25px"  margin-bottom = "20px";>	
					<br><img src="<?=base_url()?>assets/img/lamsel/none.png"  height="50px" width="50px";>	
					<br>
					8.0 / 10
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
                <img src="<?=base_url()?>assets/img/lambar/jakung2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lambar/jakung3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/lambar/jakung4.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lambar/jakung5.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
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
                            <li><a href="<?php echo site_url('lambar/lambar3'); ?>">Desa wisata lumbok<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar4'); ?>">Pantai Tanjung Setia<br></a></li><br>
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