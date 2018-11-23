<body>

<div class ='container'>
<br>
<h2><?php echo $artikel->judul ?></h2>
    <div class="row">
        <div class="col-9 " >
            <div class="judul">
            <br>
            <img src="<?=base_url('assets/upload/gambar/'.$artikel->gambar)?>" class="img img-responsive" height="410px" width="820px";>
            </div>
            <div class="isi">

							<?php echo $artikel->isi ?>

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
