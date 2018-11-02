<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/formkomentar.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
    <br><br>
        <form id="formkomentar" action="<?php echo base_url('index.php/crud/simpan'); ?>" method="POST">
        	<input type="text" name="email" placeholder="Email Anda"><br><br>
            <input type="text" name="nama" placeholder="Nama Anda"><br><br>
            <textarea name="komentar" cols="50" rows="2" placeholder="Masukkan Komentar"></textarea><br><br>
            <input type="submit" value="Komentar">

            
        </form>
        <br>
	</div>
</body>
</html>	

