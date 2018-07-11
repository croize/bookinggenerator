<!DOCTYPE html>
<html>
<head>
<title>Promo Lebaran Paket Beautysky Acne and whitening beautysky </title>
<link rel="icon" href="images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="{{ url('assetutama/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('assetutama/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

<!--//Custom Theme files -->
<!--js-->
<script src="{{ url('assetutama/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ url('assetutama/js/modernizr.custom.js')}}"></script>
<!--//js-->
<!--cart-->

<!--cart-->
<!--web-fonts-->
<!--web-fonts-->
<!--animation-effect-->
<link href="{{ url('assetutama/css/animate.min.css')}}" rel="stylesheet">
<script src="{{ url('assetutama/js/wow.min.js')}}"></script>
	<script>
	 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->

<script type="text/javascript" src="{{ url('assetutama/js/easing.js')}}"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<style>
*{
	color: black;
}
	#coret{
		text-decoration:line-through;
		background-color: black;padding: 0px  20px
	}
	#blck{
		color: black;
	}
	.bordergaris
{
	border-style: dotted;
    padding:20px;
}
</style>
<body>



	<!--header-->

	<!--//header-->
	<!--banner-->

<!-- ===================================================== CONTENT 1  =====================================================-->

	<div class="container" style="padding-top: 20px;">
		<div class="bordergaris" style="text-align: center;">
			<h4> Penawaran Terbatas khusus HARI INI </h4><br>
<?php

// function untuk menampilkan nama hari ini dalam bahasa indonesia
// di buat oleh malasngoding.com

function hari_ini(){
	$hari = date ("D");

	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;

		case 'Mon':
			$hari_ini = "Senin";
		break;

		case 'Tue':
			$hari_ini = "Selasa";
		break;

		case 'Wed':
			$hari_ini = "Rabu";
		break;

		case 'Thu':
			$hari_ini = "Kamis";
		break;

		case 'Fri':
			$hari_ini = "Jumat";
		break;

		case 'Sat':
			$hari_ini = "Sabtu";
		break;

		default:
			$hari_ini = "Tidak di ketahui";
		break;
	}

	return "<b>" . $hari_ini . "</b>";

}

echo " ". hari_ini();

?>

<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo " <b>".date("d M Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
?>
<br>

			penawaran ini berlaku untuk Hari ini saja , dapatkan penawaran ini hanaya dengan harga Rp. 299,000 saja . apabila dalam tempo waktu 1 x 24 jam , anda tidak mengambil kesempatan ini , maka kami akan menarik kembali promo spesial ini dan memberikan harga NORMAL senilai Rp. 500,000 kepada Anda.

		</div>
<br>
		<div class="cptn">
			<center>
				<div class="alert alert-danger" role="alert"><h3> Udah Mau Lebaran Muka masih Hitam ? Jerawatan ? Komedoan ? </h4></div>
				<div class="alert alert-info" role="alert">
					Gak usah khawatir lagi, Beautysky punya Paket Beautysky Acne Series yang bisa memutihkan , bikin cerah, dan membersihkan kulit wajah dari adanya komedo, jerawat dan Membasmi bekas – bekas jerawat seperti noda hitam.

				</div>
			</center>
		</div>


</div>
  <p class="bg-primary" style="font-family: arial;font-size: 20px;text-align: center;">TESTIMONI & GALERI</p><br>
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>

    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner">
      <div class="item active">
        <img src="{{ url('assetutama/images/artis/cowo.jpeg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{ url('assetutama/images/artis/ipan.jpeg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{ url('assetutama/images/artis/art (2).jpeg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{ url('assetutama/images/artis/art (3).jpeg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{ url('assetutama/images/testimoni/jerawat.jpeg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{ url('assetutama/images/testimoni/beautysky-paket-jerawat-murah-gratis (1).jpeg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{ url('assetutama/images/testimoni/beautysky-paket-jerawat-murah-gratis (3).jpeg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{ url('assetutama/images/produk/p.jpeg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{ url('assetutama/images/produk/p.jpg')}}" alt="Testimoni Beautysky" style="width:100%;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--=======END SLIDER====-->
<div class="bpm">
	<br>
  <p class="bg-primary" style="font-family: arial;font-size: 22px;text-align: center;">APAKAH SUDAH TERDAFTAR BPOM RESMI ?</p><br>
  <div class="container">
	<img src="{{ url('assetutama/images/bpom.jpg')}}" class="img-responsive">
	</div>
</div>

<!--=======END SLIDER====-->
<div class="wrq">
	<br>
  <p class="bg-primary" style="font-family: arial;font-size: 22px;text-align: center;">APA KEUNGGULAN PRODUK INI?</p><br>
  <div class="container">
	<img src="{{ url('assetutama/images/produk/kenapa.jpeg')}}" class="img-responsive" align="center" style="margin: 0 auto;">
	</div>
</div>






<!-- ===================================================== CONTEN 2  =====================================================-->



	<div class="banner">
		<div class="container">
			<div class="banner-text">
				<div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">


  <p class="bg-primary" style="font-family: arial;font-size: 22px;text-align: center;">PROMO LEBARAN</p><br>

<h4 id="coret">Rp 500.000</h4>
<p style="padding-bottom: 10px;font-size: 22px;">DISKON 40%:</p>

					<h3 style="padding: 0;margin: 0;font-size: 50px;background-color: red;padding: 0px  20px;margin-top: 10px;margin-top: 0px;">Rp. 299,000</h3>
					<h3 style="margin-bottom: 0px;">Free Ongkir *</h3><br>
					<i style="color: white;">*free ongkos kirim senilai Rp.30.000</i><br>
					<h4 style="" id="blck">Jangan Sampai Kehabisan !</h4><br>
					<div class="count main-row">
						<ul id="example">
							<li><span style="color: black;" class="days">00</span><p class="days_text">Hari</p></li>
							<li><span style="color: black;" class="hours">00</span><p class="hours_text">Hours</p></li>
							<li><span style="color: black;" class="minutes">00</span><p class="minutes_text">Minutes</p></li>
							<li><span style="color: black;" class="seconds">00</span><p class="seconds_text">Seconds</p></li>
						</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="{{ url('assetutama/js/jquery.countdown.min.js')}}"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '06/24/2018 9:40:00',/*bulan , tgl , tahun*/
									offset: -8,
									day: 'Day',
									days: 'Hari'
								});
							</script>
					</div>

				</div>
				<div class="col-sm-7  wow fadeInRight animated" data-wow-delay=".5s" style="color: white;font-size: 20px;">
					<div class="col-lg-12"  style="padding-bottom: 15px;padding-top: 0px;">
						<img class="img-responsive"  src="{{ url('assetutama/images/wow.jpeg')}}" alt="" id="myImg">
					</div>
						<div class="cscm" style="padding: 0px;margin: 0px;">
							<h3 style="font-family: arial;font-size: 1.3em;padding: ;margin: 0px;margin-bottom: 10px;">Paket
							Beautysky Acne Series</h3>
						</div>
					<div class="col-lg-12" style="padding: 0px 40px;">
						<ul type="square">
							<li>1 Acne day cream</li>
							<li>1 Acne night cream</li>
							<li>1 Acne toner </li>
							<li>1 Acne facial wash</li>
							<li>1 Acne cream </li>
						</ul>
