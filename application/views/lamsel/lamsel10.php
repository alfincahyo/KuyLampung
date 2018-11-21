<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
    <title>Menara Siger</title>
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
    LAMPUNG SELATAN
    </div>
<br>
<h3>MENARA SIGER</h3>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br><img src="<?=base_url()?>assets/img/lamsel/siger/1.jpg" alt="cawi" style="width:820px">
            </div>
            <div class="isi">
                Obyek Wisata Menara Siger di Lampung Selatan Lampung adalah salah satu tempat wisata yang berada di Bukit Gamping, Kecamatan Bakauheni, Kabupaten Lampung Selatan, Indonesia. Obyek Wisata Menara Siger di Lampung Selatan Lampung adalah tempat wisata yang ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari hari. <br> <br>
                Obyek Wisata Menara Siger di Lampung Selatan Lampung memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika anda berada di kota  lampung  tidak mengunjungi wisata sejarah yang mempunyai keindahan  yang tiada duanya tersebut. <br> <br>
                Obyek Wisata Menara Siger di Lampung Selatan Lampung  sangat cocok untuk mengisi kegiatan liburan anda, apalagi saat liburan panjang seperti libur nasional, ataupun hari ibur lainnya.  Keindahan Obyek Wisata Menara Siger di Lampung Selatan Lampung ini sangatlah baik bagi anda semua yang berada di dekat  atau di kejauhan untuk merapat mengunjungi tempat Obyek Wisata Menara Siger di Lampung Selatan Lampung di kota lampung.<br> <br>
                Obyek Wisata Menara Siger di Lampung Selatan Lampung merupakan tempat wisata yang harus anda kunjungi karena pesona keindahannya tidak ada duanya. Penduduk lokal daerah lampung juga sangat ramah tamah terhadap wisatawan lokal maupun wisatawan asing <br> <br>
                Fasilitas   : <br> <br>
                - Area Parkir kendaraan <br>
                - Mushola <br>
                - Kamar mandi / MCK <br>
                - Penginapan <br>
                - dan masih banyak lainya <br>

                </center>
            <br>
            </div>
            <div class="row">
                <div class="col-sm-4" style="text-align:center;">
                    <img src="<?=base_url()?>assets/img/balam/money.png" alt="uang" height="50x" width="50px";> 
                    <br><br>
                    5.000
                </div>
                <div class="col-sm-4" style="text-align:center;">
                    <img src="<?=base_url()?>assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>  
                    <img src="<?=base_url()?>assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>  
                    <img src="<?=base_url()?>assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>  
                    <img src="<?=base_url()?>assets/img/balam/halfstar.png" alt="bintang" height="25px" width="25px";>  
                    <img src="<?=base_url()?>assets/img/balam/emptystar.png" alt="bintang kosong" height="25px" width="25px"  margin-bottom = "20px";>  
                    <br><img src="<?=base_url()?>assets/img/balam/none.png"  height="50px" width="50px";>   
                    <br>
                    8 / 10
                </div>
                <div class="col-sm-4" style="text-align:center;">
                    <img src="<?=base_url()?>assets/img/balam/mytime.png" alt="waktu" height="50x" width="50px";>       
                    <br><br>
                    Senin - Minggu <br> 06:00 – 00:00
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
                    <h3 class="judulwidget">Pantai<br></h3>
                        <ul>
                            <li><a href="<?php echo site_url('lamsel/lamsel1'); ?>">Pasir Putih<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel2'); ?>">Pantai Embe<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel3'); ?>">Taman Batu Granit<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel4'); ?>">Pulau Sebesi<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel5'); ?>">Kebun Karet Trikora<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel6'); ?>">Pulau Mengkudu<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel7'); ?>">Pantai Guci Batu Kapal<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel8'); ?>">Pantai Sebalang<br></a></li><br>
                            <li><a href="<?php echo site_url('lamsel/lamsel9'); ?>">Pantai Marina<br></a></li><br>
                        </ul>
                </div>
        
        </div>
        <br>
        </div>
    </div>
    
</div>
</body>
</html>