@extends('layouts.utama')

@section('contentheader')
<h1>
  Barang
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/admin/barang"><i class="fa fa-home"></i> Content</a></li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Barang</h3><br>
        <a href="/admin/barang/create" class="btn btn-primary">Create</a>
        <a href="/admin/barang" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <form class="" action="/" method="post">
            <table class="table table-hover">
              <tr>
                <th>Nama Barang</th>
                <th>Nama Mitra</th>
                <th>Harga</th>
                <th>Diskon</th>
                <th>Harga Akhir</th>
                <th>Action</th>
              </tr>
              @foreach($data as $c)
              <tr>
                <td>{{$c->nama_barang}}</td>
                <td>{{$c->user['name']}}</td>
                <td>Rp. {{$c->harga}} </td>
                <td>@if($c->diskon == NULL) Tidak ada diskon @elseif($c->diskon != NULL) {{$c->diskon}}% @endif</td>
                <td>Rp. {{$c->totalharga}}</td>
                <td><a href="/admin/barang/{{$c->id}}/edit" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a> | <a href="{{url('admin/barang/delete',$c->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i></a></td>
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
