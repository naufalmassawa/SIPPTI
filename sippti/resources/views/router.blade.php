@extends('layouts.layout')
@section('head')
  @parent
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@show

@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data Router</h1>
            </div> <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Router</li>
              </ol>
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
      </div> <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <table style="padding-left: 5px; padding-right: 5px" class="table table-responsive table-striped">
                  <tr>
                    <td><b>Unit</b></td><td>:</td><td><div id="unit"></div></td>
                  </tr>
                  <tr>
                    <td><b>ISP</b></td><td>:</td><td><div id="isp"></div></td>
                  </tr>
                  <tr>
                  <td><b>Tipe Layanan</b></td><td>:</td><td><div id="service_type"></div></td>
                  </tr>
                  <tr>
                      <td><b>SID</b></td><td>:</td><td><div id="sid"></div></td>
                  </tr>
                  <tr>
                    <td><b>Bandwith</b></td><td>:</td><td><div id="bandwith"></div></td>
                  </tr>
                  <tr>
                    <td><b>IP LAN</b></td><td>:</td><td><div id="ip_lan"></div></td>
                  </tr>
                  <tr>
                    <td><b>Gateway</b></td><td>:</td><td><div id="ip_gateway"></div></td>
                  </tr>
                  <tr>
                    <td><b>IP WAN</b></td><td>:</td><td><div id="ip_wan"></div></td>
                  </tr>
                  <tr>
                    <td><b>Merk</b></td><td>:</td><td><div id="merk"></div></td>
                  </tr>
                  <tr>
                    <td><b>Serial Number</b></td><td>:</td><td><div id="serial_number"></div></td>
                  </tr>
                  <tr>
                    <td><b>Model</b></td><td>:</td><td><div id="model"></div></td>
                  </tr>
                  <tr>
                    <td><b>Security</b></td><td>:</td><td><div id="security"></div></td>
                  </tr>
                  <tr>
                    <td><b>Backup</b></td><td>:</td><td><div id="backup"></div></td>
                  </tr>
                  <tr>
                    <td><b>Keterangan</b></td><td>:</td><td><div id="keterangan"></div></td>
                  </tr>
                  <tr>
                    <td><b>Tahun Pengadaan</b></td><td>:</td><td><div id="tahun_pengadaan"></div></td>
                  </tr>
                  <tr>
                    <td><b>Status</b></td><td>:</td><td><div id="status"></div></td>
                  </tr>
                  <tr>
                    <td><b>Latitude</b></td><td>:</td><td><div id="latitude"></div></td>
                  </tr>
                  <tr>
                    <td><b>Longitude</b></td><td>:</td><td><div id="longitude"></div></td>
                  </tr>
                  <tr>
                    <td><b>Status Pemeliharaan LAN</b></td><td>:</td><td><div id="status_har_lan"></div></td>
                  </tr>
                  <tr>
                    <td><b>Tahun Pemeliharaan LAN</b></td><td>:</td><td><div id="tahun_har_lan"></div></td>
                  </tr>
                  <tr>
                    <td><b>USER_MIKROTIK0</b></td><td>:</td><td><div id="user_mikrotik0"></div></td>
                  </tr>
                  <tr>
                    <td><b>PASS_MIKROTIK0</b></td><td>:</td><td><div id="pass_mikrotik0"></div></td>
                  </tr>
                  <tr>
                    <td><b>USER_MIKROTIK1</b></td><td>:</td><td><div id="user_mikrotik1"></div></td>
                  </tr>
                  <tr>
                    <td><b>PASS_MIKROTIK1</b></td><td>:</td><td><div id="pass_mikrotik1"></div></td>
                  </tr>
                  <tr>
                    <td><b>Security Mikrotik</b></td><td>:</td><td><div id="security_mikrotik"></div></td>
                  </tr>
                  <tr>
                    <td><b>Firewall</b></td><td>:</td><td><div id="firewall"></div></td>
                  </tr>
                </table>
              </div> <!-- /.modal-body -->
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div> <!-- /.modal-content -->
          </div> <!-- /.modal-dialog -->
        </div> <!-- /.modal -->
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
                <div class="card-body">
                  <div class="card-body">
                    <div class="d-flex justify-content-end" style="padding-bottom: 10px">
                      <a href="{{route('createRouter')}}"><button type="submit" class="btn btn-success">
                        <i class=" fas fa-plus">&nbsp;</i> Add Data </button>
                      </a>
                    </div>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Unit</th>
                        <th>IP LAN</th>
                        <th>IP Gateway</th>
                        <th>IP WAN</th>
                        <th>Merk</th>
                        <th>Serial Number</th>
                        <th>Model</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=0 @endphp
                      @foreach($viewRouter as $item)
                      @php $i++ @endphp
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->unit}}</td>
                        <td>{{$item->ip_lan}}</td>
                        <td>{{$item->ip_gateway}}</td>
                        <td>{{$item->ip_wan}}</td>
                        <td>{{$item->merk}}</td>
                        <td>{{$item->serial_number}}</td>
                        <td>{{$item->model}}</td>
                        <td class="d-flex align-items-center">
                          <form onsubmit="return confirm('Anda yakin menghapus data ini ?');" action="{{ route('router.destroy', $item->id) }}" method="POST">
														<button type="button" id="detail" data-toggle="modal" data-target="#modal-default" data-id="{{$item->id}}" 
                              title="detail" style="color:rgb(0, 128, 255); outline:none; border:none;padding:0"><i class="fas fa-info"></i></button> &nbsp; 
														<a href="{{ route('router.edit', $item->id) }}" style="color: rgb(0, 182, 0); background-color: none"> <i class="fas fa-edit"></i></a>
															@csrf
														@method('POST')
														<button type="submit" style="color:red;outline:none;border:none;" title="hapus"><i class="fas fa-trash"></i></button>
													</form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!--/.col-12-->
          </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
      </div> <!-- /.content -->
