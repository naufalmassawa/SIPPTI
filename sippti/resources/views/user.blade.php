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
              <h1 class="m-0">Data User</h1>
            </div> <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data User</li>
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
                    <td><b>Nama</b></td><td>:</td><td><div id="name"></div></td>
                  </tr>
                  <tr>
                    <td><b>Email</b></td><td>:</td><td><div id="email"></div></td>
                  </tr>
                  <tr>
                    <td><b>Email Verified At</b></td><td>:</td><td><div id="email_verified_at"></div></td>
                  </tr>
                  <tr>
                    <td><b>Password</b></td><td>:</td><td><div id="password"></div></td>
                  </tr>
                  <tr>
                    <td><b>Remember Token</b></td><td>:</td><td><div id="remember_token"></div></td>
                  </tr>
                  <tr>
                    <td><b>Created At</b></td><td>:</td><td><div id="created_at"></div></td>
                  </tr>
                  <tr>
                    <td><b>Updated At</b></td><td>:</td><td><div id="updated_at"></div></td>
                  </tr>
                </table>
              </div> <!-- /.modal-baby -->
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
										<a href="{{route('createUser')}}"><button type="submit" class="btn btn-success">
                      <i class=" fas fa-plus">&nbsp;</i> Add User </button>
                    </a>
									</div>
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Email Verified at</th>
                        <th>Password</th>
                        <th>Remember Token</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=0 @endphp
                      @foreach($tampilUser as $item)
                      @php $i++ @endphp
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->email_verified_at}}</td>
                        <td>{{$item->password}}</td>
                        <td>{{$item->remember_token}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td class="d-flex align-items-center">
                          <form onsubmit="return confirm('Anda yakin menghapus data ini ?');" action="{{ route('user.destroy', $item->id) }}" method="POST">
														<button type="button" id="detail" data-toggle="modal" data-target="#modal-default" data-id="{{$item->id}}" 
															title="detail" style="color:rgb(0, 128, 255); outline:none; border:none;padding:0"><i class="fas fa-info"></i></button> &nbsp; 
														<a href="{{ route('user.edit', $item->id) }}" style="color: rgb(0, 182, 0); background-color: none"> <i class="fas fa-edit"></i></a>
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
            </div> <!-- /.col-12 -->
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
          "responsive": false, "lengthChange": false, "autoWidth": false,
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
        $.get('user/' + id + '/detail', function(data) {
          $('#name').html(data.data.name);
          $('#email').html(data.data.email);
          $('#email_verified_at').html(data.data.email_verified_at);
          $('#password').html(data.data.password);
          $('#remember_token').html(data.data.remember_token);
          $('#created_at').html(data.data.created_at);
          $('#updated_at').html(data.data.updated_at);
        });
      });
    </script>
@show