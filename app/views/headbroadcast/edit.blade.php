@extends('layouts.utama')

@section('css')
  <script src="{{url('assetdashboard/bower_components/datepicker/bootstrap-datepicker.min.css')}}"></script>
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
        <form role="form" action="/headadmin/content/{{$as->id}}" method="post">
          <input type="hidden" name="_method" value="put">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">
              <label for="">Revisi</label>
              <input type="text" class="form-control" placeholder="Revisi" name="revisi" value="{{$as->revisi}}">
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
