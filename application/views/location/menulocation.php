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

.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

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
    <div class="container"> 
      <div class="container-fluid">



    <div id="runningtext">
       <marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();"
       onmouseout="this.start();" direction="left">
       <img src="<?=base_url()?>assets/img/caropagebaru/kemenpar.png" class="img-thumbnail" alt="Bandar Lampung" height="250px" width="250px"style='background-color: #f2f3f4; border: none;'>
       <img src="<?=base_url()?>assets/img/caropagebaru/logopesona.png" class="img-thumbnail" alt="LogoWonderfull" height="200px" width="210px"style='background-color: #f2f3f4; border: none;'> 
       <img src="<?=base_url()?>assets/img/caropagebaru/wonderfullamp.png" class="img-thumbnail" alt="LogoWonderfull" height="100px" width="100px"style='background-color: #f2f3f4; border: none;'> 
       <img src="<?=base_url()?>assets/img/caropagebaru/logolampung.png" class="img-thumbnail" alt="Bandar Lampung" height="110px" width="110px"style='background-color: #f2f3f4; border: none;'>
       <img src="<?=base_url()?>assets/img/caropagebaru/logobdl.png" class="img-thumbnail" alt="Lamsel" height="100px" width="100px"style='background-color: #f2f3f4; border: none;'>
       <img src="<?=base_url()?>assets/img/caropagebaru/logolamsel.png" class="img-thumbnail" alt="Lambar" height="100px" width="100px"style='background-color: #f2f3f4; border: none;'> 
       <img src="<?=base_url()?>assets/img/caropagebaru/logolambar.png" class="img-thumbnail" alt="Lambar" height="200px" width="200px"style='background-color: #f2f3f4; border: none; margin-left: 0px;'> 
       
       <h2 style="margin-left: 30px;">Dinas Pariwisata Pemerintah Provinsi Lampung Tahun 2018 / 2019</h2>
       </marquee>
       </div> 

  <h1 style="color: black; border-color: black; margin-top: 25px; font-size: 45px; margin-left: 0px;">Pilih Lokasi Yang ingin anda Lihat</h1>
  <br><br>
  <h2>Terdapat 3 Wilayah Kabupaten dan Kota yang dapat anda lihat:</h2>
    

    <div class="container-fluid">
    
    <div class="row">
      <div class="col-sm-3">
      <img src="<?=base_url()?>assets/img/pagebaru/logobdl.png" class="img-thumbnail" alt="Bandar Lampung" height="410px" width="820px";>
     <h1> Bandar Lampung </h1>
     <p>Dinas Kebudayaan dan Pariwisata Kota Bandar Lampung</p>
     <p>Jl. Wolter Monginsidi No.120</p>
     <p>Telp : (0721) 475290</p>
      
      </div>
      <div class="col-sm-9" style="margin-top: 20px; margin-bottom: 40px;">
      <h2>Kota Bandar Lampung</h2>
      <p>Destinasi yang ada pada Kota Bandar Lampung, diantaranya:</p>
      <div class="row">
  <div class="column">
    <img src="<?=base_url()?>assets/img/caropagebaru/bdl/1bdl.jpg" alt="Snow" style="width:100%">

  </div>
  <div class="column">
    <img src="<?=base_url()?>assets/img/caropagebaru/bdl/2bdl.jpg" alt="Mountains" style="width:100%">
  </div>
  <div class="column">
    <img src="<?=base_url()?>assets/img/caropagebaru/bdl/3bdl.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
        <br><a href="<?php echo site_url('location/balam'); ?>" button class="button"><span>Pilih</span></a></button>
        
      </div>
    </div>
  </div> <br> <br> <br>
  <div class="row">
      <div class="col-sm-3">
      <img src="<?=base_url()?>assets/img/pagebaru/logolamsel.png" class="img-thumbnail" alt="Bandar Lampung" height="410px" width="820px";>
     <h1> Lampung Selatan</h1>
     <p>Dinas Kebudayaan dan Pariwisata Kabupaten Lampung Selatan</p>
     <p>Jl. Kusuma Bangsa</p>
     
    
      </div>
      <div class="col-sm-9" style="margin-top: 20px; margin-bottom: 40px";>
      <h2>Kabupaten Lampung Selatan</h2>
      <p>Destinasi yang ada pada Kabupaten Lampung Selatan, diantaranya:</p>

<div class="row">
  <div class="column">
    <img src="<?=base_url()?>assets/img/caropagebaru/lamsel/3.jpeg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="<?=base_url()?>assets/img/caropagebaru/lamsel/4.jpg" alt="Mountains" style="width:100%">
  </div>
  <div class="column">
    <img src="<?=base_url()?>assets/img/caropagebaru/lamsel/6.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
        <br><a href="<?php echo site_url('location/lamsel'); ?>"button class="button"><span>Pilih </span></a></button>
      </div>
    </div>
  </div> <br><br> <br>

    

    <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 ">
        <img src="<?=base_url()?>assets/img/pagebaru/logolambar.png" class="img-thumbnail" alt="Bandar Lampung" height="410px" width="820px";> 
        <h1> Lampung Barat </h1>
        <p>Dinas Kebudayaan dan Pariwisata Kabupaten Lampung Barat</p>
     <p>Komplek Perkantoran Pemda Way Mengaku </p>
     <p> Jl. Teratai No.3, Liwa, Way Mengaku, Lampung Barat, Kabupaten Lampung Barat, Lampung 34811</p>
     <p>Telp : (0728) 21248</p>
  
      </div>
      <div class="col-sm-9" style="margin-top: 20px; margin-bottom: 40px";>
      <h2>Kabupaten Lampung Barat</h2>
      <p>Destinasi yang ada pada Kabupaten Lampung Barat, diantaranya:</p>

      <div class="row">
          <div class="column">
           <img src="<?=base_url()?>assets/img/caropagebaru/Lambar/1.jpg" alt="Snow" style="width:100%">
          </div>
          <div class="column">
         <img src="<?=base_url()?>assets/img/caropagebaru/Lambar/2.jpg" alt="Mountains" style="width:100%">
        </div>
        <div class="column">
         <img src="<?=base_url()?>assets/img/caropagebaru/Lambar/8.jpg" alt="Mountains" style="width:100%">
        </div>
        </div>
        <br><a href="<?php echo site_url('location/lambar'); ?>"button class="button"><span>Pilih </span></a></button>
      </div>
    </div>
  </div> <br>

</div>

</body>
</html>
