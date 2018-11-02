<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Sungai  Way Besai</title>
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
<h3>Sungai  Way Besai</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lambar/besai1.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Sungai  Way Besai<br><br>

Kabupaten Lampung Barat sebagian besar dilintasi oleh sungai besar yang disebut Sungai Way Besai. Potensi besar yang dimiliki oleh sungai digunakan untuk kebutuhan pariwisata, yaitu arung jeram. Sepanjang jalur rafting ada sekitar 13 jeram yang harus dilewati. Meskipun jeram diklasifikasikan dalam kategori kelas II dan III, tetapi sungai ini tetap menjadi tantangan bagi mereka yang suka petualangan karena jeram umumnya jenis jeram yang panjang dan cukup berat dan bertangga-tangga.<br><br>
Selain itu, ada banyak batu besar di tengah sungai yang dapat membuat aliran sungai berombak dan membutuhkan kelincahan dan kerja tim sehingga perahu tidak terbalik saat melewati jeram panjang. Menariknya, semakin dekat ke titik finish, jeram sungai semakin bagus dan menantang.<br><br>
Selain uji adrenalin, sungai Way Besai juga menawarkan pemandangan yang indah. Anda dapat menyaksikan pemandangan dan berbagai flora dan fauna dari Lampung di sepanjang jalan. Selain itu, Anda juga dapat menikmati air yang sejuk di Way Besay yang cukup jernih untuk berenang atau mandi.<br><br>
Fasilitas : Arum jeram beserta peralatannya, penginapan, musola







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
					<img src="<?=base_url()?>assets/img/lamsel/emptystar.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/emptystar.png" alt="bintang" height="25px" width="25px"  margin-bottom = "20px";>	
					<br><img src="<?=base_url()?>assets/img/lamsel/none.png"  height="50px" width="50px";>	
					<br>
					7 / 10
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/mytime.png" alt="waktu" height="50x" width="50px";>		
					<br><br>
					Setiap Hari <br> 08.00 - 20.00
				</div>
            </div>
            <br><br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/lambar/besai2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lambar/besai3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/lambar/besai4.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lambar/besai.png" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
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
                            <li><a href="<?php echo site_url('lambar/lambar5'); ?>">Pantai labuhan jakung<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar6'); ?>">Danau Suoh<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar7'); ?>">Gunung Pesagi<br></a></li><br>
                            <li><a href="<?php echo site_url('lambar/lambar8'); ?>">Bukit Barisan Selatan<br></a></li><br>
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