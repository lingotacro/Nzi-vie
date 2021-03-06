<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JARS TECHNOLOGIES">
    <meta name="author" content="ECOMASSUR">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="2">
    <meta name="entite-id" content="">
    <meta name="is-resp" content="0">
    <meta name="user-uuid" content="362f394e-ce46-4611-954d-c1008482768a">

    <!-- App favicon -->
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <!-- App title -->
    <title>{{ config('app.name', 'NSIA') }} {{isset($title) ? ' | '. $title  : ''}}</title>

    <!-- Table Responsive css -->
    <link href="../plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('plugins/switchery/switchery.min.css')}}">


    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-83057131-1', 'auto');
        ga('send', 'pageview');

    </script>

    <style>
        #my-loading {
            position: fixed;
            display: block;
            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background-color: rgba(0, 0, 0, .83);
            z-index: 9999;
        }

        #my-loading .loader_div {
            position: fixed;
            display: block;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }

        #my-loading .loader_div svg {
            width: 300px;
            height: 300px;
        }
    </style>
</head>


<body class="fixed-left">
<div class="hidden">1</div>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="spinner-wrapper">
                <div class="rotator">
                    <div class="inner-spin"></div>
                    <div class="inner-spin"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Loader -->
<div style="display: none" id="my-loading">
    <div class="loader_div">
        <!-- By Sam Herbert (@sherb), for everyone. More @ http://goo.gl/7AJzbL -->
        <svg viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                    <stop stop-color="#ff0000" stop-opacity="0" offset="0%"/>
                    <stop stop-color="#ff0000" stop-opacity=".631" offset="63.146%"/>
                    <stop stop-color="#ff0000" offset="100%"/>
                </linearGradient>
            </defs>
            <g fill="none" fill-rule="evenodd">
                <g transform="translate(1 1)">
                    <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                        <animateTransform
                            attributeName="transform"
                            type="rotate"
                            from="0 18 18"
                            to="360 18 18"
                            dur="0.9s"
                            repeatCount="indefinite"/>
                    </path>
                    <circle fill="#ff0000" cx="36" cy="18" r="1">
                        <animateTransform
                            attributeName="transform"
                            type="rotate"
                            from="0 18 18"
                            to="360 18 18"
                            dur="0.9s"
                            repeatCount="indefinite"/>
                    </circle>
                </g>
            </g>
        </svg>
        <!-- <img src="img/svg-loaders/puff.svg" alt="" /> -->
    </div>
