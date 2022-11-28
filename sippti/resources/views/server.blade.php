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
							<h1 class="m-0">Data Server</h1>
						</div> <!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
								<li class="breadcrumb-item active">Data Server</li>
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
                    <td><b>Sub Unit</b></td><td>:</td><td><div id="sub_unit"></div></td>
                  </tr>
                  <tr>
                    <td><b>IP Address</b></td><td>:</td><td><div id="ip_address"></div></td>
                  </tr>
                  <tr>
                    <td><b>Merk</b></td><td>:</td><td><div id="merk"></div></td>
                  </tr>
                  <tr>
                    <td><b>Processor</b></td><td>:</td><td><div id="processor"></div></td>
                  </tr>
                  <tr>
                    <td><b>RAM</b></td><td>:</td><td><div id="ram"></div></td>
                  </tr>
                  <tr>
                    <td><b>Storage</b></td><td>:</td><td><div id="storage"></div></td>
                  </tr>
                  <tr>
                    <td><b>Database</b></td><td>:</td><td><div id="database"></div></td>
                  </tr>
                  <tr>
                    <td><b>Konektivitas</b></td><td>:</td><td><div id="konektivitas"></div></td>
                  </tr> 
                  <tr>
                    <td><b>Pemanfaatan Server</b></td><td>:</td><td><div id="pemanfaatan_server"></div></td>
                  </tr>  
                  <tr>
                    <td><b>Operating System</b></td><td>:</td><td><div id="operating_system"></div></td>
                  </tr>  
                  <tr>
                    <td><b>Lisensi OS</b></td><td>:</td><td><div id="lisensi_os"></div></td>
                  </tr> 
                  <tr>
                    <td><b>Join Domain</b></td><td>:</td><td><div id="join_domain"></div></td>
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
									<div class="d-flex justify-content-end" style="padding-bottom: 10px">
										<a href="{{route('createServer')}}"><button type="submit" class="btn btn-success">
											<i class=" fas fa-plus">&nbsp;</i> Add Data </button>
										</a>
									</div>
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Sub Unit</th>
                        <th>IP Address</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Processor</th>
                        <th>RAM</th>
                        <th>Storage</th>
                        <th>Operating System</th>
                        <th>Lisensi OS</th>
                        <th>Join Domain</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=0 @endphp
                      @foreach ($viewServer as $item)
                      @php $i++ @endphp
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->sub_unit}}</td>
                        <td>{{$item->ip_address}}</td>
                        <td>{{$item->merk}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->processor}}</td>
                        <td>{{$item->ram}}</td>
                        <td>{{$item->storage}}</td>
                        <td>{{$item->operating_system}}</td>
                        <td>{{$item->lisensi_os}}</td>
                        <td>{{$item->join_domain}}</td>
                        <td>
                          <form onsubmit="return confirm('Anda yakin menghapus data ini ?');" action="{{ route('server.destroy', $item->id) }}" method="POST">
														<button type="button" id="detail" data-toggle="modal" data-target="#modal-default" data-id="{{$item->id}}" 
															title="detail" style="color:rgb(0, 128, 255); outline:none; border:none;padding:0"><i class="fas fa-info"></i></button> &nbsp; 
														<a href="{{ route('server.edit', $item->id) }}" style="color: rgb(0, 182, 0); background-color: none"> <i class="fas fa-edit"></i></a>
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
    $('body').on('click', '#detail', function (event){
      event.preventDefault();
      var id = $(this).data('id');
      console.log(id)
      $.get('server/' + id + '/detail', function (data){
        $('#sub_unit').html(data.data.sub_unit);
        $('#ip_address').html(data.data.ip_address);
        $('#merk').html(data.data.merk);
        $('#type').html(data.data.type);
        $('#processor').html(data.data.processor);
        $('#ram').html(data.data.ram);
        $('#storage').html(data.data.storage);
        $('#database').html(data.data.database);
        $('#konektivitas').html(data.data.konektivitas);
        $('#pemanfaatan_server').html(data.data.pemanfaatan_server);
        $('#operating_system').html(data.data.operating_system);
        $('#lisensi_os').html(data.data.lisensi_os);
        $('#join_domain').html(data.data.join_domain);
      });
    });
  </script>
@show

