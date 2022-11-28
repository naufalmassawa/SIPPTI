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
              <h1 class="m-0">Edit Data User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('user')}}">Data User</a></li>
                <li class="breadcrumb-item active">Edit Data User</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                @if(session()->get('success'))
                  <div class="alert alert-success">
                    <i class="material-icons"></i>
                    {{session()->get('success')}}
                  </div>
                @endif
                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <div class="card-body">
                  <form method="POST" action="{{route('user.update', $user->id)}}">
                    @method('PUT')
                    @csrf
                    <div class="card-form">
                      <div class="form-group">
                        <label for="unit">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}" id="name" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$user->email}}" id="email" placeholder="Masukkan Email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" value="{{$user->password}}" id="password" placeholder="Masukkan Password">
                      </div>
                    </div>
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