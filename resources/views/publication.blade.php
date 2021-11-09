<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="">



        <title>GEERS</title>

		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">



        <!-- style -->

        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

        <!-- style -->

        <!-- bootstrap -->

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

        <!-- responsive -->

        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">

        <!-- font-awesome -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="{{asset('css/effects/set2.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('css/effects/normalize.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('css/effects/component.css')}}"  rel="stylesheet" type="text/css" >

	</head>



    <body>



    	<!-- header -->

        	<header role="header">

            	<div class="container">

                	<!-- logo -->

                    	<h1>

                        	<a href="{{ url('/') }}" title="avana LLC"><img src="{{{asset('images/logo.png')}}}" width="400%" title="GEERS" alt="GEERS"/></a>

                        </h1>

                    <!-- logo -->

                    <!-- nav -->

                    <nav role="header-nav" class="navy">

                        <ul>

                            <li><a href="{{ url('/') }}" title="Work">Publicaciones</a></li>

                            <li><a href="{{route('integrantes')}}" title="About">Integrantes</a></li>

                            <li><a href="blog.html" title="Blog">Recursos</a></li>

                            <li><a href="contact.html" title="Contact">Contacto</a></li>

                        </ul>

                    </nav>

                    <!-- nav -->

                </div>

            </header>

        <!-- header -->

        <!-- main -->

        <main role="main-inner-wrapper" class="container">







                <!-- work details -->

                	<div class="work-details">



                        <div class="row">


                            <div class="col-xs-12 col-sm-12 col-md-4">

                            	<header role="work-title">

                                	<h2>{{$publication->title}}</h2>
                                    <p> <strong> {{$publication->copete}}</strong></p>
                                    <img class="img-responsive" src="{{$publication->image_1}}" alt="image text">

                                </header>


                            </div>
                            <div class="col-md-8">
                            {!!$publication->description!!}

                            </div>



                    </div>

                <!-- work details -->





        </main>

    	<!-- main -->

        <!-- footer -->

        <footer role="footer">

            <!-- nav -->

            <nav role="footer-nav">

            	<ul>

                    <li ><a href="/" title="Publicaciones">Publicaciones</a></li>

                    <li><a href="about.html" title="Integrantes">Integrantes</a></li>

                    <li><a href="blog.html" title="Recursos">Recursos</a></li>

                    <li><a href="contact.html" title="Contacto">Contacto</a></li>

                </ul>

            </nav>

            </ul>

            <p class="copy-right">&copy; Todos los derechos reservados</p>

        </footer>

        <!-- footer -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>

        <!-- custom -->

		<script src="{{asset('js/nav.js')}}" type="text/javascript"></script>

        <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('js/effects/masonry.pkgd.min.js')}}"  type="text/javascript"></script>

		<script src="{{asset('js/effects/imagesloaded.js')}}"  type="text/javascript"></script>

		<script src="{{asset('js/effects/classie.js')}}"  type="text/javascript"></script>

		<script src="{{asset('js/effects/AnimOnScroll.js')}}"  type="text/javascript"></script>

        <script src="{{asset('js/effects/modernizr.custom.js')}}"></script>

        <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    </body>

</html>
