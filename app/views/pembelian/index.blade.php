@extends('layouts.utama')

@section('css')
  <link rel="stylesheet" href="{{url('assetdashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('title')
  Data Pembelian
@endsection

@section('contentheader')
<h1>
  Pembelian
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/admin/pembelian"><i class="fa fa-home"></i> Pembelian</a></li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data pembelian</h3><br>
        <a href="/admin/pembelian/create" class="btn btn-primary">Create</a>
        <a href="/admin/pembelian" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Invoice Code</th>
                <th>Nama Konsumen</th>
                <th>MobsterID Reseller</th>
                <th>No Whatsapp</th>
                <th>Pembayaran</th>
                <th>No Resi</th>
                <th>Harga Akhir</th>
                <th>Status Pembayaran</th>
                <th>Status Pengiriman</th>
                <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach($data as $c)
              <tr>
                <td>{{$c->invoice_code}}</td>
                <td>{{$c->nama}}</td>
                <td>{{$c->mobsterid}}</td>
                <td>{{$c->no_hp}}</td>
                <td>@if($c->pembayaran == "BCA") BCA @elseif($c->pembayaran == "BNI") BNI @elseif($c->pembayaran == "MS") Mandiri Syariah @endif</td>
                <td>{{$c->resi}}</td>
                <td>Rp. {{$c->hargatotal}}</td>
                <td> @if($c->status == "0")
                  <span class="label label-warning">Pending</span>
                  @elseif($c->status == "1")
                  <span class="label label-success">Lunas</span>
                  @endif</td>
                <td> @if($c->status_pengiriman == "0")
                    <span class="label label-warning">Pending</span>
                    @elseif($c->status_pengiriman == "1")
                    <span class="label label-success">Lunas</span>
                    @endif</td>
                    <td>
                      <a href="/admin/pembelian/{{$c->invoice_code}}/edit" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a>
                      <a href="{{url('admin/pembelian/delete',$c->invoice_code)}}" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                      <a href="https://api.whatsapp.com/send?phone={{$c->no_hp}}&text=Detail pembayaran anda :%0D%0A%0D%0AInvoice code : {{$c->invoice_code}}%0D%0ANama: {{$c->nama}}%0D%0AAlamat: {{$c->alamat}},Kec.{{$c->kecamatan}},Kab.{{$c->kabupaten}},Prov.{{$c->provinsi}},Kode Pos.{{$c->kode_pos}},%0D%0ABarang : {{$c->barang['nama_barang']}}%0D%0AJumlah barang : {{$c->jumlah_barang}}%0D%0AJumlah yang harus dibayar : Rp {{$c->hargatotal}}%0D%0A%0D%0AHarap segera bayar sesuai dengan jumlah yang harus dibayar.%0D%0A%0D%0ABCA 4383140377%0D%0ABMS 7140319777%0D%0ABNI 1403197707%0D%0AA.N Mohamad Ali Guntur%0D%0A%0D%0ASilahkan balas pesan ini untuk melakukan konfirmasi pembayaran dengan cara ketik /konfirmasi dan sertakan bukti transfer.%0D%0A%0D%0ANote : *gambar bukti transfer jangan diberi caption.*" class="btn btn-success" target="_blank"> <i class="fa fa-whatsapp"></i></a>
                      <a href="https://api.whatsapp.com/send?phone={{$c->no_hp}}&text=Pesanan A.N {{$c->nama}} dengan nomor invoice @if($c->invoice_code <= 9) 00{{$c->invoice_code}} @elseif($c->invoice_code <= 99) 0{{$c->invoice_code}} @elseif($c->invoice_code <= 999) {{$c->invoice_code}} @endif sudah kami proses%0D%0APesanan Anda akan segera kami kirimkan. Terima kasih.." class="btn btn-primary" target="_blank"><i class="fa fa-whatsapp"></i> </a>
                      @if($c->resi != NULL)
                      <a href="https://api.whatsapp.com/send?phone={{$c->no_hp}}&text=Pesanan anda sedang dikirimkan hari ini%0D%0A Jasa pengiriman : *JNE*%0D%0ANomor Resi : *{{$c->resi}}*%0D%0ASilahkan Pantau Pengiriman Paket Anda Disini : %0D%0Ahttps://www.parcelmonitor.com/id-cek-resi-jne/%0D%0A%0D%0AJika barang sudah sampai silahkan ketik /diterima.%0D%0AJangan lupa kasih testimoni ya kak :)%0D%0A%0D%0AUntuk informasi lebih lanjut, silahkan hubungi kami di nomor ini. (Hanya menerima WA)" target="_blank" class="btn btn-primary"><i class="fa fa-truck" style="font-size:11px;"></i></a>
                      @endif
                      @if($c->status == "0")
                      <a href="" onclick="event.preventDefault();document.getElementById('bayar{{$c->invoice_code}}').submit();" class="btn btn-success"><i class="fa fa-money" style="font-size:11px;"></i></a>

                    <form id="bayar{{$c->invoice_code}}" action="/admin/pembelian/pembayaran/{{$c->invoice_code}}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="barang_id" value="{{$c->barang_id}}">
                        <input type="hidden" name="mobsterid" value="{{$c->mobsterid}}">
                        <input type="hidden" name="invoice_code" value="{{$c->invoice_code}}">
                        <input type="hidden" name="kecamatan" value="{{$c->kecamatan}}">
                        <input type="hidden" name="kabupaten" value="{{$c->kabupaten}}">
                        <input type="hidden" name="hargatotal" value="{{$c->hargatotal}}">
                        <input type="hidden" name="jumlah" value="{{$c->jumlah_barang}}">
                        <input type="hidden" name="kode_pos" value="{{$c->kode_pos}}">
                        <input type="hidden" name="no_hp" value="{{$c->no_hp}}">
                        <input type="hidden" name="provinsi" value="{{$c->provinsi}}">
                        <input type="hidden" name="name" value="{{$c->user['name']}}">
                        <input type="hidden" name="nama_barang" value="{{$c->barang['nama_barang']}}">
                        <input type="hidden" name="alamat" value="{{$c->alamat}}">
                        <input type="hidden" name="_method" value="put">
                    </form>
                    @endif
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection

@section('js')
<script src="{{url('assetdashboard/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assetdashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print','pdf'
        ]
    } );
} );
</script>
@endsection
