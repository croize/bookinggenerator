@extends('layouts.utama')

@section('title')
  Reseller Dashboard
@endsection

@section('content')
<div class="row">
  <!-- ./col -->
  <div class="col-lg-4 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>{{$order}} Order</h3>

        <p>Jumlah Order</p>
      </div>
      <div class="icon">
        <i class="fa fa-shopping-cart"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-purple">
      <div class="inner">
        <h3>{{$transaksi}} Transaksi</h3>

        <p>Transaksi Berhasil</p>
      </div>
      <div class="icon">
        <i class="fa fa-bank"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-maroon">
      <div class="inner">
        <h3>{{$barang}} Produk</h3>

        <p>Jumlah Produk</p>
      </div>
      <div class="icon">
        <i class="fa fa-tags"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
</div>



@if(Auth::user()->status_reseller == "0")
<div class="row">
  <div class="col-md-12">
    <div class="callout callout-warning">
      <h4>Anda belum bisa melakukan broadcast produk kami</h4>

      <p>Untuk mengaktifkan akun reseller Anda, silahkan melakukan pembayaran sebesar Rp. 100.000 dengan Virtual Account Bank kami.</p>
    </div>
  </div>
</div>
@endif

@if(Session::get('message') != NULL)
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Alert!</h4>
  {{Session::get('message')}}
</div>
@endif

<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{url('assetdashboard/dist/img/Mobster Logo Fix-02.png')}}" alt="User profile picture">

        <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Virtual Account</b> <a class="pull-right">8888-{{Auth::user()->invoice_code}}</a>
          </li>
          <li class="list-group-item">
            <b>Penghasilan</b> <a class="pull-right">Rp. {{ number_format($deposit, 0, ',', '.') }} ,-</a><br>
            <b>Ditransfer tanggal 2 dan 17</b>
          </li>
        </ul>
        @if(Auth::user()->status_reseller == "0")
        <a href="" onclick="event.preventDefault();document.getElementById('pengajuan{{Auth::user()->id}}').submit();" class="btn btn-danger btn-block">
            <b>Click to Active your Account</b>
        </a>
        <form id="pengajuan{{Auth::user()->id}}" action="/reseller/active/{{Auth::user()->id}}" method="POST" style="display: none;">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
        </form>
        @elseif(Auth::user()->status_reseller == "1")
        <a href="#" class="btn btn-success btn-block" disabled><b>Active</b></a>
        <!-- Status reseller 0 = Tidak Aktif, 1 = Aktif , 2 = Pending -->

        @elseif(Auth::user()->status_reseller == "2")
        <a href="#" class="btn btn-warning btn-block"><b>Proses Pengecekan</b></a>
        @endif
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">About Me</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <strong><i class="fa fa-book margin-r-5"></i> Phone Number</strong>

        <p class="text-muted">
          +62 {{Auth::user()->no_hp}}
        </p>

        <hr>

        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

        <p class="text-muted">{{Auth::user()->alamat}}</p>

        <hr>

        <strong><i class="fa fa-file-text-o margin-r-5"></i> MobsterID</strong>

        <p>@if(Auth::user()->status_reseller == "1") {{Auth::user()->mobsterid}} @else - @endif</p>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#link" data-toggle="tab">Link</a></li>
        <li><a href="#broadcast" data-toggle="tab">Broadcast</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="link">
          @if(Auth::user()->status_reseller == "1")
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Mitra</h3><br>
                  <a href="/reseller" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <form class="" action="/" method="post">
                      <table class="table table-hover">
                        <tr>
                          <th>Nama Mitra</th>
                          <th>Link Mitra</th>
                        </tr>
                        <tr>
                          @foreach($listlink as $c)
                            <tr>
                              <td>{{$c->name}}</td>
                              <td><ul>@foreach($c->linkmitra as $yu)
                                <li>{{$yu->link}}/{{Auth::user()->mobsterid}}</li> @endforeach</ul></td>
                            </tr>
                          @endforeach
                        </tr>
                      </table>
                  </form>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          @else
          <div class="row">
            <div class="col-md-12">
              <div class="callout callout-warning">
                <h4>Akun Anda tidak dapat membuka fitur ini</h4>

                <p>Untuk mengaktifkan akun reseller Anda, silahkan melakukan pembayaran sebesar Rp. 100.000 dengan Virtual Account Bank kami.</p>
              </div>
            </div>
          </div>
          @endif
        </div>
        <div class="tab-pane" id="broadcast">
          @if(Auth::user()->status_reseller == "1")
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Broadcast</h3><br>
                  <a href="/reseller" class="btn btn-success"> <i class="fa fa-refresh"></i> Refresh</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                      <table class="table table-hover">
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Content</th>
                          <th>Asset</th>
                        </tr>
                        <form class="" id="finish" action="/admin/broadcast/finish" method="post">
                        @foreach($data as $c)
                          {{csrf_field()}}
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$c->nama}}</td>
                          @foreach($c->content as $cnt)
                            <td>{{$cnt->content}}</td>
                            <td> <a href="{!! $cnt->asset !!}">{!! $cnt->asset !!}</a></td>
                          @endforeach
                        </tr>
                        @endforeach
                        </form>
                      </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          @else
          <div class="row">
            <div class="col-md-12">
              <div class="callout callout-warning">
                <h4>Akun Anda tidak dapat membuka fitur ini</h4>

                <p>Untuk mengaktifkan akun reseller Anda, silahkan melakukan pembayaran sebesar Rp. 100.000 dengan Virtual Account Bank kami.</p>
              </div>
            </div>
          </div>
          @endif
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>



@endsection
