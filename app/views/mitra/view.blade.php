@extends('layouts.utama')

@section('content')
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-globe"></i> Beautysky
      </h2>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>Beautysky - Yogyakarta.</strong><br>
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      To
      <address>
        <strong>{{$data->nama}}</strong><br>
        {{$data->alamat}}<br>
        Phone: {{$data->no_hp}}<br>
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <b>No Resi #{{$data->resi}}</b><br>
      <br>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>Qty</th>
          <th>Invoice</th>
          <th>Product</th>
          <th>Subtotal</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>{{$data->jumlah_barang}}</td>
          <td>@if($data->invoice_code <= 9) 00{{$data->invoice_code}} @elseif($data->invoice_code <= 99) 0{{$data->invoice_code}} @elseif($data->invoice_code <= 999) {{$data->invoice_code}} @endif</td>
          <td>{{$data->barang['nama_barang']}}</td>
          <td>Rp. {{$data->hargatotal}}</td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    <div class="col-xs-6">

      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
        Detail pembayaran ini dapat disimpan dengan cara print detail pembayaran ini untuk dijadikan arsip pembelian.
      </p>
    </div>
    <!-- /.col -->
    <div class="col-xs-6">

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>Ongkir:</th>
            <td>Rp. {{$data->ongkir}}</td>
          </tr>
          <tr>
            <th>Total:</th>
            <td>Rp. {{$data->hargatotal}}</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href="/mitra/print/{{$data->invoice_code}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
    </div>
  </div>
</section>
@endsection