@endsection

@section('script')
  @parent
  <!-- REQUIRED SCRIPTS -->

  <!-- DataTables  & Plugins -->
  <script src="{{asset('adminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
  <script>
    "use strict";
    $('body').on('click', '#detail', function(event) {
      event.preventDefault();
      var id = $(this).data('id');
      console.log(id);
      $.get('router/' + id + '/detail', function(data) {
        $('#unit').html(data.data.unit);
        $('#isp').html(data.data.isp);
        $('#service_type').html(data.data.service_type);
        $('#sid').html(data.data.sid);
        $('#bandwith').html(data.data.bandwith);
        $('#ip_lan').html(data.data.ip_lan);
        $('#ip_gateway').html(data.data.ip_gateway);
        $('#ip_wan').html(data.data.ip_wan);
        $('#merk').html(data.data.merk);
        $('#serial_number').html(data.data.serial_number);
        $('#model').html(data.data.model);
        $('#security').html(data.data.security);
        $('#backup').html(data.data.backup);
        $('#keterangan').html(data.data.keterangan);
        $('#tahun_pengadaan').html(data.data.tahun_pengadaan);
        $('#status').html(data.data.status);
        $('#latitude').html(data.data.latitude);
        $('#longitude').html(data.data.longitude);
        $('#status_har_lan').html(data.data.status_har_lan);
        $('#tahun_har_lan').html(data.data.tahun_har_lan);
        $('#user_mikrotik0').html(data.data.user_mikrotik0);
        $('#pass_mikrotik0').html(data.data.pass_mikrotik0);
        $('#user_mikrotik1').html(data.data.user_mikrotik1);
        $('#pass_mikrotik1').html(data.data.pass_mikrotik1);
        $('#security_mikrotik').html(data.data.security_mikrotik);
        $('#firewall').html(data.data.firewall);
      });
    });
  </script>
@show