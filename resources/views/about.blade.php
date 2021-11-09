<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="">



        <title>{{ config('app.name') }} | Integrantes</title>


		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">



        <!-- style -->

        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!-- style -->

        <!-- bootstrap -->

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- responsive -->

        <link href="css/responsive.css" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="css/fonts.css" rel="stylesheet" type="text/css">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- font-awesome -->



	</head>



    <body>



    	<!-- header -->

        	<header role="header">

            	<div class="container">

                	<!-- logo -->

                    	<h1>

                        	<a href="/" title="INENCO"><img src="images/logo.png" width="400%" title="INENCO" alt="inenco"/></a>

                        </h1>

                    <!-- logo -->

                    <!-- nav -->

                    <nav role="header-nav" class="navy">

                        <ul>

                            <li><a href="{{ url('/') }}" title="Work">Publicaciones</a></li>

                            <li class="nav-active"><a href="{{route('integrantes')}}" title="Integrantes">Integrantes</a></li>

                            <li><a href="blog.html" title="Blog">Recursos</a></li>

                            <li><a href="{{route('contact')}}" title="Contacto">Contacto</a></li>

                        </ul>

                    </nav>

                    <!-- nav -->

                </div>

            </header>

        <!-- header -->

        <!-- main -->

        <main role="main-inner-wrapper" class="container">



            <div class="row">



            	<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content">

                    	<header>

                        	<h2><span>Sobre nosotros</span></h2>

                        </header>

                        <p>Over 40,000 customers use our themes to power their websites and we love them.</p>

                    </article>

                </section>



                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                	<article class="about-content">

                    	<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc, fiant sollemnes in futurum.</p>

                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consueum formas humanitatis per seacula quarta deciEodem modo tythepi, qui nunc, fiant sollemnes in futurum.</p>

                    </article>

                </section>



                <div class="clearfix"></div>



                <!-- thumbnails -->

                	<div class="thumbnails-pan">

                        @foreach ($integrants as $integrant)
                            <section class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                                <figure>

                                    <img src="{{$integrant->url_photo}}" class="img-responsive"/>

                                    <figcaption>
                                        <h3>{{$integrant->title }}</h3>
                                        <h5>{{$integrant->name}} </h5>
                                        <h5>{{$integrant->email}} </h5>
                                    </figcaption>

                                </figure>

                            </section>
                        @endforeach




                        <section class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">

                        	<figure>

                            	<img src="images/about-images/about-image-2.jpg" class="img-responsive"/>

                            	<figcaption>

                                	<h3>kristy Roan</h3>

                                    <h5>The Manager</h5>

                                </figcaption>

                            </figure>

                        </section>

                        <section class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">

                        	<figure>

                            	<img src="images/about-images/about-image-3.jpg" class="img-responsive"/>

                            	<figcaption>

                                	<h3>Jason takas</h3>

                                    <h5>The Founder</h5>

                                </figcaption>

                            </figure>

                        </section>





                    </div>

                <!-- thumbnails -->





            </div>

        </main>

    	<!-- main -->

        <!-- footer -->

        <footer role="footer">
            <!-- nav -->

            <nav role="footer-nav">

            	<ul>

                	<li><a href="{{ url('/') }}" title="Work">Publicaciones</a></li>

                    <li><a href="{{ url('/integrantes') }}" title="Integrantes">Integrantes</a></li>

                    <li><a href="blog.html" title="Blog">Recursos</a></li>

                    <li><a href="{{route('contact')}}" title="Contacto">Contacto</a></li>

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

        <!-- jquery.countdown -->

        <script src="js/html5shiv.js" type="text/javascript"></script>

    </body>

</html>
