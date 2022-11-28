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
              <h1 class="m-0">Create Data Laptop</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('laptop')}}">Data Laptop</a></li>
                <li class="breadcrumb-item active">Create Data Laptop</li>
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
                  <form method="POST" action="{{route('createLaptop.store')}}">
                    @csrf
                    <div class="card-form">
                      <div class="form-group">
                        <label for="exampleInputNIP">NIP</label>
                        <input type="txt" class="form-control" name="nip" id="exampleInputNIP" placeholder="Masukkan NIP">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="txt" class="form-control" name="nama" id="exampleInputNama" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputJabatan">Jabatan</label>
                        <input type="txt" class="form-control" name="jabatan" id="exampleInputJabatan" placeholder="Masukkan Jabatan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNoSeri">No Seri</label>
                        <input type="txt" class="form-control" name="no_seri" id="exampleInputNoSeri" placeholder="Masukkan Nomor Seri">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMerk">Merk</label>
                        <input type="txt" class="form-control" name="merk" id="exampleInputMerk" placeholder="Masukkan Merk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTipe">Tipe</label>
                        <input type="txt" class="form-control" name="tipe" id="exampleInputTipe" placeholder="Masukkan Tipe">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputRAM">RAM</label>
                        <input type="txt" class="form-control" name="ram" id="exampleInputRAM" placeholder="Masukkan kapasitas RAM">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputStorage">Storage</label>
                        <input type="txt" class="form-control" name="storage" id="exampleInputStorage" placeholder="Masukkan Kapasitas Penyimpanan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputStandartAlat">Standart Alat</label>
                        <input type="txt" class="form-control" name="standart_alat" id="exampleInputStandartAlat" placeholder="Masukkan Standart Alat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFungsi">Fungsi</label>
                        <input type="txt" class="form-control" name="fungsi" id="exampleInputFungsi" placeholder="Masukkan Fungsi">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSpesifikasi">Spesifikasi</label>
                        <input type="txt" class="form-control" name="spesifikasi" id="exampleInputSpesifikasi" placeholder="Masukkan Spesifikasi">
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
