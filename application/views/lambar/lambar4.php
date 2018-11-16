<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Pantai Tanjung Setia</title>
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
<h3>Pantai Tanjung Setia</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/lambar/tjsetia1.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Pantai Tanjung Setia <br><br>

Terpencil di sepanjang pantai barat Lampung, di luar hutan tebal Taman Nasional Bukit Barisan Selatan terletak surga tersembunyi yang mempesona disebut Pantai Tanjung Setia. Meskipun tertutup dari lampu sorot, gelombang di Tanjung Setia yang disebut-sebut sebagai salah satu yang terbaik di dunia oleh peselancar dari seluruh dunia, dan setara dengan tempat surfing terkenal di dunia yaitu Hawaii. <br> <br>

Terletak sekitar 273 km atau 6-7 jam berkendara dari ibukota provinsi Bandar Lampung, di Desa Tanjung Setia Kabupaten Lampung Barat, Pantai Tanjung Setia terletak tepat di jalur arus besar Samudera Hindia dengan gelombang besar konstan yangmenarik. Meskipun demikian, pantai itu sendiri belum mencapai jenis ketenaran di sirkuit internasional, seperti halnya di Bali atau Lombok. <br> <br>

Selama musim berselancar pada puncaknya yang berlangsung dari bulan Juni sampai Agustus, gelombang bisa mencapai enam dan bahkan spektakuler tujuh meter dan peregangan selama 200 meter, menjadikannya tempat bermain utama untuk peselancar. <br> <br>

Tanjung Setia juga menawarkan kondisi yang masih asli dan beberapa keindahan alam yang menakjubkan. pantai berpasir putih lembut yang membentang dari pantai ke pantai dan pemandangan matahari terbenam menawarkan atraksi menarik tersendiridi samping gelombang yang menantang. Tepi Pantai Tanjung Setia juga dihiasi dengan pohon-pohon palem yang subur yang memberikan pemandangan yang indah dan suasana santai  menunggu gelombang yang sempurna. <br> <br>

Jauh dari garis pantai dan air yang mengamuk, lepas pantai Tanjung Setia menantikan penggemar memancing. Dari semua berbagai koleksi ikan, ikan raksasa Blue Marlin yang legendaris jelas mengalahkan tangkapan lainnya. Masyarakat lokal mengenalnya sebagai Iwa Tuhuk, Blue Marlins ini dapat memiliki berat kira-kira antara 50 sampai 70 kilogram dan panjang sampai170 cm. <br> <br>

Mengingat keindahan yang murni dan lokasi strategis yang terpencil, istilah pakaian mutiara tersembunyi pantai ini paling sempurna. Airnya memanjakan dan gelombang yang menantang dikombinasikan dengan tempat yang santai membuat tujuan ini sempurna baik untuk memompa adrenalin dan pencari liburan. <br> <br>

Fasilitas : <br> Obyek Wisata Pantai Tanjung Setia di Lampung Barat Lampung bisa dibilang sebuah wisata pantai yang memiliki beberapa akan fasilitas dan pelayanan di antaranya sebagai berikut :
Area Parkir kendaraan, Mushola, Kamar mandi / MCK, Penginapan, dan masih banyak lainya.


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
					<img src="<?=base_url()?>assets/img/lamsel/emptystar.png" alt="bintang" height="25px" width="25px"  margin-bottom = "20px";>	
					<br><img src="<?=base_url()?>assets/img/lamsel/none.png"  height="50px" width="50px";>	
					<br>
					8.9 / 10
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="<?=base_url()?>assets/img/lamsel/mytime.png" alt="waktu" height="50x" width="50px";>		
					<br><br>
					24 Jam
				</div>
            </div>
            <br><br>
           
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