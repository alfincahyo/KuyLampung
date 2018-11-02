<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>HORTI PARK : TAMAN BUAH DAN SAYURAN LAMPUNG</title>
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
<h3>HORTI PARK : TAMAN BUAH DAN SAYURAN LAMPUNG</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/balam/horti1.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Lingkungan yang hijau dan asri juga dapat tercipta melalui kegiatan tanam yang bukan hanya dilakukan oleh lingkungan pertanian tetapi juga pemanfaatan lahan semaksimal mungkin.<br><br>
            Adalah hortikultura yang merupakan salah satu metode budidaya pertanian modern yang saat ini sedang marak diterapkan. Bidang kerja dari hortikultura meliputi pembenihan, pembibitan, kultur jaringan, produksi tanaman, hama dan penyakit, panen, pengemasan dan distribusi. Berkenaan dengan hal-hal kompleks tersebut tak salah jika Taman Hortikultura di provinsi Lampung yang berada di desa Sabah Balau, Kecamatan Tanjung Bintang Kabupaten Lampung Selatan ini menjadi bagian penting dari upaya segenap pihak dalam memaksimalkan lingkungan dalam konsep holtikultura secara utuh<br><br>
            Sesuai dengan namanya, Horti Park Lampung berisi beraneka ragam tanaman, dari sayuran, buah-buahan, tanaman obat-obatan, serta berbagai macam pembelajaran bercocok tanam secara hidroponik dan pembibitan serta pembuatan pupuk organik.Dengan lahan seluas hampir 8 hektar, membuat kebun di horti park Lampung ini bisa ditanami banyak sekali jenis sayuran, buah-buahan, dan aneka macam tanaman lainnya. Lalu ada juga sawi, kangkung, bayam, dan aneka macam sayuran lainnya yang ditanam di pot dari bekas botol air mineral, bekas ban, bekas toples, bambu, dan media tanam bekas lainnya.<br><br>
            Cukup menempuh waktu 35 menit, kearah padang Golf – Sukarame – Bandar Lampung, kita akan dengan mudah menemukan kawasan Horti Park setelah melalui jalan beraspal di kawasan rencana Kota Baru - Lampung. <br><br>

            <br>
            </div>
            <div class="row">
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/balam/money.png" alt="uang" height="50x" width="50px";>	
					<br><br>
					5.000 - 10.000
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/balam/halfstar.png" alt="bintang setengah" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/balam/emptystar.png" alt="bintang kosong" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/balam/emptystar.png" alt="bintang kosong" height="25px" width="25px"  margin-bottom = "20px";>	
					<br><img src="<?=base_url()?>assets/img/balam/none.png"  height="50px" width="50px";>	
					<br>
					5.0 / 10
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/balam/mytime.png" alt="waktu" height="50x" width="50px";>		
					<br><br>
					Setiap Hari <br> 07.00 - 18.00 <br>
				</div>
            </div>
            <br><br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/balam/horti2.jpg" class="img-thumbnail" alt="Cinque Terre" height="205px" width="410px";>	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/balam/horti3.jpg" class="img-thumbnail" alt="Cinque Terre" height="205px" width="400px";>
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/balam/horti4.jpg" class="img-thumbnail" alt="Cinque Terre" height="205px" width="410px";>	
                <br><br>
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/balam/horti5.jpg" class="img-thumbnail" alt="Cinque Terre" height="205px" width="400px";>
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