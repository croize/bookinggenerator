@extends('layouts.utama')

@section('contentheader')
<h1>
  Barang
</h1>
<ol class="breadcrumb">
  <li><a href="/admin/barang"><i class="fa fa-home"></i> Home</a></li>
  <li class="active"><a href="/admin/barang/create">Create</a></li>
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
        <form role="form" action="/admin/pembelian" method="post" class="">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kode Pos</label>
              <input type="text" name="kode_pos" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kecamatan</label>
              <input type="text" name="kecamatan" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kabupaten</label>
              <input type="text" name="kabupaten" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Provinsi</label>
              <input type="text" name="provinsi" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">No WA</label>
              <input type="text" name="no_hp" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Barang</label>
              <select class="form-control" name="barang_id">
                <option value="">Pilih barang</option>
                @foreach($data as $c)
                <option value="{{$c->id}}">{{$c->nama_barang}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Jumlah Barang</label>
              <input type="text" name="jumlah_barang" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Ongkir</label>
              <input type="text" name="ongkir" value="" class="form-control">
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
