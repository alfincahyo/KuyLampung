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


            </div>
            <div class="row">
				<div class="col-sm-4" style="text-align:center;">
					<img src="http://localhost/kuylampung/assets/img/balam/money.png" alt="uang" height="50x" width="50px";>
					<br><br>
					80.000 - 120.000
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="http://localhost/kuylampung/assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>
					<img src="http://localhost/kuylampung/assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>
					<img src="http://localhost/kuylampung/assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>
					<img src="http://localhost/kuylampung/assets/img/balam/star.png" alt="bintang" height="25px" width="25px";>
					<img src="http://localhost/kuylampung/assets/img/balam/emptystar.png" alt="bintang setengah" height="25px" width="25px"  margin-bottom = "20px";>
					<br><img src="http://localhost/kuylampung/assets/img/balam/none.png"  height="50px" width="50px";>
					<br>
					7.5 / 10
				</div>
				<div class="col-sm-4" style="text-align:center;">
					<img src="http://localhost/kuylampung/assets/img/balam/mytime.png" alt="waktu" height="50x" width="50px";>
					<br><br>
					Setiap Hari <br> 07.00 - 20.00
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
                            <li><a href="http://localhost/kuylampung/balam/balam"">Pantai Mutun<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam2"">Puncak Mas<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam3"">Taman kupu-kupu<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam4"">Museum Lampung<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam5"">Horti Park<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam6"">Bukit Sakura<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam7"">Lembah Hijau<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam8"">Alam Wawai<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam9"">Hutan Pinus (Zona 235)<br></a></li><br>
                            <li><a href="http://localhost/kuylampung/balam/balam10"">Penangkaran Rusa<br></a></li><br>
                        </ul>
                </div>

        </div>
		<br>
        </div>
    </div>

</div>
</body>
