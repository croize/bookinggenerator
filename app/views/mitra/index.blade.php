@extends('layouts.utama')

@section('contentheader')
<h1>
  Pembelian
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/mitra/datapembelian/"><i class="fa fa-home"></i> Pembelian</a></li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    @if(Session::get('message') != NULL)
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Alert!</h4>
      {{ Session::get('message') }}
    </div>
    @elseif(Session::get('error') != NULL)
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
      {{ Session::get('error') }}
    </div>
    @endif
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Pembelian</h3><br>
        <a href="/mitra/datapembelian/create" class="btn btn-primary">Create</a>
        <a href="/mitra/datapembelian" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Invoice Code</th>
              <th>Nama Konsumen</th>
              <th>Nama Barang</th>
              <th>Jumlah Barang</th>
              <th>Harga Akhir</th>
              <th>No. Resi</th>
              <th>Status Pembayaran</th>
              <th>Status Pengiriman</th>
              <th>Action</th>
            </tr>
            @foreach($data as $d)
              @foreach($d->pembelian as $c)
                <tr>
                <td>@if($c->invoice_code <= 9) 00{{$c->invoice_code}} @elseif($c->invoice_code <= 99) 0{{$c->invoice_code}} @elseif($c->invoice_code <= 999) {{$c->invoice_code}} @endif</td>
                <td>{{$c->nama}}</td>
                <td>{{$c->barang['nama_barang']}}</td>
                <td>{{$c->jumlah_barang}}</td>
                <td>Rp. {{$c->hargatotal}}</td>
                <td>@if($c->resi == NULL) <form class="" action="/mitra/resi/{{$c->invoice_code}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="put">
                    <input type="text" name="resi" value="">
                    <input type="submit" class="btn btn-primary btn-flat" name="" value="Submit">
                </form> @elseif($c->resi != NULL) {{$c->resi}} @endif</td>
                <td> @if($c->status == "0")
                  <span class="label label-warning">Pending</span>
                  @elseif($c->status == "1")
                  <span class="label label-success">Lunas</span>
                  @endif</td>
                <td> @if($c->status_pengiriman == "0")
                    <span class="label label-warning">Pending</span>
                    @elseif($c->status_pengiriman == "1")
                    <span class="label label-success">Tuntas</span>
                    @endif</td>
                <td> <a href="/mitra/datapembelian/{{$c->invoice_code}}" class="btn btn-primary"> <i class="fa fa-eye"></i> </a> <a href="pengiriman"
                    onclick="event.preventDefault();
                             document.getElementById('pengiriman{{$c->invoice_code}}').submit();" class="btn btn-success">
                    <i class="fa fa-truck"></i>
                </a>

                <form id="pengiriman{{$c->invoice_code}}" action="/mitra/datapembelian/{{$c->invoice_code}}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="status_pengiriman" value="1">
                    <input type="hidden" name="nama" value="{{$c->nama}}">
                    <input type="hidden" name="jumlah" value="{{$c->jumlah_barang}}">
                    <input type="hidden" name="nama_barang" value="{{$c->barang['nama_barang']}}">
                    <input type="hidden" name="invoice_code" value="{{$c->invoice_code}}">
                    <input type="hidden" name="alamat" value="{{$c->alamat}}">
                    <input type="hidden" name="kecamatan" value="{{$c->kecamatan}}">
                    <input type="hidden" name="kabupaten" value="{{$c->kabupaten}}">
                    <input type="hidden" name="resipengiriman" value="{{$c->resi}}">
                    <input type="hidden" name="kode_pos" value="{{$c->kode_pos}}">
                    <input type="hidden" name="no_hp" value="{{$c->no_hp}}">
                    <input type="hidden" name="hargatotal" value="{{$c->hargatotal}}">
                    <input type="hidden" name="provinsi" value="{{$c->provinsi}}">
                    <input type="hidden" name="harga" value="{{$c->barang['harga']}}">
                </form></td>
              </tr>
              @endforeach
            @endforeach
          </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection
