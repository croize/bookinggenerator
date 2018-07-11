@extends('layouts.utama')

@section('contentheader')
<h1>
  Barang
</h1>
<ol class="breadcrumb">
  <li><a href="/headadmin/users"><i class="fa fa-home"></i> Home</a></li>
  <li class="active"><a href="/headadmin/users/create">Create</a></li>
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
        <form role="form" action="/headadmin/users" method="post" class="">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">
              <label for="">Nama User</label>
              <input type="text" name="name" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email User</label>
              <input type="text" name="email" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Level</label>
              <select class="form-control" name="level">
                <option value="1">Operator</option>
                <option value="2">Mitra</option>
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
