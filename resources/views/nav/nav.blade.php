<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{route('home.index')}}" class="nav-link">Aplikasi Tabungan Siswa</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                <li class="nav-item dropdown d-flex">
                    <label class="text-muted pt-2" >
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </label>
                    <a class="nav-link dropdown-toggle pt-1" href=""  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('images/aktif2.png')}}" alt="" height="30" weight="30">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Nav Sidebar -->
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse show" style="">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active text-muted" href="{{route('home.index')}}">
                            <h4 class="font-weight-bold">
                                Home
                            </h4> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-muted" href="{{route('kelas.index')}}">
                            <h4 class="font-weight-bold">
                                Data Kelas
                            </h4> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-muted" href="{{route('nasabah.index')}}">
                            <h4 class="font-weight-bold">
                                Data Nasabah
                            </h4> 
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-muted" href=""  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h4 class="font-weight-bold">
                                Transaksi
                            </h4> 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('transaksi.setor.index')}}">
                                <h5 class="text-muted">
                                    Setor Tunai
                                </h5 > 
                            </a>
                            <a class="dropdown-item" href="{{route('transaksi.penarikan.index')}}">
                                <h5 class="text-muted">
                                    Penarikan
                                </h5> 
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!-- Main Content -->
        <div class="col-md-8">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</div>
