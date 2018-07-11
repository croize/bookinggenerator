@extends('layouts.utama')

@section('title')
  Data Mitra
@endsection

@section('contentheader')
<h1>
  Data Mitra
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/headadmin/users"><i class="fa fa-home"></i> Content</a></li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Mitra</h3><br>
        <a href="/headadmin/users/create" class="btn btn-primary">Create</a>
        <a href="/headadmin/users" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <form class="" action="/" method="post">
            <table class="table table-hover">
              <tr>
                <th>Nama Mitra</th>
                <th>Email Mitra</th>
                <th>Action</th>
              </tr>
              @foreach($data as $c)
              <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->email}}</td>
                <td><a href="/headadmin/users/{{$c->id}}/edit" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a> | <a href="{{url('headadmin/users/delete',$c->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
              </tr>
              @endforeach
            </table>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection
