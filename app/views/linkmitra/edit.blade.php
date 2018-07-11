@extends('layouts.utama')

@section('title')
  List Link
@endsection

@section('contentheader')
<h1>
  List Link
</h1>
<ol class="breadcrumb">
  <li><a href="/headadmin/listlink"><i class="fa fa-home"></i> Home</a></li>
  <li class="active"><a href="/headadmin/listlink/create">Create</a></li>
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
        <form role="form" action="/headadmin/listlink/update/{{$findid->id}}" method="post" class="">
          <input type="hidden" name="_method" value="put">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">
              <label for="">Link</label>
              <input type="text" name="link" value="{{$findid->link}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mitra</label>
              <select class="form-control" name="user_id">
                <option value="">Pilih barang</option>
                @foreach($datamitra as $c)
                <option value="{{$c->id}}"@if($findid->user_id == $c->id) selected @endif>{{$c->name}}</option>
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
