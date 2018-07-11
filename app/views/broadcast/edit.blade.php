@extends('layouts.utama')

@section('css')
  <script src="{{url('assetdashboard/bower_components/datepicker/bootstrap-datepicker.min.css')}}"></script>
@endsection

@section('contentheader')
<h1>
  Experience
  <small>Create your experience</small>
</h1>
<ol class="breadcrumb">
  <li><a href="/admin/experience"><i class="fa fa-home"></i> Home</a></li>
  <li class="active"><a href="/admin/experience/create">Create</a></li>
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
        <form role="form" action="/admin/broadcast/{{$as->id}}" method="post">
          <input type="hidden" name="_method" value="put">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$as->nama}}">
            </div>
            <div class="form-group">
              <label>Date:</label>
              <input type="date" name="tanggal" class="form-control" value="{{$as->tanggal}}">
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label for="">Waktu</label>
              <input type="text" class="form-control" placeholder="Waktu" name="waktu" value="{{$as->waktu}}">
            </div>
            <div class="form-group">
              <label for="">Jumlah</label>
              <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" value="{{$as->jumlah}}">
            </div>
            <div class="form-group">
              <label for="">Target Market</label>
              <input type="text" class="form-control" placeholder="Target Market" name="target" value="{{$as->target}}">
            </div>
            <div class="form-group">
              <label for="">Operator Kartu</label>
              <input type="text" class="form-control" placeholder="Operator" name="operator" value="{{$as->operator}}">
            </div>
            <div class="form-group">
              <label for="">Prefix</label>
              <input type="text" class="form-control" placeholder="Prefix" name="prefix" value="{{$as->prefix}}">
            </div>
            <div class="form-group">
              <label for="">Jenis Kartu</label>
              <input type="text" class="form-control" placeholder="Jenis Kartu" name="jenis_kartu" value="{{$as->jenis_kartu}}">
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

@section('js')
  <script src="{{url('assetdashboard/bower_components/datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script type="text/javascript">
    $(function(){
      $('#datepicker').datepicker()
    });
  </script>
@endsection