</div>
<!-- Fin Loader -->

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="http://localhost/servo" class="logo">

                <i class="mdi mdi-cube"></i>
            </a>
            <!-- Image logo -->
            <a href="" class="logo">
            <span>
                <img class="" src="{{asset('img/logo__.png')}}" height="50px;"/>
            </span>
            </a>

        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Navbar-left -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

                <!-- Right(Notification) -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge up bg-danger" id="count-notif">0</span>
                        </a>
                        <ul id="bloc-notification" style="max-height: 345px; overflow-y: auto"
                            class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                            <li id="header-notifications">
                                <h5>Notifications</h5>
                            </li>

                            <li class="all-msgs text-center">
                                <p class="m-0"><a>Aucune notification </a></p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-email"></i>
                            <span class="badge up bg-danger" id="count-notif">0</span>
                        </a>
                        <ul id="bloc-notification" style="max-height: 345px; overflow-y: auto"
                            class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                            <li id="header-notifications">
                                <h5>Courriers</h5>
                            </li>

                            <li class="all-msgs text-center">
                                <p class="m-0"><a>Aucun nouveau courrier </a></p>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown user-box">
                        <a href="#" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown"
                           aria-expanded="true">
                            <img src="{{asset('img/user-default.png')}}" alt="user-img" class="img-circle user-img">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li><h5>Bonjour, {{ Auth::user()->name}}</h5></li>
                            <li><a href="profil"><i class="ti-user m-r-5"></i> Profil</a></li>
                            <li><a href="compte"><i class="ti-lock m-r-5"></i> Mon compte</a></li>


                            <li>
                                <form action="logout" method="POST">
                                    <input type="hidden" name="_token" value="YPwU8iypLUOXFRAoW53VsVAlZ8S3sB4QoeN238js">
                                    <button class="btn btn-danger btn-block waves-effect waves-light"><i
                                            class="ti-power-off m-r-5"></i> Déconnexion
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul> <!-- end navbar-right -->

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <div class="user-details">
                    <div class="overlay"></div>
                    <div class="text-center">
                        <img src="{{asset('img/user-default.png')}}" alt="profil" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <div>
                            <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">{{ Auth::user()->name }}
                                <span class="label label-danger">Administrateur</span>
                                <span class="mdi mdi-menu-down"></span></a>
                        </div>
                    </div>
                </div>
                <div class="dropdown" id="setting-dropdown">
                    <ul class="dropdown-menu">
                        <li><a href="profil"><i class="mdi mdi-account m-r-5"></i>Profil</a></li>
                        <li><a href="compte"><i class="mdi mdi-lock m-r-5"></i>Mon compte</a></li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-inverse waves-effect waves-light" type="submit"><i
                                        class="mdi mdi-logout m-r-5"></i> Déconnexion
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul style="border-top: 30px solid #cc992d; border-bottom: 30px solid #cc992d;">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="http://localhost/servo" class="waves-effect">
                            <i class="fa fa-home"></i> <span>Accueil </span>
                        </a>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa fa-cogs"></i>
                            <span> Paramètres généraux</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">

                            <li>
                                <a href="{{route('social')}}" class="waves-effect"><i class="mdi mdi-invert-colors m-r-5"></i>
                                    Réseau sociaux </a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Emploi
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="services-entreprise" class="waves-effect"> Service </a>
                                    </li>
                                    <li>
                                        <a href="fonctions" class="waves-effect"> Fonction </a>
                                    </li>
                                    <li>
                                        <a href="professions" class="waves-effect"> Profession </a>
                                    </li>
                                    <li>
                                        <a href="activites-professionnelles" class="waves-effect"> Activité
                                            professionnelle </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Assignation
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="entites" class="waves-effect"> Entités </a>
                                    </li>
                                    <li>
                                        <a href="roles" class="waves-effect"> Attributions </a>
                                    </li>
                                    <li>
                                        <a href="permissions" class="waves-effect"> Permissions </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Courrier
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="objets">Objet courrier</a></li>
                                    <li><a href="type-courriers">Type courrier</a></li>
                                    <li><a href="nature-courriers">Nature courrier</a></li>
                                    <li><a href="type-dossiers">Type Dossier</a></li>
                                </ul>
                            </li>


                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="mdi mdi-newspaper"></i>
                            <span> Actualité</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">

                            <li>
                                <a href="{{route('admin-actu-add')}}" class="waves-effect"><i class="mdi mdi-plus"></i>
                                    Ajouter</a>
                            </li>
                            <li class="has_sub">
                                <a href="{{route('admin-actu-shw')}}" class="waves-effect"><i
                                        class="mdi mdi-format-list-numbers"></i> Liste </a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Catégories
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li class="has_sub">
                                        <a href="" class="waves-effect" data-toggle="modal"
                                           data-target="#basicExampleModal">Créer</a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="" class="waves-effect">Liste</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <!--    MODAL D'AJOUT DE CATEGORIE ACTUALITE-->
                    <!-- Modal -->
                    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true" style="margin-top: 70px;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                    <!-- Material form contact -->
                                    <div class="card">
                                        <h5 class="card-header info-color white-text text-center py-4">
                                            <strong>Ajouter une ctégorie d'actualité</strong>
                                        </h5>
                                        <!--Card content-->
                                        <form class="text-center" method="post" action="{{route('admin-cat-actu-str')}}"
                                              style="color: #757575;">
                                            @csrf
                                            <div class="md-form mt-3">
                                                <label for="materialContactFormName">Titre</label>
                                                <input type="text" id="materialContactFormName" name="titre"
                                                       class="form-control" required>
                                            </div>
                                            <div class="card-body px-lg-5 pt-0">
                                            </div>
                                            <div class="modal-footer"
                                                 style="margin-top: 20px; border-top: 0px!important;">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    Annuler
                                                </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!--    //MODAL D'AJOUT DE CATEGORIE ACTUALITE-->


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa fa-product-hunt"></i>
                            <span> Production</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li class="has_sub">
                                <a href="agendas" class="waves-effect"><i class="mdi mdi-invert-colors m-r-5"></i>
                                    prospections</a>
                            </li>
                            <li class="has_sub">
                                <a href="questionnaire" class="waves-effect"><i class="mdi mdi-invert-colors m-r-5"></i>
                                    Questionnaires</a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Emissions
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li class="has_sub">
                                        <a href="affaire-nouvelle-auto-mono" class="waves-effect">Automobile </a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="sante-compagnie" class="waves-effect"> Santé </a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="vie-contrat" class="waves-effect"> Vie </a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="affaire-nouvelle-risque-divers" class="waves-effect"> Divers </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Sinistres
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li class="has_sub">
                                        <a href="sinistre/declaration" class="waves-effect">Déclaration</a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="sinistre/suivi" class="waves-effect">Suivi</a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="sinistre/r%C3%A8glement" class="waves-effect">Règlement</a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Statistiques</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa fa-credit-card"></i>
                            <span> Comptabilité</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Caisse
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="encaissements" class="waves-effect">Encaissement </a>
                                    </li>
                                    <li>
                                        <a href="decaissements" class="waves-effect">Décaissement </a>
                                    </li>
                                    <li>
                                        <a href="approvisionnements" class="waves-effect">Approvisionnement </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Banque
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="remises" class="waves-effect">Remises </a>
                                    </li>
                                    <li>
                                        <a href="virements" class="waves-effect">Virements </a>
                                    </li>
                                    <li>
                                        <a href="rapprochements" class="waves-effect">Rapprochements </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Compagnie
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="waves-effect">Reversements </a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect">
                                            <span> Commissions </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Attendues</a></li>
                                            <li><a href="#">Payées</a></li>
                                            <li><a href="#">Dues</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Opérations diverses </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Gest. Attestations
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li class="has_sub">
                                        <a href="demandes" class="waves-effect">
                                            <span> Demandes </span>
                                        </a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="enregistrements" class="waves-effect">
                                            <span> Enregistrements </span>
                                        </a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="suivis" class="waves-effect">
                                            <span> Suivis </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa fa-file-text"></i>
                            <span> Borderaux </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">

                            <li><a href="select-courrier-bordereau"><i class="mdi mdi-invert-colors m-r-5"></i>Enregistrer
                                    un bordereau</a></li>


                            <li><a href="bordereaux"><i class="mdi mdi-invert-colors m-r-5"></i>Bordereaux
                                    enregistrés</a></li>

                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa  fa-envelope-square"></i>
                            <span> Emails </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">

                            <li><a href="create-email"><i class="mdi mdi-invert-colors m-r-5"></i>Envoyer un email</a>
                            </li>


                            <li><a href="emails"><i class="mdi mdi-invert-colors m-r-5"></i>Boite d'envoi</a></li>


                            <li><a href="show-delete-emails"><i class="mdi mdi-invert-colors m-r-5"></i>Poubelle</a>
                            </li>

                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa fa-folder"></i>
                            <span> Dossiers </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">

                            <li><a href="create-dossier"><i class="mdi mdi-invert-colors m-r-5"></i>Ajouter</a></li>


                            <li><a href="dossiers"><i class="mdi mdi-invert-colors m-r-5"></i>Lister</a></li>

                            <li><a href="dossiers/browse"><i class="mdi mdi-invert-colors m-r-5"></i>Parcourir</a></li>
                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa fa-envelope"></i>
                            <span> Courriers </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">

                            <li><a href="create-courrier"><i class="mdi mdi-invert-colors m-r-5"></i>Nouveau</a></li>


                            <li><a href="courriers"><i class="mdi mdi-invert-colors m-r-5"></i>Enregistrés</a></li>

                            <li><a href="copie-courriers"><i class="mdi mdi-invert-colors m-r-5"></i>En copies</a></li>

                            <li><a href="destine-courriers"><i class="mdi mdi-invert-colors m-r-5"></i>Qui me sont
                                    destinés</a></li>

                            <li><a href="assigne-courriers"><i class="mdi mdi-invert-colors m-r-5"></i>Qui me sont
                                    assignés</a></li>
                            <li><a href="courrier/search"><i class="mdi mdi-invert-colors m-r-5"></i>Rechercher</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect">
                            <i class="fa fa-folder-open"></i>
                            <span> Projets </span>
                        </a>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect">
                            <i class="ti-agenda"></i>
                            <span> Agenda </span>
                        </a>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa fa-list"></i>
                            <span> Etats</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Administration
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="waves-effect">Personnel </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Salaires </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Page
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="waves-effect">Prospects </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Clients </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Emissions </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Sinistres </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="mdi mdi-invert-colors m-r-5"></i> Comptabilité
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="waves-effect">Balances </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Emissions de primes </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Rapprochements bancaires </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Commissions </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Reversements de primes </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Grand livre </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Journal auxiliaire </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Portefeuille </a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Situations trésorières </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="business-intelligence" class="waves-effect">
                            <i class="fa fa-area-chart"></i>
                            <span> Statistiques </span>
                        </a>
                    </li>

                    <li class="has_sub">
                        <a href="users" class="waves-effect">
                            <i class="fa fa-users"></i>
                            <span> Utilisateurs </span>
                        </a>
                    </li>

                    <li>
                        <a href="historique-connexion/362f394e-ce46-4611-954d-c1008482768a" class="waves-effect">
                            <i class="mdi mdi-history"></i>
                            <span> Historique </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container to-animate">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Gestion des entreprises </h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>

                                </li>
                                <li>

                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{session()->get('message')}}</strong>
                    </div>
                @endif
                <div class="row">

                    @yield('admin')

                </div>
            </div> <!-- container -->
        </div> <!-- content -->

        <footer class="footer text-right">
            <center>
                Copyright © 2018 . Tous droits réservés | Développé par <a class="text-danger"
                                                                           href="http://www.jarstechnologies.com"
                                                                           target="_blank" style="color: #fff;">Jars
                    Technologies</a>
            </center>
        </footer>
    </div>

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="mdi mdi-close-circle-outline"></i>
        </a>
        <h4 class="">Settings</h4>
        <div class="setting-list nicescroll">
            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Notifications</h5>
                    <p class="text-muted m-b-0">
                        <small>Do you need them?</small>
                    </p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">API Access</h5>
                    <p class="m-b-0 text-muted">
                        <small>Enable/Disable access</small>
                    </p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Auto Updates</h5>
                    <p class="m-b-0 text-muted">
                        <small>Keep up to date</small>
                    </p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Online Status</h5>
                    <p class="m-b-0 text-muted">
                        <small>Show your status to all</small>
                    </p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>
        </div>
    </div><!-- /Right-bar -->

</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>

<!-- Counter js  -->
<script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

<!-- Dashboard init -->
<script src="{{asset('assets/pages/jquery.dashboard.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
{{--<script src="{{asset('assets/js/jquery.app.js')}}"></script>--}}

<!-- App js -->
{{--<script src="{{asset('assets/js/jquery.core.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/jquery.app.js')}}"></script>--}}
<script src="{{asset('js/larails.js')}}"></script>

<script>
    jQuery('#date_creation').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
    });
</script>

<!-- Tooltipster js -->
<script src="{{asset('js/tooltipster.bundle.min.js')}}"></script>
<script>
    $('.tooltip-animation').tooltipster({
        animation: 'grow'
    });
</script>

<!-- App js -->
<script src="{{asset('js/jquery.core.js')}}"></script>
<script src="{{asset('js/jquery.app.js')}}"></script>
@include('components.notification')

<script src="{{asset('js/sweet-alert.min.js')}}"></script>
<script type="text/javascript">
    $(function () {
    })
</script>
</body>
</html>
