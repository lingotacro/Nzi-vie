<header class="header sticky-header">
    <div class="header-top">
        <div class="container">
            <ul class="top-menu pull-right">
                <li><a href="">Carrière</a></li>
                <li class="active"><a href="">NSIA VIE Côte d'Ivoire récrute</a></li>
            </ul>

            <div class="top-text pull-left hidden-sm hidden-xs">
                Bienvenue dans l'univers NSIA VIE Côte d'Ivoire !
            </div><!-- End .top-text -->

            <div class="top-links pull-left">
                <a href="#">Se connecter</a>
                <a href="#">Demander à être rappellé</a>
            </div><!-- End .top-links -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-inner">
        <div class="container">
            <a href="{{url('/')}}" class="site-logo" title="">
                <img src="{{asset('img/logo.png')}}" width="125" alt="">
            </a>

            {{--<div class="header-info-boxes">--}}
                {{--<div class="col-md-5">--}}
                    {{--<a href="{{route('cotation')}}" class="btn btn-primary btn-nsia-orange btn-nsia-rounded nsia-p-10-em nsia-m-mt-1-em">--}}
                        {{--Demander une cotation en ligne.--}}
                    {{--</a>--}}
                {{--</div><!-- End .header-info-box -->--}}

                {{--<div class="col-md-1"> </div>--}}
            {{--</div><!-- End header-info-boxes -->--}}
        </div><!-- End .container -->
    </div><!-- End .header-inner -->

    <div class="header-bottom dark">
        <div class="container">
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
                    <li class="dropdown {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{url('/')}}" class="dropdown-toggle" aria-expanded="false">
                            Accueil
                        </a>
                    </li>

                    <li class="dropdown {{ (\Request::route()->getName() == 'about') ? 'active' : '' }}">
                        <a href="{{url('/a-propos')}}" class="dropdown-toggle" aria-expanded="false">
                            Découvrez-nous
                        </a>
                    </li>

                    <li class="dropdown megamenu-container {{ (\Request::route()->getName() == 'cotation') ? 'active' : '' }}">
                        <a href="{{route('cotation')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nos produits<span class="angle"></span></a>
                        <div class="dropdown-menu megamenu" role="menu">

                            @include('patials._authers_header_prod')
                            <!-- End .container -->
                        </div><!-- End .megamenu -->
                    </li>
                    <li class="dropdown {{ (\Request::route()->getName() == 'actualite') ? 'active' : '' }}">
                        <a href="{{route('actualite')}}" class="dropdown-toggle" aria-expanded="false">
                            Actualités
                        </a>
                    </li>
                    {{--<li class="dropdown">--}}
                        {{--<a href="" class="dropdown-toggle" aria-expanded="false">--}}
                            {{--Espace Client--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="" class="dropdown-toggle" aria-expanded="false">--}}
                            {{--FAQS--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="dropdown {{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}">
                        <a href="{{url('/contact')}}" class="dropdown-toggle" aria-expanded="false">
                            Contact
                        </a>
                    </li>
                    {{--<li class="dropdown">--}}
                        {{--<a href="" class="dropdown-toggle" aria-expanded="false">--}}
                            {{--Localisez un agent--}}
                        {{--</a>--}}
                    {{--</li>--}}

                </ul>
            </div><!-- /Menu -->
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
