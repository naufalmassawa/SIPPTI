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
              <h1 class="m-0">Create Data Router</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('router')}}">Data Router</a></li>
                <li class="breadcrumb-item active">Create Data Router</li>
              </ol>
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
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
                  <form method="POST" action="{{route('createRouter.store')}}">
                    @csrf
                    <div class="card-form">
                      <div class="form-group">
                        <label for="unit">Unit</label>
                        <input type="text" name="unit" class="form-control" id="unit" placeholder="Unit">
                      </div>
                      <div class="form-group">
                        <label for="isp">ISP</label>
                        <input type="text" name="isp" class="form-control" id="isp" placeholder="Masukkan ISP">
                      </div>
                      <div class="form-group">
                        <label for="service-type">Jenis Layanan</label>
                        <input type="text" name="service_type" class="form-control" id="service-type" placeholder="Masukkan Jenis Layanan">
                      </div>
                      <div class="form-group">
                        <label for="sId">SID</label>
                        <input type="text" name="sid" class="form-control" id="sId" placeholder="Masukkan SID">
                      </div>
                      <div class="form-group">
                        <label for="bandwith">Bandwith</label>
                        <input type="text" name="bandwith" class="form-control" id="bandwith" placeholder="Masukkan Bandwith">
                      </div>
                      <div class="form-group">
                        <label for="lan-ip">IP LAN</label>
                        <input type="text" name="ip_lan" class="form-control" id="lan-ip" placeholder="Masukkan IP LAN">
                      </div>
                      <div class="form-group">
                        <label for="gateway-ip">IP Gateway</label>
                        <input type="text" name="ip_gateway" class="form-control" id="gateway-ip" placeholder="Masukkan IP GATEWAY">
                      </div>
                      <div class="form-group">
                        <label for="wan-ip">IP WAN</label>
                        <input type="text" name="ip_wan" class="form-control" id="wan-ip" placeholder="Masukkan IP WAN">
                      </div>
                      <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" class="form-control" id="merk" placeholder="Masukkan Merk">
                      </div>
                      <div class="form-group">
                        <label for="sn">SN</label>
                        <input type="text" name="serial_number" class="form-control" id="sn" placeholder="Masukkan SN">
                      </div>
                      <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan nama Model">
                      </div>
                      <div class="form-group">
                        <label for="security">Security</label>
                        <input type="text" name="security" class="form-control" id="security" placeholder="Masukkan Security">
                      </div>
                      <div class="form-group">
                        <label for="backup">Backup</label>
                        <input type="text" name="backup" class="form-control" id="backup" placeholder="Masukkan Backup">
                      </div>
                      <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan">
                      </div>
                      <div class="form-group">
                        <label for="tahunPengadaan">Tahun Pengadaan</label>
                        <input type="text" name="tahun_pengadaan" class="form-control" id="tahunPengadaan"
                          placeholder="Masukkan Tahun Pengadaan">
                      </div>
                      <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control" id="status" placeholder="Masukkan Status">
                      </div>
                      <div class="form-group">
                        <label for="latitude">LAT</label>
                        <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Masukkan Lattitude">
                      </div>
                      <div class="form-group">
                        <label for="longitude">LONG</label>
                        <input type="text" name="longitude" class="form-control" id="longitude" placeholder="Masukkan Longitude">
                      </div>
                      <div class="form-group">
                        <label for="statusPemeliharaanJaringanLAN">Status Pemeliharaan Jaringan
                          LAN</label>
                        <input type="text" name="status_har_lan" class="form-control" id="statusPemeliharaanJaringanLAN"
                          placeholder="Masukkan Status Pemeliharaan Jaringan LAN">
                      </div>
                      <div class="form-group">
                        <label for="tahunPemeliharaanJaringanLAN">Tahun Pemeliharaan Jaringan
                          LAN</label>
                        <input type="text" name="tahun_har_lan" class="form-control" id="tahunPemeliharaanJaringanLAN"
                          placeholder="Masukkan Tahun Pemeliharaan Jaringan LAN">
                      </div>
                      <div class="form-group">
                        <label for="userMikrotik0">USER_MIKROTIK0</label>
                        <input type="text" name="user_mikrotik0" class="form-control" id="userMikrotik0" placeholder="Masukkan User">
                      </div>
                      <div class="form-group">
                        <label for="passMikrotik0">PASS_MIKROTIK0</label>
                        <input type="text" name="pass_mikrotik0" class="form-control" id="passMikrotik0" placeholder="Masukkan Password">
                      </div>
                      <div class="form-group">
                        <label for="userMikrotik1">USER_MIKROTIK1</label>
                        <input type="text" name="user_mikrotik1" class="form-control" id="userMikrotik1" placeholder="Masukkan User">
                      </div>
                      <div class="form-group">
                        <label for="passMikrotik1">PASS_MIKROTIK1</label>
                        <input type="text" name="pass_mikrotik1" class="form-control" id="passMikrotik1" placeholder="Masukkan Password">
                      </div>
                      <div class="form-group">
                        <label for="securityMikrotik">Security Mikrotik</label>
                        <input type="text" name="security_mikrotik" class="form-control" id="securityMikrotik"
                          placeholder="Masukkan Security Mikrotik">
                      </div>
                      <div class="form-group">
                        <label for="firewall">Firewall</label>
                        <input type="text" name="firewall" class="form-control" id="firewall" placeholder="Masukkan Firewall">
                      </div>
                    </div> <!-- ./card-form -->
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col-12 -->
          </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
      </div> <!-- /.content -->
    </div> <!-- /.content-wrapper -->
@endsection