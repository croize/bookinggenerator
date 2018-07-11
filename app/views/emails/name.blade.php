<div>
     <br>
    Nama : <br>
    nama_barang : {{$nama_barang}}<br>
    resi : {{$resi}}<br>
    kecamatan : {{$kecamatan}}<br>
    kabupaten : {{$kabupaten}}<br>
    hargatotal : {{$hargatotal}}<br>
    jumlah : {{$jumlah}}<br>
    kode_pos : {{$kode_pos}}<br>
    alamat : {{$alamat}}<br>
    no_hp : {{$no_hp}}<br>
</div>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Invoice Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="{{url('assetemail/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assetemail/font-awesome/css/font-awesome.min.css')}}" />

    <script type="text/javascript" src="{{url('assetemail/js/jquery-1.10.2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assetemail/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Laporan Pengiriman</h1>
</div>

<!-- Simple Invoice - START -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <i class="fa fa-search-plus pull-left icon"></i>
                <h2>Invoice for purchase #@if($invoice_code <= 9) 00{{$invoice_code}} @elseif($invoice_code <= 99) 0{{$invoice_code}} @elseif($invoice_code <= 999) {{$invoice_code}} @endif</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-12">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Detail Pengiriman </div>
                        <div class="panel-body">
                            <strong>Nama :</strong><br>
                            {{$name}}<br>
                            <strong>Nomor WA :</strong><br>
                            {{$no_hp}}<br>
                            <strong>Alamat :</strong><br>
                            {{$alamat}},Kec. {{$kecamatan}},Kab/Kota.{{$kabupaten}},Provinsi.{{$provinsi}},Kode Pos.{{$kode_pos}}<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Pembayaran</div>
                        <div class="panel-body">
                            <strong>Jumlah Pembayaran:</strong> {{$hargatotal}}<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Detail Pengiriman</div>
                        <div class="panel-body">
                            <strong>Resi :</strong> {{$resi}}<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$nama_barang}}</td>
                                    <td class="text-center">{{$harga}}</td>
                                    <td class="text-center">{{$jumlah}}</td>
                                    <td class="text-right">{{$hargatotal}}</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right">{{$hargatotal}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>

<!-- Simple Invoice - END -->

</div>

</body>
</html>
