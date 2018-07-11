<!DOCTYPE html>
<html>
<head>
<title>Pembelian Beautysky Acne and whitening beautysky </title>
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
<br>

<br>
<div class="container">
    @if(Session::get('message') == NULL)
<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>
                                @else

<script type="text/javascript">
        alert("{{ Session::get('message') }}");
    </script>
                                @endif
    <br>
    <img class="img-responsive" src="{{ url('assetutama/images/wow.jpeg')}}" alt="" style="height: 300px;margin: 0 auto ;" >
</div>



    <div class="container" id="cntnr" style=";padding-bottom: 100px;">
        <div class="row">
<div class="col-xs-12" style="padding-top: 50px;">
                <center><h2>Form Pembelian</h2></center><br>
                <div class="form">
                    <form role="form" action="/pembelian/store/{{$mob}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Telepon</label>
                                <div class="input-group">
                                    <span class="input-group-addon primary">+62</span>
                                        <input name="no_hp" type="text" maxlength="15" class="form-control" placeholder="No Whatsapp" data-placement="bottom" data-toggle="tooltip" title="+62 tidak usah di tulis kembali contoh : 81220188813" required>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="nama">Nama Barang</label>
                                    <select class="form-control" name="barang_id">
                                      <option value="">Pilih barang</option>
                                      @foreach($data as $c)
                                      <option value="{{$c->id}}">{{$c->nama_barang}}</option>
                                      @endforeach
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="nama">Jenis Pembayaran</label>
                                    <select class="form-control" name="pembayaran">
                                      <option value="">Pilih pembayaran</option>
                                      <option value="BCA">BCA</option>
                                      <option value="BNI">BNI</option>
                                      <option value="MS">Mandiri Syariah</option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="nama">Jumlah Barang</label>
                                <input name="jumlah_barang" type="number" class="form-control" id="inputPassword4" placeholder="Jumlah Barang" required>
                                <input type="hidden" name="ongkir">
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-6" style="padding: 0;margin: 0;">
                        <div class="form-group">
                            <div class="col-sm-12">
                            <label for="exampleInputalamat">Alamat Lengkap</label>
                            <textarea name="alamat" class="form-control" name="exampleInputalamat" id="" cols="30" rows="4" required></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-6" style="padding: 0;margin: 0;">
                            <div class="form-group">
                                <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputalamat">Kecamatan</label>
                                        <input name="kecamatan" type="text" class="form-control" id="inputPassword4" placeholder="Kecamatan" required>
                                </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputalamat">Kabupaten / kota</label>
                                        <input name="kabupaten" type="text" class="form-control" id="inputPassword4" placeholder="Kabupaten / kota" required>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputalamat">Provinsi</label>
                                    <input name="provinsi" type="text" class="form-control" id="inputPassword4" placeholder="Provinsi" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputalamat">Kode Pos</label>
                                        <input name="kode_pos" type="number" class="form-control" id="inputPassword4" placeholder="Kode Pos" required>
                                    </div>
                                    <br>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <div class="form-row">

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="container" >
                                <center>
                                      <button type="submit" class="btn btn-success btn-block"><span style="color:white;" class="glyphicon glyphicon-shopping-cart"></span>  Beli Sekarang</button>
                                </center>
                            </div>
                        </div>
                    </form>
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
					<form>
						<input type="submit" value="SUBSCRIBE">
					</form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

<script>
        $(function () {

            $('#txtnumber').keydown(function (e) {
                var key = e.charCode || e.keyCode || 0;
                $text = $(this);
                if (key !== 8 && key !== 9) {
                    if ($text.val().length === 3) {
                        $text.val($text.val() + '-');
                    }
                    if ($text.val().length === 8) {
                        $text.val($text.val() + '-');
                    }
                }
                return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
            })

        });
    </script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
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
