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
  <li class="active"><a href="/admin/content/create">Create</a></li>
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
        <form role="form" action="/admin/content" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          {{ method_field('post') }}
          <div class="box-body">
            <div class="form-group">
              <label>Description </label><br>
              <textarea name="content" rows="8" cols="80"></textarea>
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label for="">Link Asset</label>
              <input type="text" name="asset" value="">
            </div>
            <div class="form-group">
              <label for="">Nama Broadcast</label>
              <select class="form-control" name="broadcastid">
                <option value="broadcastid">SELECT</option>
                @foreach($data as $v)
                <option value="{{$v->id}}">{{$v->nama}}</option>
                @endforeach
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

@section('js')
  <script src="{{url('assetdashboard/bower_components/datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script type="text/javascript">
    $(function(){
      $('#datepicker').datepicker()
    });
  </script>
@endsection
