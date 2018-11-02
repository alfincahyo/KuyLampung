<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>HUTAN PINUS</title>
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
    BANDAR LAMPUNG
    </div>
<br>
<h3>HUTAN PINUS : ZONA 235 </h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/balam/pinus1.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Zona 235 adalah tempat atau kawasan hutan yang terdapat villa dan digunakan sebagai tempat outbond, training centre, paintball, 
            dan camping. Letaknya masih disekitar kawasan wisata Sukadanaham Bandar Lampung. Untuk mencapai ke Zona 235 cukup ditempuh dengan
             15 menit perjalanan dari Tanjung Karang menggunakan kendaraan. Kawasan Zona 235 di Bandar Lampung memang terkenal sebagai kawasan 
             yang dipakai untuk bermain paintball. 
            <br><br>
            Untuk yang hobby bermain paintball, disini terdapat 3 arena yang dapat dipakai untuk perang. Zona 235 ini pun memiliki beberapa 
            villa untuk tempat menginap. Pemandangan bukit khas bukit barisan selatan serta pemandangan kota Bandar Lampung dilihat dari 
            ketinggian merupakan kelebihan kawasan ini. Tempat ini juga bagus digunakan sebagai tempat untuk berkemah. 
            <br><br>
            Udara dikawasan ini pun cukup dingin, sehingga tepat untuk pasangan yang baru menikah untuk berbulan madu. Letaknya yang tak 
            begitu jauh dari kawasan wisata Lembah Hijau membuat tempat ini saya sarankan untuk dapat disinggahi jika berwisata ke Bandar 
            Lampung. Bermalam di Villa Zona 235 saya sarankan untuk membawa mantel yang tebal, karena udara malam hari disini cukup membuat 
            tubuh anda menggigil.
            <br><br>
            Di tempat ini kami juga menyediakan 3 areal untuk camping berkapasitas masing-masing hingga 40 tenda, MCK, 2 lintasan flying-fox, 
            2 unit walk in the sky, lintasan untuk trekking dan tracking: motor dan sepeda gunung, juga ada air terjun, hutan dengan berbagai 
            vegetasi dan banyak lagi. 


            <br>
            </div>
            <div class="row">
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/balam/money.png" alt="uang" height="50x" width="50px";>	
					<br><br>
					20.000 - 85.000
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/balam/halfstar.png" alt="bintang stengah" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/balam/emptystar.png" alt="bintang kosong" height="25px" width="25px"  margin-bottom = "20px";>	
					<br><img src="<?=base_url()?>assets/img/balam/none.png"  height="50px" width="50px";>	
					<br>
					7.5 / 10
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/balam/mytime.png" alt="waktu" height="50x" width="50px";>		
					<br><br>
					Setiap Hari <br> 09.00 - 17.30
				</div>
            </div>
            <br><br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/balam/pinus2.jpg" class="img-thumbnail" alt="Cinque Terre" height="205px" width="410px";>	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/balam/pinus3.jpg" class="img-thumbnail" alt="Cinque Terre" height="205px" width="400px";>
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/balam/pinus4.jpg" class="img-thumbnail" alt="Cinque Terre" height="205px" width="410px";>	
                <br><br>
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/balam/pinus5.jpg" class="img-thumbnail" alt="Cinque Terre" height="205px" width="400px";>
                <br><br>
                </div>
            </div>

            <div >
            <?php
                include "formkomentar.php";
            ?>
            </div>

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
                            <li><a href="<?php echo site_url('balam/balam1'); ?>"">Pantai Mutun<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam2'); ?>"">Puncak Mas<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam3'); ?>"">Taman kupu-kupu<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam4'); ?>"">Museum Lampung<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam5'); ?>"">Horti Park<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam6'); ?>"">Bukit Sakura<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam7'); ?>"">Lembah Hijau<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam8'); ?>"">Alam Wawai<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam9'); ?>"">Hutan Pinus (Zona 235)<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam10'); ?>"">Penangkaran Rusa<br></a></li><br>
                        </ul>
                </div>

        </div>
		<br>
        </div>
    </div>
    
</div>
</body>
</html>