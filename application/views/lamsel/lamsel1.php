<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Pasir Putih</title>
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
<h3>Pantai Pasir Putih</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lamsel/pasirputih.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Pantai Pasir Putih <br>

Salah satu obyek wisata yang terkenal di Lampung adalah Pantai Pasir Putih yang terletak di Jalan Trans Sumatera, Tarahan, Kabupaten Lampung Selatan berjarak 30-45 menit perjalanan dari Kota Bandar Lampung. Hampir setiap hari libur pantai ini pasti ramai dikunjungi para wisatawan dari daerah Lampung sendiri maupun dari Luar Lampung yang ingin berlibur menikmati indahnya pesona pantai Pasir Putih tersebut. <br>

Setibanya di Pantai Pasir Putih, Anda seolah disambut dengan lukisan alam yang luar biasa. Perpaduan pasir yang putih dan pepohonan yang melambai dengan laut yang biru, akan membuat siapa pun takjub dan terpana. Pantai Pasir Putih memang sudah menjadi kebanggaan masyarakat Lampung. Maka, tempat ini tidak hanya digemari wisatawan dalam negeri, tapi juga wisatawan mancanegara. 

Menghabiskan waktu untuk sekedar tiduran, berjalan-jalan atau pun mencari objek foto dapat Anda lakukan di sekitar pantai. Putih dan bersihnya pantai, akan membuat Anda betah untuk berlama-lama di pantai ini. Bagi pecinta olahraga air, ada banyak kegiatan yang bisa Anda lakukan di pantai ini. Beberapa kegiatan yang menarik seperti berenang, kano dan berpetualang dengan perahu nelayan. Wisata pasir putih mempunyai keindahan yang sangat istimewa sehingga tidak heran kalau tempat ini selalu ramai di kunjungi oleh wisatawan lokal, gugusan pasir putih yang bersih membentang di bibir pantai yang menambah cantik si pantai.<br>
Pantai pasir putih mempunyai warna hijau kebiruan yang menambah elok untuk di kunjungi dan di nikmati, ditempat ini anda bisa bermain-main pasir, bermain air dan berjemur. Pada hari libur tempat ini banyak sekali di kunjungi oleh masyarakat lokal baik dari daerah sekitar atau daerah lain seperti jakarta, tanggerang, palembang dan sebagainya. Bahkan ada beberapa wisatawan mancanegara lalu lalang di tempat ini untuk menikmati pesona pasir putih. 
Harga tiket masuk ke Pantai Pasir Putih ini pun relatif sangat murah, hanya dengan mengeluarkan uang sebesar Rp. 20.000,- anda sudah mendapatkan tiket masuk untuk satu orang. Anda juga bisa menikmati beberapa pulau kecil di sekitar Pantai Pasir Putih, seperti Pulau Codong. Pulau Codong terlihat jelas dari pinggir Pantai Pasir Putih. Anda dapat menyewa boat seharga Rp 150.000-250.000. Sepanjang perjalanan ke Pulau Codong, Anda dapat melihat keramba-keramba yang dipasang nelayan untuk menangkap ikan. Pulau Codong juga tidak kalah menarik dari Pantai Pasir Putih. Pasirnya juga putih dan bersih, serta Anda juga dapat bermain kano dan snorkling di sekitar Pulau Codong. 

            <br><br>
            </div>
            
            <div class="row">
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/money.png" alt="uang" height="50x" width="50px";>	
					<br><br>
					Rp. 20.000,-
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>	
					<img src="<?=base_url()?>assets/img/lamsel/emptystar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";>	
					<br><img src="<?=base_url()?>assets/img/lamsel/none.png"  height="50px" width="50px";>	
					<br>
					8.1 / 10
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/mytime.png" alt="waktu" height="50x" width="50px";>		
					<br><br>
					07.00 - 18.00
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
                            <li><a href="<?php echo site_url('lamsel/lamsel2'); ?>">Pantai Embe<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel3'); ?>">Taman Batu Granit<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel4'); ?>">Pulau Sebesi<br></a></li><br>
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