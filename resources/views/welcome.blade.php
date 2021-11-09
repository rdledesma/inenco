<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="">



        <title>{{ config('app.name') }}</title>

		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">



        <!-- style -->

        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!-- style -->

        <!-- bootstrap -->

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- responsive -->

        <link href="css/responsive.css" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="css/effects/set2.css" rel="stylesheet" type="text/css">

        <link href="css/effects/normalize.css" rel="stylesheet" type="text/css">

        <link href="css/effects/component.css"  rel="stylesheet" type="text/css" >

	</head>



    <body>



    	<!-- header -->

        	<header role="header">

            	<div class="container">

                	<!-- logo -->

                    	<h1>

                        	<a href="{{ url('/') }}" title="GEERS"><img src="images/logo.png" width="400%" title="avana LLC" alt="GEERS"/></a>

                        </h1>

                    <!-- logo -->

                    <!-- nav -->
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @endauth
                    </div>
                    @endif
                    <nav role="header-nav" class="navy">

                        <ul>

                            <li class="nav-active"><a href="{{ url('/') }}" title="Work">Publicaciones</a></li>

                            <li ><a href="{{route('integrantes')}}" title="Integrantes">Integrantes</a></li>

                            <li><a href="blog.html" title="Blog">Recursos</a></li>

                            <li><a href="contact.html" title="Contact">Contacto</a></li>

                        </ul>

                    </nav>

                    <!-- nav -->

                </div>

            </header>

        <!-- header -->

        <!-- main -->

        <main role="main-home-wrapper" class="container">



            <div class="row">



            	<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content">

                    	<header>

                        	<h2><span>GEERS</span> Grupo de Estudio y Evaluación de la Radiación Solar  </h2>

                        </header>

                       {{--  <p>Aquí podemos escribir nombre de grupo o alguna frase identificatoria.</p>
 --}}
                    </article>

                </section>




                @foreach ($publications as $item)
                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<figure class="effect-oscar">

                    	<img src="{{$item->image_1}}" alt="" class="img-responsive"/>

                        <figcaption>

                        	<h3>{{$item->title}}</h3>

							<p class="lead"><small>{{ substr($item->copete, 0,  115).'...' }} </small></p>

							<a href="{{route('publication.ver', $item->id)}}">View more</a>

                        </figcaption>

                    </figure>

                </section>
                @endforeach
                <div class="clearfix"></div>

            </div>

        </main>

    	<!-- main -->

        <!-- footer -->

        <footer role="footer">

            <!-- logo -->


            <!-- logo -->

            <!-- nav -->

            <nav role="footer-nav">

            	<ul>

                	<li><a href="{{ url('/') }}" title="Work">Publicaciones</a></li>

                    <li><a href="{{ url('/integrantes') }}" title="Integrantes">Integrantes</a></li>

                    <li><a href="blog.html" title="Blog">Blog</a></li>

                    <li><a href="contact.html" title="Contact">Contacto</a></li>

                </ul>

            </nav>

            <!-- nav -->
            <!--
            <ul role="social-icons">

            	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>

            </ul>
            -->
            <p class="copy-right">&copy; 2021 Todos los derechos reservados</p>

        </footer>

        <!-- footer -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- custom -->

		<script src="js/nav.js" type="text/javascript"></script>

        <script src="js/custom.js" type="text/javascript"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/effects/masonry.pkgd.min.js"  type="text/javascript"></script>

		<script src="js/effects/imagesloaded.js"  type="text/javascript"></script>

		<script src="js/effects/classie.js"  type="text/javascript"></script>

		<script src="js/effects/AnimOnScroll.js"  type="text/javascript"></script>

        <script src="js/effects/modernizr.custom.js"></script>

        <!-- jquery.countdown -->

        <script src="js/html5shiv.js" type="text/javascript"></script>

    </body>

</html>
