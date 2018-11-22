
  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
  <title>Restoran</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/home.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/oleh.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	 <style>
	#runningtext{
    width:  100%;
    height:200px;
    padding-top: 7px;
    padding-bottom: 15px;
    margin: 5px 0 5px 0;
    background-color: #F2F3F4;
    color: #111111;
    font-size: 50px;
    position: relative;
}
	</style>
	
	</head>

<body>

<div class ='container'>
		 <div id="runningtext">
       <marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();"
       onmouseout="this.start();" direction="left">
       <img src="<?=base_url()?>assets/img/caropagebaru/kemenpar.png" class="img-thumbnail" alt="Bandar Lampung" height="250px" width="250px"style='background-color: #f2f3f4; border: none;'>
       <img src="<?=base_url()?>assets/img/caropagebaru/logopesona.png" class="img-thumbnail" alt="LogoWonderfull" height="200px" width="210px"style='background-color: #f2f3f4; border: none;'> 
       <img src="<?=base_url()?>assets/img/caropagebaru/wonderfullamp.png" class="img-thumbnail" alt="LogoWonderfull" height="150px" width="150px"style='background-color: #f2f3f4; border: none;'> 
       <img src="<?=base_url()?>assets/img/caropagebaru/logolampung.png" class="img-thumbnail" alt="Bandar Lampung" height="80px" width="100px"style='background-color: #f2f3f4; border: none;'>
       <img src="<?=base_url()?>assets/img/caropagebaru/logobdl.png" class="img-thumbnail" alt="Lamsel" height="150px" width="100px"style='background-color: #f2f3f4; border: none;'>
       <img src="<?=base_url()?>assets/img/caropagebaru/logolamsel.png" class="img-thumbnail" alt="Lambar" height="100px" width="100px"style='background-color: #f2f3f4; border: none;'> 
       <img src="<?=base_url()?>assets/img/pagebaru/logolambar.png" class="img-thumbnail" alt="Lambar" height="0px" width="100px"style='background-color: #f2f3f4; border: none; margin-left: 0px;'> 
       
       <h2 style="margin-left: 30px;">Dinas Pariwisata Pemerintah Provinsi Lampung Tahun 2018 / 2019</h2>
       </marquee>
       </div> 
  <div class="garis">
  <div class=head>
    Fitur ini menyediakan informasi kepada wisatawan tentang restoran yang ada di Bandar Lampung
  </div>
  </div>
  

  <div class="row">
  <br>
    <div class="col-8 " >
      <div class="judul">
        <p><h3>Bebek Belvr</h3></p> <br>
      </div>
      
      <p> 
            Bebek belur, begitulah kuliner ini disajikan oleh Rumah Makan (RM) Bebek Belur. Penganan berbahan dasar bebek pedaging ini, selintas tidak berbeda dengan penganan sejenisnya. Namun ketika dinikmati makanan ini memiliki ciri khas, terutama pada kelembutan daging dan citarasa gurih asin, serta aroma rempah yang menggoda selera.
            Juga tentunya bebek belur berbeda pada teknik pengolahan dan paduan rempah tradisional yang digunakannya. Pemilihan bahan baku bebek muda, menjadi yang terpenting dalam makanan berat ini.
            Sebelumnya, bahan baku diolah melalui proses ungkep selama empat jam. Proses selanjutnya tergantung pada permintaan konsumennya, karena menu ini dapat diolah dengan cara digoreng langsung atau dibakar.
      </p> <br><br>
      <div class="row">
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/money.png" alt="uang" height="50x" width="50px";>  
          <br><br>
          15.000 - 30.000
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/halfstar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";> 
          <br><img src="<?=base_url()?>assets/img/resto/none.png"  height="50px" width="50px";>  
          <br>
          8.7 / 10
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/mytime.png" alt="waktu" height="50x" width="50px";>    
          <br><br>
          09.00 - 23.00
        </div>
      </div>
    </div>
    <div class="col ">
    <br>
      <div class="card" >
      <img src="<?=base_url()?>assets/img/resto/bebekbelvr.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" ;>
        <div class="card-body">
        <h4 class="card-title" >Bebek Belvr</h4>
        <p class="card-text" >bebek belur berbeda pada teknik pengolahan dan paduan rempah tradisional yang digunakannya</p>
        <a href=https://www.facebook.com/pages/Bebek-Belur-Pahoman-Lampung/159857747924182 target="_top" class="btn btn-primary" >go website</a>
        </div>
      </div>
      <br>
    </div><br>
  </div>

  <hr class="featurette-divider">


  <div class="row">
    <div class="col ">
    <div class="card" >
      <img src="<?=base_url()?>assets/img/resto/rumahkayu.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" ;>
        <div class="card-body">
        <h4 class="card-title" >Taman Santap Rumah Kayu</h4>
        <p class="card-text" > restoran yang menawarkan konsep asri dan hijau dimana terdapat taman dan saung lesehan apung yang dikelilingi kolam ikan.</p>
        <a href=https://www.tripadvisor.com/Restaurant_Review-g297722-d6750646-Reviews-Taman_Santap_Rumah_Kayu-Bandar_Lampung_Lampung_Sumatra.html target="_top" class="btn btn-primary" >go website</a>
        </div>
      </div>
      <br>
    </div>
    <div class="col-8 " >
      <div class="judul">
        <p><h3>Taman Santap Rumah Kayu</h3></p>
      </div>
    
      <p> <br>
             restoran yang menawarkan konsep asri dan hijau dimana terdapat taman dan saung lesehan apung yang dikelilingi kolam ikan sehingga menjadi tempat yang cocok untuk makan keluarga dan menjamu rekan bisnis dimana anda dapat menyantap hidangan khas nusantara yang lezat sambil bersantai. Restoran ini menawarkan makanan laut (seafood) dengan menu spesial Kepiting Jumbo Jantan dan ayam bakar spesial. Semua bahan makanan dan bumbu memang diolah dari bahan segar dan didatangkan langsung dari seluruh Indonesia sehingga selalu lezat dan segar. Harga ditawarkan bervariasi tergantung menu dan paket makanan yang anda pilih, mulai dari Rp.8 ribu sampai Rp.250 ribu dengan jam buka mulai 10 siang sampai 10 malam.
      </p><br><br>
      <div class="row">
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/money.png" alt="uang" height="50x" width="50px";>
          <br><br>
          8.000 - 250.000
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/halfstar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";>  
          <br><img src="<?=base_url()?>assets/img/resto/none.png"  height="50px" width="50px";>  
          <br>
          9.0 / 10
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/mytime.png" alt="waktu" height="50x" width="50px";>
          <br><br>
          10.00 - 22.00
        </div>
      </div>
    </div><br>
  </div>

  <hr class="featurette-divider">


  <div class="row">
    <div class="col-8 " >
      <div class="judul">
        <p><h3>Bakso Haji Soni</h3></p>
      </div>
      
      <p> <br>
      jika anda kebetulan berkunjung dan sedang berada di Lampung, cobalah untuk mencicipi Bakso Son Haji Sony. Di Lampung, khususnya di Bandar Lampung, bakso yang lebih dikenal dengan brand Bakso Sony termasuk bakso legendaris. Pasalnya hampir mayoritas warga Bandar Lampung jelas pernah merasakan kelezatan Bakso Sony. 
      </p><br><br>
      <div class="row">
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/money.png" alt="uang" height="50x" width="50px";>
          <br><br>
          15.000 - 25.000
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/halfstar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";>  
          <br><img src="<?=base_url()?>assets/img/resto/none.png"  height="50px" width="50px";>  
          <br>
          8.5 / 10
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/mytime.png" alt="waktu" height="50x" width="50px";>
          <br><br>
          10.00 - 22.00
        </div>
      </div>
    </div>
    <div class="col ">
      <div class="card" >
      <img src="<?=base_url()?>assets/img/resto/soni.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" ;>
        <div class="card-body">
        <h4 class="card-title" >Bakso Haji Soni</h4>
        <p class="card-text" >Bakso Sony begitu gurih bumbu tradisional, rasa bawang putih begitu terasa saat dikunyah</p>
        <a href=https://instagram.com/bakso_sony_lampung_?utm_source=ig_profile_share&igshid=ep4atujwvale target="_top" class="btn btn-primary" >go website</a>
        </div>
      </div>
      <br>
    </div><br>
  </div>

