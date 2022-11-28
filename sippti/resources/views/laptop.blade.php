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
							<h1 class="m-0">Data Laptop</h1>
						</div> <!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
								<li class="breadcrumb-item active">Data Laptop</li>
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
										<td><b>NIP</b></td><td>:</td><td><div id="nip"></div></td>
									</tr>
									<tr>
										<td><b>Nama</b></td><td>:</td><td><div id="nama"></div></td>
									</tr>
									<tr>
										<td><b>Jabatan</b></td><td>:</td><td><div id="jabatan"></div></td>
									</tr>
									<tr>
										<td><b>No Seri</b></td><td>:</td><td><div id="no_seri"></div></td>
									</tr>
									<tr>
										<td><b>Merk</b></td><td>:</td><td><div id="merk"></div></td>
									</tr>
									<tr>
										<td><b>Tipe</b></td><td>:</td><td><div id="tipe"></div></td>
									</tr>
									<tr>
										<td><b>RAM</b></td><td>:</td><td><div id="ram"></div></td>
									</tr>
									<tr>
										<td><b>Storage</b></td><td>:</td><td><div id="storage"></div></td>
									</tr> 
									<tr>
										<td><b>Standart Alat</b></td><td>:</td><td><div id="standart_alat"></div></td>
									</tr>  
									<tr>
										<td><b>Fungsi</b></td><td>:</td><td><div id="fungsi"></div></td>
									</tr>  
									<tr>
										<td><b>Spesifikasi</b></td><td>:</td><td><div id="spesifikasi"></div></td>
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
										<a href="{{route('createLaptop')}}"><button type="submit" class="btn btn-success">
											<i class=" fas fa-plus">&nbsp;</i> Add Data </button>
										</a>
									</div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>No Seri</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>RAM</th>
                        <th>Storage</th>
                        <th>Standart Alat</th>
                        <th>Fungsi</th>
                        <th>Spesifikasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=0 @endphp
                      @foreach($viewLaptop as $item)
                      @php $i++ @endphp
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item ->nip}}</td>
                        <td>{{$item ->nama}}</td>
                        <td>{{$item ->jabatan}}</td>
                        <td>{{$item ->no_seri}}</td>
                        <td>{{$item ->merk}}</td>
                        <td>{{$item ->tipe}}</td>
                        <td>{{$item ->ram}}</td>
                        <td>{{$item ->storage}}</td>
                        <td>{{$item ->standart_alat}}</td>
                        <td>{{$item ->fungsi}}</td>
                        <td>{{$item ->spesifikasi}}</td>
												<td class="d-flex align-items-center">
                          {{-- <button class="btn btn-info" id="detail" title="Detail" data-id="{{$item->id}}" 
                            data-toggle="modal" data-target="#modal-default"><i class="fas fa-info"></i></button>
                          <a href="{{route('laptop.edit', $item->id)}}"><button class="btn btn-success" title="Edit" ><i class="fas fa-edit"></i></button></a>
                          <form action="{{route('laptop.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('POST')
                            <button class="btn" title="Delete"><i class="fas fa-trash"></i></button>  
                          </form> --}}
													<form onsubmit="return confirm('Anda yakin menghapus data ini ?');" action="{{ route('laptop.destroy', $item->id) }}" method="POST">
														<button type="button" id="detail" data-toggle="modal" data-target="#modal-default" data-id="{{$item->id}}" 
															title="detail" style="color:rgb(0, 128, 255); outline:none; border:none;padding:0"><i class="fas fa-info"></i></button> &nbsp; 
														<a href="{{ route('laptop.edit', $item->id) }}" style="color: rgb(0, 182, 0); background-color: none"> <i class="fas fa-edit"></i></a>
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
    	$.get('laptop/' + id + '/detail', function (data){
      	$('#nip').html(data.data.nip);
      	$('#nama').html(data.data.nama);
      	$('#jabatan').html(data.data.jabatan);
      	$('#no_seri').html(data.data.no_seri);
      	$('#merk').html(data.data.merk);
      	$('#tipe').html(data.data.tipe);
      	$('#ram').html(data.data.ram);
      	$('#storage').html(data.data.storage);
      	$('#standart_alat').html(data.data.standart_alat);
      	$('#fungsi').html(data.data.fungsi);
      	$('#spesifikasi').html(data.data.spesifikasi);
    	});
  	});
	</script>
@show

