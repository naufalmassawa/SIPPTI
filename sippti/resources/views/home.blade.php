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
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Home</li>
              </ol>
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
      </div> <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
						<div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-cyan">
                <div class="inner">
                  <h3>{{$router}}</h3>
                  <p>Jumlah Router</p>
                </div>
                <div class="icon">
                  <i class="fas fa-wifi"></i>
                </div>
                <a href="{{route('router')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>{{$laptop}}</h3>
                  <p>Jumlah Laptop</p>
                </div>
                <div class="icon">
                  <i class="fas fa-laptop"></i>
                </div>
                <a href="{{route('laptop')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3>{{$server}}</h3>
                  <p>Jumlah Server</p>
                </div>
                <div class="icon">
                  <i class="fas fa-server"></i>
                </div>
                <a href="{{route('server')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{$user}}<sup style="font-size: 20px"></sup></h3>
                  <p>Jumlah User</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user"></i>
                </div>
                <a href="{{route('user')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div> 
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
      </div> <!-- /.content -->
    </div> <!-- Content Wrapper -->
@endsection