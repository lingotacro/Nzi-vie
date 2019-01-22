@extends('layouts.index_lay')
@section('index_lay')

    <header class="header header2 transparent custom sticky-header">
        <div class="header-inner">
            <div class="container">
                <a href="index.html" class="site-logo" title="">
                    <img src="{{asset('img/logo.png')}}" width="125" height="30" alt="NSIA Assurance">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-container" aria-expanded="false">
                    <span class="toggle-text">Menu</span>
                    <span class="toggle-wrapper">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                </button>

                <div class="collapse navbar-collapse max-height" id="main-nav-container">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="{{url('/')}}" class="dropdown-toggle" aria-expanded="false">
                                Accueil
                            </a>
                        </li>

                        <li class="dropdown megamenu-container">
                            <a href="{{url('/a-propos')}}" role="button" aria-expanded="false">Découvrez-nous</a>
                        </li>
                        <li class="dropdown megamenu-container">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nos produits</a>
                            <div class="dropdown-menu megamenu" role="menu">

                                @include('patials._authers_header_prod')
                                <!-- End .container -->
                            </div><!-- End .megamenu -->
                        </li>
                        <li class="dropdown megamenu-container">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Actualités</a>
                        </li>
                        <li class="dropdown megamenu-container">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Espace Client</a>
                        </li>
                        <li class="dropdown megamenu-container">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FAQS</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('/contact')}}" class="dropdown-toggle" aria-expanded="false">Contact</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="btn btn-nsia-orange-1" aria-expanded="false"><i class="fa fa-map-marker"></i> Localisez un agent</a>
                        </li>
                    </ul>
                </div><!-- /Menu -->

            </div><!-- Fin .container -->
        </div><!-- Fin .header-inner -->
    </header><!-- Fin .header -->

    <!-- corps de la page -->
    <div id="pagepiling">
        <div class="section" id="section1">
            <img class="mySlides w3-animate-fading" src="{{asset('img/20ans-NSIABEBE-ok-.jpg')}}" style="width:100%">
            <img class="mySlides w3-animate-fading" src="{{asset('img/20ans-mariage-.jpg')}}" style="width:100%">
            <!--<div class="" id="section1" style="background-color: #00438b;">-->
            <div class="section-intro">
                <span class="NSIA-title" style=" font-size:35px;">Bienvenue dans l'univers NSIA VIE ASSURANCES Côte d'Ivoire !</span>
                <article class="NSIA-substitle">
                    <a href="#" class="btn btn-primary btn-nsia-orange" style="margin: 10px;">
                        Demander à être contacté par un conseiller client </a>
                </article>
            </div><!-- End .section-intro -->
        </div><!-- End .section -->

    </div><!-- End #pagepiling -->
    <!-- / fin corps de la page -->

    <footer class="footer">
        <div class="footer-bottom container" style="width: 100%!important;">
            <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                <img src="{{asset('img/logo__.png')}}" class="img-responsive" width="100" style="margin-left: 2em;  margin-top: -10px !important;"/>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2 pull-right">
                <img src="{{asset('img/ISO_9001.png')}}" class="img-responsive" width="100" style="margin-right: 2em; margin-top: -10px !important;"/>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <div class="footer-right">
                    <ul class="footer-menu">
                        <li><a href="#">Réseau Individuel	</a></li>
                        <li><a href="#">Corporate</a></li>
                        <li><a href="#">Bancassurance</a></li>
                    </ul>
                </div><!-- End .footer-right -->

                <p class="copyright">&copy; NSIA Vie - 2018 | Dévéloppé par <a href="http://jarstechnologies.com/" target="_blank" title="jars technologies">Jars technologies</a>.</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2 pull-right">
						<span style="float: right; margin-right: 8em; background: rgba(0,0,0,0.5) ! important; border-radius:15px ; padding:5px;">
						 <div class="social-icons">
                            <a href="#" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i> | </a>
                            <a href="#" class="social-icon" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i> | </a>
                            <a href="#" class="social-icon" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div><!-- End .social-icons -->
						</span>
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->

    <a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>



    @stop
