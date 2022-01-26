<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS LIBRARY | {{ $title }}</title>
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ url('frontend/style/main.css') }}">
    <link href="{{ url('frontend/style/signin.css') }}" rel="stylesheet">

</head>

<body>
  <!-- Navbar -->
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
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
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
    </div>

    <script src="{{ url('frontend/libraries/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>

    @include('sweetalert::alert')

</body>

</html>