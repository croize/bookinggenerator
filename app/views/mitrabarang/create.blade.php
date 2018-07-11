@extends('layouts.utama')

@section('contentheader')
<h1>
  Barang
</h1>
<ol class="breadcrumb">
  <li><a href="/mitra/barang"><i class="fa fa-home"></i> Home</a></li>
  <li class="active"><a href="/mitra/barang/create">Create</a></li>
</ol>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/mitra/barang" method="post" class="">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">
              <label for="">Nama Barang</label>
              <input type="text" name="nama_barang" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Harga</label>
              <input type="text" name="harga" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Diskon</label>
              <input type="text" name="diskon" value="" class="form-control">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
  </div>
@endsection
