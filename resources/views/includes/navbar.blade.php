<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #071c4d">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ url('frontend/images/sis.png') }}" alt="logo">
            <span class="text-white">
                {{ trans('home.title.title') }}
            </span>
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
        </ul>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-3 ms-auto mb-2 mb-lg-0">
                {{-- SHOW lANGUAGE --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="language" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                        {{-- EN --}}
                        @switch(app()->getLocale())
                            @case('en')
                                <i class="flag-icon flag-icon-gb"></i>
                                @break
                            @case('id')
                                <i class="flag-icon flag-icon-id"></i>
                                @break
                            @default
                        @endswitch
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'en']) }}">
                                {{ trans('localization.en') }}
                                <i class="flag-icon flag-icon-gb"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'id']) }}">
                                {{ trans('localization.id') }}
                                <i class="flag-icon flag-icon-id"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mx-md-2 {{ Route::is('home') ? 'active' : '' }}">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="{{ route('home') }}">{{ trans('home.menu.books') }}</a>
                </li>
                <li class="nav-item mx-md-2 {{ Route::is('categories') ? 'active' : '' }}">
                    <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">{{ trans('home.menu.categories') }}</a>
                </li>
                @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ trans('home.menu.welcome') }}, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            @can('user')
                            
                            <li><a class="dropdown-item" href="{{ route('loan-user.index') }}">{{ trans('home.menu.transaction') }} <i class="fas fa-columns"></i></a></li>
                            <li><hr class="dropdown-divider"></li>
                            
                            @endcan

                            @can('admin')
                            
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">{{ trans('home.menu.dashboard') }} <i class="fas fa-columns"></i></a></li>
                            <li><hr class="dropdown-divider"></li>
                            
                            @endcan
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        {{ trans('home.menu.logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="fas fa-sign-in-alt"></i> {{ trans('home.menu.login') }}</a>
                    </li>
                </ul>
                @endauth
            </ul>
                
        </div>
    </div>
</nav>