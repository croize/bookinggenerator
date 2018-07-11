@extends('layouts.utama')

@section('title')
  Pengajuan Pendapatan
@endsection

@section('contentheader')
<h1>
  Pembelian
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/headadmin/keuangan"><i class="fa fa-home"></i>Reseller</a></li>
</ol>
@endsection

@section('content')
@if(Session::get('message') != NULL)
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Alert!</h4>
  {{Session::get('message')}}
</div>
@elseif(Session::get('error') != NULL)
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Alert!</h4>
  {{Session::get('error')}}
</div>
@endif
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data reseller</h3><br>
        <a href="/headadmin/keuangan" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Agen</th>
            <th>Bank</th>
            <th>No Rekening</th>
            <th>No Handphone</th>
            <th>Total Pendapatan</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach($data as $c)
              <tr>
                <td>{{$c->user['name']}}</td>
                <td>{{$c->user['bank']}}</td>
                <td>{{$c->user['no_rekening']}}</td>
                <td>+62 {{$c->user['no_hp']}}</td>
                <td>Rp. {{ number_format($c->deposit, 0, ',', '.') }} ,-</td>
                <td> <a href="/" onclick="event.preventDefault();document.getElementById('accept{{$c->id}}').submit();" class="btn btn-primary"> <i class="fa fa-bell"></i> </a></td>
                <form id="accept{{$c->id}}" action="/headadmin/reseller/dana/accept/{{$c->id}}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="userid" value="{{$c->user['id']}}">
                </form>
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
