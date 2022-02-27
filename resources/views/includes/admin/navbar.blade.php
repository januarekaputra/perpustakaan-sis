<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<a class="navbar-brand" href="{{ route('dashboard') }}">
    <img src="{{ url('frontend/images/sis.png') }}" alt="logo" style="width: 50px">
    <span class="text-black" style="font-size: 15px">
        SANUR INDEPENDENT SCHOOL LIBRARY
    </span>
</a>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome, {{ auth()->user()->name }}</span>
            <img class="img-profile rounded-circle" src="{{ url('backend/img/undraw_profile.svg') }}">
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('home') }}">Home <i class="fas fa-columns"></i></a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        Logout <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </li>
        </ul>
    </li>
</ul>

</nav>
<!-- End of Topbar -->