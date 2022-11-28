<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIPPTI | Sign In</title>
  <style>
    </style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<img src="{{asset('img/logoSIPPTI.png')}}" alt="logoSIPPTI" width="150">
		</div> <!-- /.login-logo -->
  	<div class="card card-outline card-primary">
    	<div class="card-header text-center">
        <p class="mb-0" style="font-size: 20px;">
          <small> Sistem Informasi Pendataan Perangkat Teknologi Informasi </small>
        </p>      
    	</div>
    	<div class="card-body">
      	<form method="POST" action="{{ route('login') }}">
        	@csrf
        	<div class="input-group mb-3">
          	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
						value="{{ old('email') }}" placeholder="Email or Username" required autofocus>
          	<div class="input-group-append">
            	<div class="input-group-text">
              	<span class="fas fa-user"></span>
            	</div>
          	</div>
          	@error('email')
          	<span class="invalid-feedback" style="text-align: center;" role="alert">
          	<strong>{{ $message }}</strong>
          	</span>
          	@enderror
          	@error('password')
          	<span class="invalid-feedback" style="text-align: center;" role="alert">
              <strong>{{ $message }}</strong>
          	</span>
          	@enderror
       	 	</div>
        	<div class="input-group mb-3">
          	<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
						value="{{ old('password') }}" placeholder="Password" required autocomplete="current-password">
          	<div class="input-group-append">
            	<div class="input-group-text">
              	<span class="fas fa-lock"></span>
            	</div>
          	</div>
        	</div>
        	<div class="row">
          	<div class="col-8">
            	<div class="icheck-primary">
              	<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                  Remember Me
                </label>
            	</div>
         		</div> <!-- /.col -->
          	<div class="col-4">
            		<button type="submit" class="btn btn-primary btn-block">Sign In</button>
          	</div> <!-- /.col -->
        	</div>
      	</form>
      	<br>
      	<p class="mb-0">
        	<a href="{{ route('register') }}" class="text-center">Register</a>
      	</p>
    	</div> <!-- /.card-body -->
  	</div> <!-- /.card -->
	</div> <!-- /.login-box -->

	<!-- jQuery -->
	<script src="{{ asset('adminLTE/plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('adminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>