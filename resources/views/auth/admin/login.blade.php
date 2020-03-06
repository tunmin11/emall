<!DOCTYPE html>
<html>
<head>
	<title>E-Mall</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/master.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/css/all.min.css') }}">


</head>

  <body>
    <div class="container">
      <div class="row mt-4 col-8 border border-primary p-0 offset-2">
        <div class="col-6 bg-primary py-5">
          <div class="d-block text-center pl-3 py-4">
            <i class="fas fa-user-shield text-white display-4"></i>
            
          </div>
           <h3 class="text-white text-center d-block font-weight-bold">Admin</h3>
           <h4 class="text-white text-center d-block">Login Form</h4>
        </div>
        <div class="col-6 p-3 py-5">
            <form method="post" action="{{ route('adminLogin') }}">
              @csrf

              <div class="form-group">
                <label class="form-control-label">Email</label>
                <input type="email" class="form-control" name="email" required="">
              </div>

              <div class="form-group">
                <label class="form-control-label">Password</label>
                <input type="password" class="form-control" name="password" required="">
              </div>

              <div class="form-group float-right">
                <input type="submit" class="btn btn-primary" value="Sign in" name="">
              </div>
            </form>
        </div>
      </div>
    </div>
  </body>
	

  <script type="text/javascript" src="{{ asset('js/app.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/template.js') }} "></script>

</html>