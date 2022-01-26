<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #071c4d">
    <div class="container">
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
                <li class="nav-item mx-md-2 {{ Route::is('home') ? 'active' : '' }}">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="{{ route('home') }}">BOOKS</a>
                </li>
                <li class="nav-item mx-md-2 {{ Route::is('categories') ? 'active' : '' }}">
                    <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">CATEGORIES</a>
                </li>
            </ul>
                @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard <i class="fas fa-columns"></i></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure want to logout ?')">
                                        Logout <i class="fas fa-sign-out-alt"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endauth
        </div>
    </div>
</nav>