<hr class="featurette-divider">


  <div class="row">
    <div class="col ">
    <div class="card" style="width:350px">
      <img src="<?=base_url()?>assets/img/resto/saung.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" ;>
        <div class="card-body">
        <h4 class="card-title" style="text-align:center;">Rumah Makan Saung Desa</h4>
        <p class="card-text" style="text-align:center;">restoran sunda yang menawarkan aneka masakan sunda, seafood dan bebek dengan harga terjangkau dan tempat yang nyaman dengan suasana alam</p>
        <a href=https://www.tripadvisor.com/Restaurant_Review-g297722-d9743721-Reviews-Saung_Desa-Bandar_Lampung_Lampung_Sumatra.html target="_top" class="btn btn-primary" >go website</a>
        </div>
      </div>
      <br>
    </div>
    <div class="col-8 " >
      <div class="judul">
        <p><h3>Rumah Makan Saung Desa</h3></p>
      </div>
    
      <p> <br>
      restoran sunda yang menawarkan aneka masakan sunda, seafood dan bebek dengan harga terjangkau dan tempat yang nyaman dengan suasana alam sehingga anda dapat menikmati makanan sambil sedikit bersantai dan mengobrol dengan teman atau keluarga. Menu andalan restoran in adalah sop gurame, gurame saos dan aneka ikan bakar yang terbuat dari bahan dasar yang segar dan bumbu alami sehingga citra rasanya memang sangat lezat.
      </p> <br><br>
      <div class="row">
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/money.png" alt="uang" height="50x" width="50px";>
          <br><br>
          20.000 - 300.000
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/halfstar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";>  
          <br><img src="<?=base_url()?>assets/img/resto/none.png"  height="50px" width="50px";>  
          <br>
          8.7 / 10
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/souveniers/mytime.png" alt="waktu" height="50x" width="50px";>
          <br><br>
          10.00 - 23.00
        </div>
      </div>
    </div><br>
  </div>


