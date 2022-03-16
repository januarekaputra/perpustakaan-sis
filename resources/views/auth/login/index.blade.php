<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS LIBRARY | {{ $title }}</title>
    {{-- <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ url('frontend/style/main.css') }}">
    <link href="{{ url('frontend/style/signin.css') }}" rel="stylesheet">
    <link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> --}}

    <!-- Custom fonts for this template-->
    <link href="{{ url ('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url ('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

  </head>
  
  <body style="background-color: #071c4d">
    {{-- <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #071c4d">
      <div class="container-fluid">
          <a class="navbar-brand" href="/">
              <img src="{{ url('frontend/images/sis.png') }}" alt="logo">
              <span class="text-white">
                  SANUR INDEPENDENT SCHOOL LIBRARY
              </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Menu -->
          <div class="collapse navbar-collapse" id="navb">
              <ul class="navbar-nav me-3 ms-auto mb-2 mb-lg-0">
                  <li class="nav-item mx-md-2">
                      <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">BOOKS</a>
                  </li>
                  <li class="nav-item mx-md-2">
                      <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">CATEGORIES</a>
                  </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i class="fas fa-sign-in-alt"></i> LOGIN!</a>
                </li>
            </ul>
          </div>
      </div>
    </nav>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-5">
        @if (session()->has('danger'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <main class="form-signin">
          <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          <form action="/login" method="POST">
            @csrf
            <div class="form-floating">
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}" name="username" autofocus>
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control @error('username') is-invalid @enderror" id="password" placeholder="Password" name="password">
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
        </main>
      </div>
    </div> --}}

    <div class="container">

      @if (session()->has('danger'))
          <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
            {{ session('danger') }}
          </div>
        @endif

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
                                      <h1 class="h4 text-gray-900 mb-4">Please Login!</h1>
                                  </div>
                                  <form action="/login" method="POST">
                                    @csrf
                                      <div class="form-group">
                                        <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}" name="username" autofocus>
                                        @error('username')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                                        @error('password')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                      </div>
                                      <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                                      <hr>
                                  </form>
                                  <div class="text-center">
                                    <a class="small text-decoration-none" href="/register">Register to Join a Member</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>

    <script src="{{ url('frontend/libraries/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url ('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url ('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url ('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url ('backend/js/sb-admin-2.min.js') }}"></script>

    @include('sweetalert::alert')

</body>

</html>