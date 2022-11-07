<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} || Log In </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminAutoBot/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminAutoBot/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminAutoBot/dist/css/adminlte.min.css')}}">
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <div class="login-logo">
        <img src="{{ asset('AdminAutoBot/dist/img/logoAutoBike.png') }}" alt="AutoShopBikeNiki" width="50px" class="rounded-circle">
        <a href="{{ url('/') }}" class="h4">{{ config('app.name') }}</a>
      </div>
    </div>
    <div class="card-body">

      <form action="{{ route('login') }}" method="POST" id="quickForm">
        @csrf

        <div class="input-group mb-3 has-feedback @error('email') has-error @enderror">
          {{-- <input type="email" class="form-control is-invalid" name="email" id="email" placeholder="Email" required> --}}
          <input type="email" name="email" class="form-control" id="exampleInputemail1" placeholder="Email" 
          aria-describedby="exampleInputemail1-error" aria-invalid="true" required>
          {{-- <span id="emailUser" class="error invalid-feedback">Masukan email anda!</span> --}}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <span id="exampleInputemail1-error" class="error invalid-feedback">Masukan Username / Email Anda</span>
        </div>
        <div class="input-group mb-3 has-feedback @error('password') has-error @enderror">
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" 
          aria-describedby="exampleInputPassword1-error" placeholder="Password" aria-invalid="true" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <span id="exampleInputPassword1-error" class="error invalid-feedback">Masukan Password Anda</span>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="{{ asset('AdminAutoBot/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminAutoBot/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminAutoBot/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('AdminAutoBot/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('AdminAutoBot/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('AdminAutoBot/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('AdminAutoBot/plugins/jquery-validation/additional-methods.min.js')}}"></script>

<script>
  $(function () {
    $('#quickForm').validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 5
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Masukan email anda",
          email: "Masukan email dengan benar"
        },
        password: {
          required: "Harap isi password anda",
          minlength: "Password minimal 5 karakter"
        },
        terms: "Username atau password anda salah"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
  </script>
</body>
</html>
