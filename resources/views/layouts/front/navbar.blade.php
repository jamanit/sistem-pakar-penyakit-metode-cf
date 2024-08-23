<nav class="main-header navbar navbar-expand navbar-white navbar-dark bg-success" style="margin-left: 0px !important;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <a href="{{ url('/') }}" class="brand-link pb-0 pt-0 bg-success">
            <span class="brand-text font-weight-light font-weight-bold text-uppercase h6">{{ config('app.name', 'App Name') }}</span>
        </a>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-in-right"></i> {{ __('Login') }}
                    </a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user"></i> {{ Auth::user()->name }} ({{ Auth::user()->level->level_name }})
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-in-left"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

    </ul>
</nav>
