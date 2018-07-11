@extends('layouts.utama')

@section('title')
  Data Content
@endsection

@section('contentheader')
<h1>
  Content
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/admin/content"><i class="fa fa-home"></i> Content</a></li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Content Management</h3><br>
        <a href="/admin/content/create" class="btn btn-primary">Create</a>
        <a href="/admin/content" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <form class="" action="/" method="post">
            <table class="table table-hover">
              <tr>
                <th> <i class="fa fa-check"></i> </th>
                <th>Nama Broadcast</th>
                <th>Asset</th>
                <th>Action</th>
              </tr>
              @foreach($data as $c)
              <tr>
                <td> <input type="checkbox" name="status[]" value="1"></td>
                <td>{{$c->broadcast['nama']}}</td>
                <td><a href="{!! $c->asset !!}">{!! $c->asset !!}</a></td>
                <td><a href="/admin/content/{{$c->id}}" class="btn btn-primary"> <i class="fa fa-eye"></i> </a> | <a href="/admin/content/{{$c->id}}/edit" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a> | <a href="{{url('admin/content/delete',$c->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i></a> | <a href="{!! $c->asset !!}" class="btn btn-success"> <i class="fa fa-link"></i></a> </td>
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
