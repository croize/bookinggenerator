@extends('layouts.utama')

@section('title')
  Data Link Mitra
@endsection

@section('contentheader')
<h1>
  List Link Mitra
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/headadmin/listlink"><i class="fa fa-home"></i>List Link Mitra</a></li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data list link mitra</h3><br>
        <a href="/headadmin/listlink/create" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
        <a href="/headadmin/listlink" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Mitra</th>
            <th>Link Mitra</th>
          </tr>
          </thead>
          <tbody>
            @foreach($data as $c)
              <tr>
                <td>{{$c->name}}</td>
                <td><ul>@foreach($c->linkmitra as $yu)
                  <li>{{$yu->link}}</li> <a href="/headadmin/listlink/edit/{{$yu->id}}" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a>  <a href="/headadmin/listlink/delete/{{$yu->id}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>@endforeach</ul></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection

@endsection
