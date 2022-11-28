@extends('layouts.layout')
@section('head')
  @parent
@show

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Server</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('router')}}">Data Server</a></li>
              <li class="breadcrumb-item active">Edit Data Server</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              @if(session()->get('success'))
                  <div class="alert alert-success">
                    <i class="material-icons"></i>
                    {{session()->get('success')}}
                  </div>
                @endif
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              <div class="card-body">
              <!-- form start -->
              <form method="POST" action="{{route('server.update',$server->id)}}">
                @method('PUT')
                @csrf
                <div class="card-form">
                  <div class="form-group">
                    <label for="sub_unit">Sub Unit</label>
                    <input type="txt" class="form-control" name="sub_unit" id="sub_unit" value="{{$server->sub_unit}}" placeholder="Masukkan Sub Unit">
                  </div>
                  <div class="form-group">
                    <label for="ip_address">IP Address</label>
                    <input type="txt" class="form-control" name="ip_address" id="ip_address" value="{{$server->ip_address}}" placeholder="Masukkan IP Address">
                  </div>
                  <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="txt" class="form-control" name="merk" id="merk" value="{{$server->merk}}" placeholder="Masukkan Merk">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="txt" class="form-control" name="type" id="type" value="{{$server->type}}" placeholder="Masukkan Type">
                  </div>
                  <div class="form-group">
                    <label for="processor">Processor</label>
                    <input type="txt" class="form-control" name="processor" id="processor" value="{{$server->processor}}" placeholder="Masukkan Processor">
                  </div>
                  <div class="form-group">
                    <label for="ram">RAM</label>
                    <input type="txt" class="form-control" name="ram" id="ram" value="{{$server->ram}}" placeholder="Masukkan Kapasitas RAM">
                  </div>
                  <div class="form-group">
                    <label for="storage">Storage</label>
                    <input type="txt" class="form-control" name="storage" id="storage" value="{{$server->storage}}" placeholder="Masukkan Kapasitas Penyimpanan">
                  </div>
                  <div class="form-group">
                    <label for="database">Database</label>
                    <input type="txt" class="form-control" name="database" id="database" value="{{$server->database}}" placeholder="Masukkan Database">
                  </div>
                  <div class="form-group">
                    <label for="konektivitas">Konektivitas</label>
                    <input type="txt" class="form-control" name="konektivitas" id="konektivitas" value="{{$server->konektivitas}}" placeholder="Masukkan Konektivitas">
                  </div>
                  <div class="form-group">
                    <label for="pemanfaatan_server">Pemanfaatan Server</label>
                    <input type="txt" class="form-control" name="pemanfaatan_server" id="pemanfaatan_server" value="{{$server->pemanfaatan_server}}" placeholder="Masukkan Pemanfaatan Server">
                  </div>
                  <div class="form-group">
                    <label for="operating_system">Operating System</label>
                    <input type="txt" class="form-control" name="operating_system" id="operating_system" value="{{$server->operating_system}}" placeholder="Masukkan OS">
                  </div>
                  <div class="form-group">
                    <label for="lisensi_os">Lisensi OS</label>
                    <input type="txt" class="form-control" name="lisensi_os" id="lisensi_os" value="{{$server->lisensi_os}}" placeholder="Masukkan Lisensi OS">
                  </div>
                  <div class="form-group">
                    <label for="join_domain">Join Domain</label>
                    <input type="txt" class="form-control" name="join_domain" id="join_domain" value="{{$server->join_domain}}" placeholder="Masukkan Join Domain">
                  </div>
                </div> <!-- ./card-form -->
                <div class="form-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div> <!-- ./card-body -->
          </div> <!-- ./card -->
        </div> <!-- ./col -->
      </div> <!-- ./row -->
    </div> <!-- ./container-fluid -->
  </div> <!-- ./content -->
</div> <!-- ./content-wrapper -->
@endsection
