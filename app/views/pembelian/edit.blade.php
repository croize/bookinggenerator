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
        <form role="form" action="/admin/pembelian/{{$data->invoice_code}}" method="post">
          <input type="hidden" name="_method" value="put">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" value="{{$data->nama}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Barang</label>
              <select class="form-control" name="barang_id">
                <option value="">Pilih barang</option>
                @foreach($br as $c)
                <option value="{{$c->id}}" @if($c->id == $data->barang_id) selected @endif>{{$c->nama_barang}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Jumlah Barang</label>
              <input type="text" name="jumlah_barang" value="{{$data->jumlah_barang}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Provinsi</label>
              <input type="text" name="provinsi" value="{{$data->provinsi}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kode Pos</label>
              <input type="text" name="kode_pos" value="{{$data->kode_pos}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kecamatan</label>
              <input type="text" name="kecamatan" value="{{$data->kecamatan}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kabupaten</label>
              <input type="text" name="kabupaten" value="{{$data->kabupaten}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">No HP</label>
              <input type="text" name="no_hp" value="{{$data->no_hp}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Ongkir</label>
              <input type="text" name="ongkir" value="{{$data->ongkir}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Pengiriman</label>
              <select class="form-control" name="pengiriman">
                <option value="JNE" @if($data->pengiriman == "JNE") selected @endif>JNE</option>
                <option value="J&T" @if($data->pengiriman == "J&T") selected @endif>J&T</option>
                <option value="POS" @if($data->pengiriman == "POS") selected @endif>POS</option>
                <option value="TIKI" @if($data->pengiriman == "TIKI") selected @endif>TIKI</option>
                <option value="ESL" @if($data->pengiriman == "ESL") selected @endif>ESL</option>
                <option value="PCP" @if($data->pengiriman == "PCP") selected @endif>PCP</option>
                <option value="RPX" @if($data->pengiriman == "RPX") selected @endif>RPX</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Pembayaran</label>
              <select class="form-control" name="pembayaran">
                <option value="BNI" @if($data->pembayaran == "BNI") selected @endif>BNI</option>
                <option value="BCA" @if($data->pembayaran == "BCA") selected @endif>BCA</option>
                <option value="MS" @if($data->pembayaran == "MS") selected @endif>Mandiri Syariah</option>
              </select>
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