<hr class="featurette-divider">

<div class="row">
    <div class="col-8 "  >
      <div class="judul">
        <p><h3> Kampoeng Bamboe Restoran dan Homestay </h3></p>
      </div>
      
      <p> <br>
      Kampoeng Bamboe memiliki suasana asri dengan berbagai fasilitas yang Anda butuhkan, dengan paket yang disesuaikan dengan kebutuhan Anda. Kampoeng Bamboe menjadi tempat yang sempurna untuk Anda mengisi waktu Anda dengan keluarga, kerabat, hingga untuk berbagai acara (Meeting, Wedding, Ulang Tahun, dan lain sebagainya)
      </p> <br><br>
      <div class="row">
        <div class="col-sm-4" >
         <img src="<?=base_url()?>assets/img/resto/mytime.png" alt="waktu" height="50x" width="50px";>
          <br><br>
          20.000 - 300.000
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/star.png" alt="bintang" height="25px" width="25px";> 
          <img src="<?=base_url()?>assets/img/resto/halfstar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";>  
          <br><img src="<?=base_url()?>assets/img/resto/none.png"  height="50px" width="50px";>  
          <br>
          9.0 / 10
        </div>
        <div class="col-sm-4" >
          <img src="<?=base_url()?>assets/img/resto/mytime.png" alt="waktu" height="50x" width="50px";>
          <br><br>
          10.00 - 23.00
        </div>
      </div>
    </div>
    <div class="col ">
      <div class="card" >
      <img src="<?=base_url()?>assets/img/resto/bambu.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" ;>
        <div class="card-body">
        <h4 class="card-title" >Kampoeng Bamboe Restoran dan Homestay</h4>
        <p class="card-text" >Kampoeng Bamboe adalah Restoran suasana alam yang hijau nan asri, dengan masakan khas Indonesia yang sangat lezat, dengan harga yang begitu bersahabat bagi Anda dan keluarga</p>
        <a href=http://www.iyenfoods.com/sambal-lampung-yenyen-iyen target="_top" class="btn btn-primary" >go website</a>
        </div>
      </div>
      <br>
    </div><br>
  </div>

  <hr class="featurette-divider">


</body>
</html>

</body>
</html>
