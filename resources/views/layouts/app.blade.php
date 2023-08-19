<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mock</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @livewireStyles
</head>
<body class="h-100 bg-light">
    <div class="w-100 h-100 d-flex">
        
        <div class="h-100 bg-primary p-2 shadow">
            @guest
            <span class="d-flex justify-content-center align-items-center py-3 px-2">
                <a href="{{ route('login') }}" >
                    <i class="fa-solid fa-arrow-right-to-bracket fs-1 text-white"></i>
                </a>
            </span>
            <span class="d-flex justify-content-center align-items-center py-3 px-2">
                <a href="{{ route('register') }}" >
                    <i class="fa-solid fa-user-plus fs-1 text-white"></i>
                </a>
            </span>
            @else
            <span>
                <img class="rounded-circle" src="https://cdn-icons-png.flaticon.com/512/168/168726.png" style="width: 50px" alt="">
            </span>
            <span class="d-flex justify-content-center align-items-center py-3 px-2">
                <a href="{{ route('panel') }}" >
                    <i class="fa-solid fa-magnifying-glass fs-1 text-white"></i>
                </a>
            </span>
            <span class="d-flex justify-content-center align-items-center py-3 px-2">
                <a href="{{ route('licitaciones') }}" >
                    <i class="fa-solid fa-briefcase fs-1 text-white"></i>
                </a>
            </span>
            <span class="d-flex justify-content-center align-items-center py-3 px-2">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a>
                    <i class="fa-solid fa-right-from-bracket fs-1 text-white" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"></i>
                </a>
            </span>
            @endguest
            
        </div>
        <div class="w-100 h-100 overflow-auto">
            @yield('content')
        </div>
    </div>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Mock
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
                    <ul class="navbar-nav me-auto">

                    </ul>

                  
                    <ul class="navbar-nav ms-auto">
                       
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    @livewireScripts
</body>
</html>


