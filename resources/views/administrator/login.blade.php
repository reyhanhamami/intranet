<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Intranet - Login</title>
  <link rel="shortcut icon" href="{{ url('public/assets/img/favicon.png')}}">
  <!-- Custom fonts for this template-->
  <link href="{{ url('public/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('public/assets/css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">أهلا و سهل!ا</h1>
                  </div>
                  @if(session('gagal'))
                    <div class="alert alert-danger">
                      {{session('gagal')}}
                    </div>
                  @endif()
                  <form class="user" method="post" action="{{ route('login')}}">
                  @csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" autofocus required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="pswd" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <!-- <div class="custom-control custom-checkbox small"> -->
                        <!-- <input type="checkbox" class="custom-control-input" id="customCheck" name="remember"> -->
                        <h6 class="border-bottom py-4"></h6>
                      <!-- </div> -->
                    </div>
                    <button type="submit" class="btn btn-user btn-primary btn-block">Login</button>
                    <hr>
                
                  </form>
                  <!-- <hr> -->
                  <div class="text-center">
                    <a class="small" href="https://bwa.id">Copyright &copy;2019 - IT BWA</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('public/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('public/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('public/assets/js/sb-admin-2.min.js')}}"></script>
  
</body>

</html>
