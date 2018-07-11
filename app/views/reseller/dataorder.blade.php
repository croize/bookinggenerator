@extends('layouts.utama')

@section('title')
  Data Order
@endsection

@section('contentheader')
<h1>
  List Order
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/reseller/order"><i class="fa fa-home"></i>Data Order</a></li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Order Reseller</h3><br>
        <a href="/reseller/order" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Customer</th>
            <th>Barang</th>
            <th>Jumlah Barang</th>
          </tr>
          </thead>
          <tbody>
            @foreach($order as $c)
              <tr>
                <td>{{$c->nama}}</td>
                <td>{{$c->barang['nama_barang']}}</td>
                <td>{{$c->jumlah_barang}}</td>
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
