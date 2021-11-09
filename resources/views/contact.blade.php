<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="">



        <title>GEERS | Contacto</title>

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

        <link href="css/set2.css" rel="stylesheet" type="text/css">

        <link href="css/normalize.css" rel="stylesheet" type="text/css">

	</head>



    <body>
        @if (session('succes_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>

        @endif


    	<!-- header -->

        	<header role="header">

            	<div class="container">

                	<!-- logo -->

                    	<h1>

                        	<a href="{{ url('/') }}" title="GEERS"><img src="images/logo.png" width="400%" title="GEERS" alt="GEERS"/></a>

                        </h1>

                    <!-- logo -->

                    <!-- nav -->

                    <nav role="header-nav" class="navy">

                        <ul>

                            <li ><a href="{{ url('/') }}" title="Work">Publicaciones</a></li>

                            <li ><a href="{{route('integrantes')}}" title="Integrantes">Integrantes</a></li>

                            <li><a href="blog.html" title="Blog">Recursos</a></li>

                            <li class="nav-active"><a href="{{route('contact')}}" title="Contacto">Contacto</a></li>

                        </ul>

                    </nav>

                    <!-- nav -->

                </div>

            </header>

        <!-- header -->

        <!-- main -->

        <main role="main-inner-wrapper" class="container">



            <div class="row">



            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content" class="contact-header">

                    	<header>

                        	<h2><span>GEERS</span> Te agradecemos por visitar nuestro sitio.</h2>

                        </header>

                        <p><a href="tel:3877777777"><i class="fa fa-phone" aria-hidden="true"></i> +543870000000</a><a href="mailto:direccion@email.com"><i class="fa fa-envelope" aria-hidden="true"></i>direccion@email.com</a></p>

                    </article>

                </div>

                <!-- map -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="demo-wrapper">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d538.7037693135063!2d-65.40955891499512!3d-24.728509302568174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc1141c467c7d%3A0x8f1116f7c4a76c86!2sFacultad%20de%20Ciencias%20Exactas%20-%20UNSa!5e0!3m2!1ses-419!2sar!4v1636462432312!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                        </div>

                </div>

                <!-- map -->

                <div class="clearfix"></div>



               <!-- contat-from-wrapper -->

               <div class="contat-from-wrapper">

               		  <div id="message"></div>

                                <form method="post" action="{{route('message.store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">

                                        <input  name="name" id="name" type="text" placeholder="Nombre">

                                        </div>

                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">

                                        <input  name="email" id="email" type="email"  placeholder="Email">

                                        </div>

                                    </div>

                                    <div class="clearfix"></div>

                                    <textarea name="message" id="message" cols="" rows="" placeholder="Dejanos tu mensaje"></textarea>

                                    <div class="clearfix"></div>

                                    <input name="" type="submit" value="Enviar email">

                                    <div id="simple-msg"></div>

                                </form>

               </div>

               <!-- contat-from-wrapper -->





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

                    <li><a href="blog.html" title="Blog">Blog</a></li>

                    <li><a href="{{route('contact')}}" title="Contacto">Contacto</a></li>

                </ul>

            </nav>

            <!-- nav -->



            <p class="copy-right">&copy; 2021 Todos los derechos reservados</p>

        </footer>

        <!-- footer -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- custom -->



        <script src="js/custom.js" type="text/javascript"></script>

		<script src="js/jquery.contact.js" type="text/javascript"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

		<script src="js/maps.js" type="text/javascript"></script>

        <script src="js/nav.js" type="text/javascript"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <!-- jquery.countdown -->

        <script src="js/html5shiv.js" type="text/javascript"></script>
        @include('sweetalert::alert')
    </body>

</html>
