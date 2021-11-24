<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div id="app" >
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <!-- {{ config('app.name', 'Laravel') }} Admin -->
                            <img src="{{asset('images/logo.png')}}" alt="Imagen Logo" width="100px"/>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                    <li class="nav-item">
                                        <a  class="nav-link h5 {{Route::is('welcome') ? 'active' : '' }} " href="{{url('/')}}">INICIO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link h5 {{Route::is('investigation.index') ? 'active' : '' }} " href="{{route('investigation.index')}}">INVESTIGACIÓN</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link h5 {{Route::is('integrantes') ? 'active' : '' }} " href="{{url('/integrantes')}}">INTEGRANTES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h5 {{Route::is('recursos') ? 'active' : '' }} " href="{{route('recursos')}}">RECURSOS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h5 {{Route::is('contact') ? 'active' : '' }} " href="{{url('/contacto')}}">CONTACTO</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <main class="py-4">
                    @yield('content')
                </main>
    </div>
    @yield('scripts')
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
