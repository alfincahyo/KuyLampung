<!DOCTYPE html>
<html lang="en">
<head>
  <title>Location</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 60%;
  }
.container .btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #555;
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container .btn:hover {
    background-color: #f47142;
}

.btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
}

.btn:hover {opacity: 1}  

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

       <br><br><br>
<div class="container">      
<div class="col-12">
<div id="demo" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url()?>assets/img/lamsel/batugranit.jpg" alt="Los Angeles" width="1100" height="500">
      <a href="<?php echo site_url('location/lamsel'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">
        <h3>Batu Granit Tanjung Bintang</h3>
        <p>Kabupaten Lampung Selatan</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/lamsel/embe.jpg" alt="Chicago" width="1100" height="500">
      <a href="<?php echo site_url('location/lamsel'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">
        <h3>Pantai Embe</h3>
        <p>Kabupaten Lampung Selatan</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/lamsel/siger.jpeg" alt="New York" width="1100" height="500">
      <a href="<?php echo site_url('location/lamsel'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">
        <h3>Menara Siger</h3>
        <p>Kabupaten Lampung Selatan</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

   <div class="row">
      <div class="col-3">
      <img style="margin-left: 50%; border:none;" src="<?=base_url()?>assets/img/caropagebaru/logolamsel.png" class="img-thumbnail" alt="Bandar Lampung" height="100" width="100";>
    </div>
    <div class="col-9">
      <br>
      <p>Dinas Kebudayaan dan Pariwisata Kabupaten Lampung Selatan</p>
       <p>Jl. Kusuma Bangsa</p>

    </div>
    </div>
  </div>
</div>
</div>

          <div class="container"> 
          <div class="col-12">
<div id="demo1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url()?>assets/img/balam/bukit3.jpg" alt="Los Angeles" width="1100" height="500">
      <a href="<?php echo site_url('location/balam'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">
        <h3>Bukit Sakura</h3>
        <p>Kota Bandar Lampung</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/balam/lembah1.jpg" alt="Chicago" width="1100" height="500">
      <a href="<?php echo site_url('location/balam'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">
        <h3>Lembah Hijau</h3>
        <p>Kota Bandar Lampung</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/balam/museum1.jpg" alt="New York" width="1100" height="500">
      <a href="<?php echo site_url('location/balam'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">
        <h3>Museum Lampung</h3>
        <p>Kota Bandar Lampung</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

   <div class="row">
      <div class="col-3">
      <img style="margin-left: 50%; margin-top: 10%; border:none;" src="<?=base_url()?>assets/img/caropagebaru/logobdl.png" class="img-thumbnail" alt="Bandar Lampung" height="100" width="100";>
    </div>
    <div class="col-9">
      <br>
       <p>Dinas Kebudayaan dan Pariwisata Kota Bandar Lampung</p>
     <p>Jl. Wolter Monginsidi No.120</p>
     <p>Telp : (0721) 475290</p>

    </div>
    </div>
  </div>
</div>
</div>


   <div class="container"> 
          <div class="col-12">
<div id="demo2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url()?>assets/img/lambar/angin1.jpg" alt="Los Angeles" width="1100" height="500">
      <a href="<?php echo site_url('location/lambar'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">


        <h3>Bukit Mandiangin</h3>
        <p>Kabupaten Lampung Barat</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/lambar/baris3.jpg" alt="Chicago" width="1100" height="500">
      <a href="<?php echo site_url('location/lambar'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">
        <h3>Taman Nasional Bukit Barisan</h3>
        <p>Kabupaten Lampung Barat</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/lambar/danauranaux2.jpg" alt="New York" width="1100" height="500">
      <a href="<?php echo site_url('location/lambar'); ?>"button class="btn">Pilih</a></button>
      <div class="carousel-caption">
        <h3>Danau Ranau</h3>
        <p>Kabupaten Lampung Barat</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

   <div class="row">
      <div class="col-3">
      <img style="margin-left: 50%;margin-top: 20%; border:none;" src="<?=base_url()?>assets/img/pagebaru/logolambar.png" class="img-thumbnail" alt="Bandar Lampung" height="100" width="100";>
    </div>
    <div class="col-9">
      <br>
     <p>Dinas Kebudayaan dan Pariwisata Kabupaten Lampung Barat</p>
     <p>Komplek Perkantoran Pemda Way Mengaku </p>
     <p> Jl. Teratai No.3, Liwa, Way Mengaku, Lampung Barat, Kabupaten Lampung Barat, Lampung 34811</p>
     <p>Telp : (0728) 21248</p> 

    </div>
    </div>
  </div>
</div>
</div>





        
</body>
</html>
