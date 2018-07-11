@extends('layouts.utama')

@section('title')
  Data Broadcast
@endsection

@section('contentheader')
<h1>
  Broadcast
</h1>
<ol class="breadcrumb">
  <li class="active"><a href="/headadmin/broadcast"><i class="fa fa-home"></i> Broadcast</a></li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Broadcast</h3><br>
        <a href="/headadmin/broadcast" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">

            <table class="table table-hover">
              <tr>
                <th> <i class="fa fa-check"></i> </th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Jumlah Broadcast</th>
                <th>Target Market</th>
                <th>Operator</th>
                <th>Prefix</th>
                <th>Jenis Kartu</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              @foreach($data as $c)
              <tr>
                <td><input type="checkbox" name="id[]" value="{{$c->id}}"></td>
                <td>{{$c->nama}}</td>
                <td>{{$c->tanggal}}</td>
                <td>{{$c->waktu}}</td>
                <td>{{$c->jumlah}}</td>
                <td>{{$c->target}}</td>
                <td>{{$c->operator}}</td>
                <td>{{$c->prefix}}</td>
                <td>{{$c->jenis_kartu}}</td>
                <td> @if($c->status == "0")
                  <span class="label label-warning">Pending</span>
                  @elseif($c->status == "1")
                  <span class="label label-success">Approved</span>
                  @endif </td>
                <td><a href="finish" onclick="event.preventDefault();document.getElementById('accept{{$c->id}}').submit();" class="btn btn-success"><i class="fa fa-check"></i></a>
                <form class="" id="accept{{$c->id}}" action="/headadmin/broadcast/{{$c->id}}" method="post">
                  <input type="hidden" name="_method" value="put">
                  <input type="hidden" name="status" value="1">
                  {{csrf_field()}}
                </form> </td>
              </tr>
              <tr>
                <th></th>
                <th>Asset</th>
                <th>Content</th>
                <th>Revisi</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Action</th>
              </tr>
              @foreach($c->content as $cnt)
              <tr>
                <td></td>
                <td>{{$cnt->content}}</td>
                <td> <a href="{!! $cnt->asset !!}">{!! $cnt->asset !!}</a></td>
                <td colspan="6">@if($cnt->revisi == NULL) Tidak ada revisi @elseif($cnt->revisi != NULL) {{$cnt->revisi}} @endif</td>
                <td><a href="/headadmin/content/{{$cnt->id}}/edit" class="btn btn-primary"> <i class="fa fa-pencil"></i> </a> <a href="/storage/asset/{{$cnt->asset}}" download="{{$cnt->asset}}" class="btn btn-success"> <i class="fa fa-download"></i></a></td>
              </tr>
              @endforeach
              @endforeach
            </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection
