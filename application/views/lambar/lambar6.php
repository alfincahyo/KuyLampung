<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Danau Suoh</title>
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
<h3>Danau Suoh</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lambar/suoh5.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Danau Suoh<br><br>

Danau Lebar Suoh yang memiliki luas 65 hektare. Setibanya di Danau Suoh anda akan disambut dengan hamparan savana ilalang yang menakjubkan. Ada puluhan hektar savana ilalang berwarna hijau yang siap memanjakan mata anda.
Menurut catatan sejarah, Danau Suoh ini terbentuk atas letusan gunung berapi pada saat purbakala. Letusan dahsyat itu kemudian menciptakan cekungan di daerah yang kini dinamai Suoh.<br><br>
Letaknya yang tidak jauh dari pemukiman penduduk ini, memiliki air jernih namun bila dilihat dari kejauhan berwarna biru pekat. Uniknya, di danau ini terdapat sebuah pulau yang berada di tengah danau. Pulau yang oleh masyarakat disebut dengan sebutan Pulau Lebar ini dipenuhi pepophonan. Untuk menjangkaunya, Anda harus melewati perkebunan kakao milik warga dengan berjalan kaki dan motor dititipkan di halaman rumah warga.




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
					9.5 / 10
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
                <img src="<?=base_url()?>assets/img/lambar/suoh2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lambar/suoh3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/lambar/suoh4.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">	
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lambar/suoh1.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
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