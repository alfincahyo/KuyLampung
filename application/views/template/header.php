<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="<?=base_url()?>assets/css/header.css" rel="stylesheet" type="text/css">
</head> 
<body>
    <header style="background-image: url('<?=base_url()?>assets/img/krakatau.jpg');s">
    
    <ul>
        <li><a href="<?php echo site_url('home/beranda'); ?>">Home</a></li>
        <li><a href="<?php echo site_url('home/location'); ?>"">Location</a></li>
        <li><a href="<?php echo site_url('home/culinar'); ?>">Culinary</a></li>
        <li><a href="<?php echo site_url('home/souvenirs'); ?>">Souvenirs</a></li>
        <li style="float:right"><a href="<?php echo site_url('Login/index'); ?>">Login</a></li>
        <li style="float:right"><a href="<?php echo site_url('home/about_us'); ?>">About Us</a></li>
    </ul>
    
    <div class="hero-text">
    <h1>KUY LAMPUNG</h1>
    <div class="link">
    <a href="<?php echo site_url('home/location'); ?>" class="btn btn-one"> LOCATION </a>   
    <a href="<?php echo site_url('home/culinar'); ?>" class="btn btn-two"> CULINARY </a>
    <a href="<?php echo site_url('home/souvenirs'); ?>" class="btn btn-three"> SOUVENIRS </a>
    </div>
    </div>
    </header>


        
</body>    
</html>