<!-- Standard button -->
<div class="hvbtn">
<br>
<form action="">
<a href="" onclick=" window.open('/pembelian','_blank')">
	<img src="{{ url('assetutama/images/button.jpg')}}" alt="" class="img-responsive">
</a>
</form>
</div>

					</div>
</div>
<div class="col-lg-12" style="padding-top: 30px;">
	<hr>
	<div class="col-xs-4">
		<img src="{{ url('assetutama/images/bp.png')}}" alt="" class="img-responsive">
	</div>
	<div class="col-xs-8">
		<p style="font-size: 10px;">
		GARANSI 100% UANG KEMBALI APABILA BARANG YANG ANDA TERIMA TIDAK ASLI / ORIGINAL <br>
		MAKSIMAL 5 HARI SETELAH BARANG PESANAN ANDA SAMPAI
		<br>
		<i style="font-size: 7px;">*free ongkir dengan jumlah Rp.30,000 </i>
		</p>
	</div>
	<hr>
	<div class="container">
		<hr>
		<img src="{{ url('assetutama/images/bank.png')}}" class="img-responsive" alt="">
	</div>
	<hr>
	<img src="{{ url('assetutama/images/baja.png')}}" class="img-responsive" alt="" align="center">
</div>




					<!--FlexSlider-->
					<!--End-slider-script-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo" style="font-family: arial;"><a href="index.html" style="font-family: arial;">Mobster <b>Ads</b> <span class="tag">Everything for Kids world </span> </a></h4>
					<p>© 2018 Mobster Ads . All rights reserved | Design by <a href="http://mobster.id" target="_blank">Mobster id</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3 style="font-family: arial;">Popular</h3>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">new</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Wishlist</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3 style="font-family: arial;">Subscribe</h3>
					<p>Untuk Info dan Produk  <br> dan Penawaran Menarik lainya   </p>
					<br>
					<center>
					<form>
						<input type="submit" value="SUBSCRIBE">
					</form>
					</center>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<!--search jQuery-->

	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->

	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->



<div id="myModal" class="modal" style="    overflow: hidden;">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>


<script>
	// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>



    <script src="{{ url('assetutama/js/bootstrap.js')}}"></script>
</body>
</html>
