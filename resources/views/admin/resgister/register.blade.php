<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post">
        @csrf
        <div class="input-group">
          <input type="text" class="form-control @error('name') border-danger @enderror" placeholder="Full name" name="name" value="{{ old('name') }}">
          <div class="input-group-append">
            <div class="input-group-text @error('name') border-danger @enderror">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        <div class="input-group mt-3">
          <input type="email" class="form-control @error('email') border-danger @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text @error('email') border-danger @enderror">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        <div class="input-group mt-3">
          <input type="password" class="form-control @error('password') border-danger @enderror" placeholder="Password" name="password" value="{{ old('password') }}">
          <div class="input-group-append">
            <div class="input-group-text @error('email') border-danger @enderror">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        <div class="input-group mt-3">
          <input type="password" class="form-control @error('confirm_password') border-danger @enderror" placeholder="confirm_password" name="confirm_password" value="{{ old('confirm_password') }}">
          <div class="input-group-append">
            <div class="input-group-text @error('confirm_password') border-danger @enderror">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('confirm_password')
        <small class="text-danger">{{ $message }}</small>
      @enderror
        <div class="row mt-3">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
