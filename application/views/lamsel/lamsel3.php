<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Taman Batu Granit</title>
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
<h3>Taman Batu Granit, Tanjung Bintang</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lamsel/batugranit.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
                Sebagai salah satu provinsi dengan garis pantai terpanjang sumatera, Lampung memiliki potensi wisata yang cukup  menjanjikan untuk dikembangkan dan diexplore ke mata dunia. Tak hanya pantainya, Provinsi Lampung juga mengandung beragam potensi geologi yang juga menjanjikan untuk dikelola menjadi geowisata unggulan.Dan begitu Juga di Lampung Selatan tepatnya di Tanjung Bintang ada tempat yang kece nih yaitu  Taman Batu Granit Tanjung Bintang Lampung.<br><br>
        Taman Batu Granit Tanjung Bintang Lampung merupakn geowisata potensial namun luput dari perhatian.Sedikit informasi,Taman Batu Granit Tanjung Bintang Lampung sering di sebut Granit Indah yang merupakan obyek wisata andalan Lampung Selatan. Namun, bersadarkan penuturan para warga, investor utama obyek wisata ini telah meninggal dan akhirnya obyek wisata ini terbengkalai, rusak, dan kembali ke fungsi awalnya, perkebunan karet yang dikelola PTPN VII persero.<br><br>

        Dan untuk Rute  untuk menuju ke Taman Batu Granit Tanjung Bintang Lampung ini :<br><br>

        Dari Unila  Kearah Jl.Soekarno Hatta, belok kanan ➡ Jalan lurus arah Bakauheni sampai Simpang KaliBalok (Fly Over Kedua), Belok Kiri (Jl. Pangeran Tirtayasa) ➡ lurus sampai menemukan simpang tiga, belok Kiri (Jl. Insinyur Sutami) ➡ Patokan Utama Granit Indah adalah pasar Palputih  ➡ Jalan terus  sampai menemukan  simpang tiga, belok kanan ke arah Perkebunan Karet PTPN VII ➡ Masuk di Desa Purwodadi Dalem, silahkan tanya penduduk karena rute berikutnya akan susah ditempuh tanpa penunjuk arah. <br><br>
        Bagi anda yang ingin berkunjung di sarankan tidak sendirian ya guys,dan selalau berhati-hati.Semoga beramanfaat dan Selamat Berkunjung.


            <br><br>
            </div>
            <div class="row">
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/money.png" alt="uang" height="50x" width="50px";> 	
					<br><br>
					Rp. 10.000,-
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>  
                    <img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>   
                    <img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>   
                    <img src="<?=base_url()?>assets/img/lamsel/star.png" alt="bintang" height="25px" width="25px";>   
                    <img src="<?=base_url()?>assets/img/lamsel/emptystar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";> 
                    <br><img src="<?=base_url()?>assets/img/lamsel/none.png"  height="50px" width="50px";>    
                    <br>
                    8.5 / 10
                </div>
                <div class="col-sm-4" style="text-align:center;">
                    <img src="<?=base_url()?>assets/img/lamsel/mytime.png" alt="waktu" height="50x" width="50px";>        
                    <br><br>
                    09.00 - 16.00
				</div>
            </div>
            <br><br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/lamsel/batugranit/1.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">    
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lamsel/batugranit/2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-sm-6">
                <img src="<?=base_url()?>assets/img/lamsel/batugranit/3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">    
                </div>
                <div>
                <img src="<?=base_url()?>assets/img/lamsel/batugranit/4.jpg" class="img-thumbnail" alt="Cinque Terre" style="height: 227px; width: 400px;">
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