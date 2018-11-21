<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>BUKIT SAKURA</title>
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
<h3>BUKIT SAKURA</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/balam/bukit1.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Bukit Sakura Kemiling sangat pas sebagai tempat berlibur bagi kaum muda mudi, sebab di sana tersedia banyak spot foto kekinian yang menjadi spot favorit bagi para pengunjung untuk berselfie. Buat liburan keluarga juga bagus, di sana bisa bersantai dan jalan-jalan menikmati indahnya panorama alam yang luar biasa.<br><br>
            Kondisi Geografis di kawasan ini sangatlah bagus, tentu sangat strategis sebagai tempat wisata. Selain menyuguhkan panorama alam yang indah khas perbukitan, juga suasananya sangat nyaman, udaranya sejuk, yang pasti pas banget sebagai tempat liburan bagi wisatawan.<br><br>
            Di wisata Bukit Sakura Kemiling ini juga tersedia fasilitas yang bisa dinikmati, seperti gazebo dan juga kantin. Di gazebo tersebut pengunjung dapat bersantai sembari menikmati panorama alam perbukitan dan juga pemandangan kota Bandar Lampung yang sangat menawan, apalagi ketika malam hari, terlihat kerlap-kerlip lampu kota yang sangat bagus. Sedangkan, buat pengunjung yang merasa lapar, bisa langsung menuju ke kantin sekitar. Di sana tersedia aneka hidangan lezat yang bisa dinikmati, diantaranya seperti sosis bakar, pempek, mie, dan lain-lain. Suhu udara yang dingin memang pas banget momentnya untuk menyantap makanan yang hangat. Selain itu, bagi pengunjung muslim yang ingin beribadah juga tidak perlu khawatir, sebab tersedia juga Musholla.<br><br>
            Alamat Bukit Sakura Kemiling berada di Jalan Batu Kalam, Langkapura, Kemiling Bandar Lampung, berada di tengah-tengah antara Jalan Imam Bondjol dan Jalan Raden Imba Kesuma.Lokasi Bukit Sakura Kemiling Bandar Lampung tidak terlalu jauh dari Lembah Hijau Lampung, sekitar 1-2 km saja, ke arah Kemiling, lewat Jalan Raden Imba Kesuma Palang Besi.<br><br>
            Fasilitas Bukit Sakura Kemiling :<br><br>
            - Penginapan berupa rumah panggung dan cottage<br>
            - Tempat parkir<br>
            - Gazebo atau pondokan<br>
            - Tempat nongkrong yang cocok buat nonton bareng acara sepak bola<br>
            - Mushola dan toilet<br>
            - Kantin/tempat makan<br><br>
            Wahana wisata yang ada di Bukit Sakura Kemiling di antaranya ada spot foto, sky bridge dengan balon udaranya, sewa baju kimono Jepang di Bandar Lampung, serta area panahan.JIka ingin foto menggunakan baju khas Jepang, anda bisa menyewanya dengan harga sewa 25 ribu rupiah saja.Bukit Sakura Kemiling juga cocok dijadikan tempat prewedding di Bandar Lampung, atau menggelar acara pernikahan di sini.Harga tiket masuk ke bukit sakura adalah sebesar 10 ribu rupiah per orang<br><br>


            <br>
            </div>         
        <div class="row">
            <div class="col-sm-4">
                <div class="nilai" >
                    <p>HARGA</p>
					<img src="<?=base_url()?>assets/img/balam/money.png" alt="uang" height="50x" width="50px";>	
                    <p><br>10.000 - 50.000</p>
                    </p>                
                </div>
            </div>
            <div class="col-sm-4">
                <div class="nilai" >
                    <p>RATING</p>
                    <img src="<?=base_url()?>assets/img/souveniers/allstar.png" alt="bintang" height="50px" ;>	
                    <p><br>7.6 / 10</p>
                    </p>                   
                </div>
            </div>
            <div class="col-sm-4">
                <div class="nilai">
                    <p>OPERASIONAL</p>
                    <img src="<?=base_url()?>assets/img/balam/mytime.png" alt="waktu" height="50x" width="50px";>		
                    <p><br>Setiap Hari<br>
                    08.00 - 17.00<br></p>
                    </p>                    
				</div>
            </div>
        </div>

        </div>
        <div class="col-4 ">
        <div id="sidebar" >
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
                <div class="widget">
                    <h3 class="judulwidget">Artikel Menarik lainnya<br></h3>
                        <ul>
                            <li><a href="<?php echo site_url('balam/balam1'); ?>">Pantai Mutun<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam2'); ?>">Puncak Mas<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam3'); ?>">Taman kupu-kupu<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam4'); ?>">Museum Lampung<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam5'); ?>">Horti Park<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam6'); ?>">Bukit Sakura<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam7'); ?>">Lembah Hijau<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam8'); ?>">Alam Wawai<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam9'); ?>">Hutan Pinus (Zona 235)<br></a></li><br>
                            <li><a href="<?php echo site_url('balam/balam10'); ?>">Penangkaran Rusa<br></a></li><br>
                        </ul>
                </div>

        </div>
		<br>
        </div>
    </div>
    
</div>
</body>
</html>
