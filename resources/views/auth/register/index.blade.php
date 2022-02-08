<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS LIBRARY | {{ $title }}</title>
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <!-- Custom fonts for this template-->
    <link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ ('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/style/main.css') }}">
    <link href="{{ url('frontend/style/signin.css') }}" rel="stylesheet">

</head>

<body style="background-color: #071c4d">
  {{-- <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #071c4d">
        <div class="container">
            <a class="navbar-brand" href="#">
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
                        <a class="nav-link" href="#books">BOOKS</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">CATEGORIES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row justify-content-center">
      <div class="col-lg-4">

        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade-show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
          </div>
        @endif

        <main class="form-registration mt-5">
          <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
            <form action="/register" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <div class="form-group">
                  <label for="roles" class="form-label">Roles</label>
                  <div class="form-check">
                    <input class="form-check-input @error('roles') is-invalid @enderror" type="radio" name="roles" id="roles" value="User" {{ old('roles') == 'User' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="roles">
                      User
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input @error('roles') is-invalid @enderror" type="radio" name="roles" id="roles" value="Admin" {{ old('roles') == 'Admin' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="roles">
                      Admin
                    </label>
                  </div>
                  @error('roles')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login!</a></small>
        </main>
      </div>
    </div> --}}

    <div class="container">

      @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade-show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
          </div>
        @endif

      <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                  <div class="col-lg-7">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Register</h1>
                          </div>
                          <form action="/register" method="post" class="user">
                            @csrf
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" required value="{{ old('name') }}">
                                      @error('name')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                      @enderror
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                                    @error('username')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                  </div>
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                                @error('email')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                @error('password')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-group row">
                                <div class="form-check col-sm-4 mb-3 mb-sm-0">
                                  <input class="form-check-input @error('roles') is-invalid @enderror" type="radio" name="roles" id="roles" value="User" {{ old('roles') == 'User' ? 'checked' : '' }} required>
                                  <label class="form-check-label" for="roles">
                                    User
                                  </label>
                                </div>
                                <div class="form-check col-sm-4 mb-3 mb-sm-0">
                                  <input class="form-check-input @error('roles') is-invalid @enderror" type="radio" name="roles" id="roles" value="Admin" {{ old('roles') == 'Admin' ? 'checked' : '' }} required>
                                  <label class="form-check-label" for="roles">
                                    Admin
                                  </label>
                                </div>
                                @error('roles')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <button class="btn btn-primary btn-user btn-block" type="submit">Register!</button>
                              <hr>
                          </form>
                          <div class="text-center">
                              <a class="small" href="/login">Already have an account? Login!</a>
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
    <script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('backend/js/sb-admin-2.min.js') }}"></script>

    @include('sweetalert::alert')

</body>

</html>