<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Pulau Sebesi</title>
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
    Kabupaten Lampung Selatan
    </div>
<br>
<h3>Pulau Sebesi</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lamsel/sebesi.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            
            Pulau Sebesi menjadi salah satu pulau yang sedang dikembangkan menjadi daerah tujuan wisata andalan Lampung Selatan selain Pulau Krakatau.<br><br>
            Pulau Sebesi masuk wilayah Desa Tejang Kecamatan Rajabasa, Kabupaten Lampung Selatan yang terletak di selatan perairan Lampung, lebih tepatnya di sebelah Timur Laut Gugusan Pulau Krakatau, sebelah selatan Pulau Sebuku, dan sebelah timur Pulau Serdang dan Legundi.<br><br>
            Pulau Sebesi memiliki bukit yang biasa disebut Gunung Sebesi yang memiliki tinggi 844 mdpl dan pantai yang asri dengan pemandangan cantik pulau-pulau di sekelilingnya.<br><br>
            Hal yang bisa dilakukan di Pulau Sebesi :<br><br>
            1. Naik Kano<br><br>
            2. Menyeberang ke Pulau Umang-umang<br><br>
            3. Snorkeling<br><br>
            4. Menemukan spot fotogenik<br><br>
            5. Bersantai sambil minum kelapa Pulau Sebesi<br><br>
            6. Mendaki Gunung Pulau Sebesi<br><br>

            Untuk bisa sampai ke Pulau Sebesi, para pengunjung harus melakukan perjalanan menuju dermaga Canti, Kalianda, Lampung Selatan. Perjalanan dari Kota Bandar Lampung bisa mencapai 2 jam, sedangkan perjalanan dari Pelabuhan Bakauheni hanya 1 jam.<br><br>

            Setelah sampai di Dermaga Canti, pengunjung bisa memesan kapal menuju Pulau Sebesi. Biasanya, para awak kapal akan memberikan paket tour yang akan mengajak wisatawan untuk berkeliling ke berbagai pulau di Lampung, mulai dari Pulau Sebuku, Pulau Umang-umang, Pulau Krakatau, hingga Pulau Panjang dengan harga sekitar Rp 3 juta-an. Pengunjung hanya tinggal duduk manis menunggu 2 jam untuk sampai ke Pulau Sebesi.<br><br>

            Penginapan di Pulau Sebesi<br><br>
            Di Pulau Sebesi terdapat banyak penginapan, mulai dari cottage hingga homestay. Harga homestay di Pulau Sebesi rata-rata Rp 200 ribu per rumah dan bisa dihuni oleh 10 orang.
            “Harga penginapan per malam hanya Rp200 ribu untuk 10 orang. Tapi kalau ingin sewa sekamar ya bisa. Tapi, harganya sama. Kalau di tempat lain harganya sudah naik sekitar Rp 250 ribu per malam,” ujar Salihah (44 tahun), pemilik salah satu homestay di Pulau Sebesi.
            Selain bisa menginap, para tamu juga mendapatkan sarapan seperti di homestay lainnya.


            <br><br>
            </div>
            <div class="row">
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/money.png" alt="uang" height="50x" width="50px";>     
                    <br><br>
                    Tiket : Rp. 20.000,-<br>
                </div>
                <div class="col-sm-4" style="text-align:center;">
                    <img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>  
                    <img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>   
                    <img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>   
                    <img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>   
                    <img src="<?=base_url()?>assets/img/lamsel/emptystar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";> 
                    <br><img src="<?=base_url()?>assets/img/lamsel/none.png"  height="50px" width="50px";>    
                    <br>
                    8.4 / 10
                </div>
                <div class="col-sm-4" style="text-align:center;">
                    <img src="<?=base_url()?>assets/img/lamsel/mytime.png" alt="waktu" height="50x" width="50px";>        
                    <br><br>
                    24 Jam
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
                            <li><a href="<?php echo site_url('lamsel/lamsel1'); ?>">Pasir Putih<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel2'); ?>">Pantai Embe<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel3'); ?>">Taman Batu Granit<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel5'); ?>">Kebun Karet Trikora<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel6'); ?>">Pulau Mengkudu<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel7'); ?>">Pantai Guci Batu Kapal<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel8'); ?>">Pantai Sebalang<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel9'); ?>">Pantai Marina<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel10'); ?>">Menara Siger<br></a></li><br>
                        </ul>
                </div>

        </div>
		<br>
        </div>
    </div>
    
</div>
</body>
</html>