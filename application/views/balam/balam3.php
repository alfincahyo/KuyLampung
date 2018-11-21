<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>TAMAN KUPU-KUPU</title>
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
<h3>TAMAN KUPU KUPU</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url()?>assets/img/balam/kupu.jpg" class="img-thumbnail" alt="Cinque Terre" height="410px" width="820px";>	
            </div>
            <div class="isi">
            Tempat wisata dan sarana edukasi Taman Kupu-Kupu Gita Persada berada kecamatan Kemiling di kaki gunung Betung tepatnya di desa 
            Suka manis , suasana yang sangat sejuk dan asri tentu sangat menarik minak wisatawan untuk berkunjung. Perjalanan tempuh dari 
            kota Bandar Lampung sekitar 30 menit. Patokan nya bisa dari arah kebun binatang Taman Bumi Kedaton masih sekitar 20 menitan lagi, 
            anda akan melewati wira garden, air terjun batu putu, dan tempat konservasi rusa.
            <br><br>
            Perjalanan menuju Taman Kupu Kupu Gita Persada anda akan disuguhkan perkampungan warga, meskipun begitu udara nya masih sangat 
            sejuk karena berada di kaki gunung Betung. Suasana yang sangat asri dan nyaman membuat kita betah berlibur di Taman Kupu Kupu 
            Gita Persada.
            <br><br>
            Untuk harga tiket masuk, anda akan dikenai biaya Rp20.000 per orang. Menurut saya cukup murah untuk tempat berlibur sekaligus 
            tempat edukasi bagi anak anak. Tentunya bagi orang tua harus tetap menjaga anak anak, jangan lepas dari pengawasan saat berada 
            di Taman Kupu kUpu Gita Persada. Disini banyak fasilitas yang mendukung.
            <br><br>
            Fasilitas yang ada di Taman Kupu Kupu Gita Persada:
            <br><br>
            1. Museum Kupu Kupu
            <br>
            Di dalam museum ini terdapat kupu kupu cantik dengan berbagai warna yang telah diawetkan dan dipajang secara apik. Selain terdapat 
            kupu kupu yang diawetkan, pengelola juga menjual souvenir souvenir cantik yang bisa jadi oleh oleh bagi wisatawan yang telah berkunjung.
            <br><br>
            2. Rumah pohon
            <br>
            Menurut saya yang istimewa dari taman kupu kupu gita persada ini adalah tersedianya rumah rumah pohon, kita dapat menikmati 
            pemandangan dari atas rumah pohon ini. Rasanya ingin berlama lama jika sudah berada di atas rumah pohon.
            <br><br>
            3. Dom Penangkaran Kupu Kupu
            <br>
            Inilah destinasi utama dari Taman Kupu Kupu Gita Persada, selain isinya yang berisi ratusan kupu kupu cantik dan bunga-bunga 
            indah sebagai makanan para kupu kupu. Spot ini merupakan favorit para wisatawan untuk berfoto ria. Selain berlibur tempat
             penangkaran kupu kupu ini juga bisa sebagai sarana edukasi anak anak untuk mengenal lebih tentang habitat kupu kupu, 
             kebiasaan nya, dan makanan nya yaitu nektar.
            <br><br>
            4. Fasilitas bermain anak
            <br>
            Untuk keluarga yang berwisata membawa anak anak nya bisa ke spot permainan anak, tepatnya yang nyaman dan aman. 
            Bisa membuat para keluarga betah berada di Taman Kupu Kupu Gita Persada
            <br>

            <br>
            </div>        <div class="row">
            <div class="col-sm-4">
                <div class="nilai" >
                    <p>HARGA</p>
					<img src="<?=base_url()?>assets/img/balam/money.png" alt="uang" height="50x" width="50px";>	
                    <p><br>80.000 - 120.000</p>
                    </p>                
                </div>
            </div>
            <div class="col-sm-4">
                <div class="nilai" >
                    <p>RATING</p>
                    <img src="<?=base_url()?>assets/img/souveniers/allstar.png" alt="bintang" height="50px" ;>	
                    <p><br>7.5 / 10</p>
                    </p>                   
                </div>
            </div>
            <div class="col-sm-4">
                <div class="nilai">
                    <p>OPERASIONAL</p>
                    <img src="<?=base_url()?>assets/img/balam/mytime.png" alt="waktu" height="50x" width="50px";>		
                    <p><br>07.00 - 20.00</p>
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
