<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <!-- {{ config('app.name', 'Laravel') }} Admin -->
            <img src="{{asset('images/logo.png')}}" alt="Imagen Logo" width="100px"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-md-column" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                    <li class="nav-item">
                        <a  class="nav-link {{Route::is('welcome') ? 'active' : '' }} " href="{{url('/')}}">INICIO</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{Route::is('integrantes') ? 'active' : '' }} " href="{{url('/integrantes')}}">INTEGRANTES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{Route::is('contact') ? 'active' : '' }} " href="{{url('/contacto')}}">CONTACTO</a>
                    </li>


            </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link {{Route::is('articulos') ? 'active' : '' }}" href={{route('articulos')}}>ARTÍCULOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('proyectos') ? 'active' : '' }}" href={{route('proyectos')}}>PROYECTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('recursos') ? 'active' : '' }} " href="{{route('recursos')}}">RECURSOS</a>
                    </li>
                </ul>

        </div>

    </div>
</nav>
