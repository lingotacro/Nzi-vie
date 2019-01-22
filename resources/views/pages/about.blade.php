@extends('layouts.authers_lay')

@section('authers_lay')

    <div id="wrapper">
        @include('patials._authers_header')

        <div class="main">
            @include('patials._authers_page_title')
            <!-- End .page-header -->

            <div class="bg-gray border pt65 pb50">
                <div class="container">
                    <h2 class="title text-center">A propos de nous</h2>
                    <div class="row">
                        <div class="col-md-7">
                            <p>L’aventure NSIA débute en 1995 par la création en Côte d’Ivoire d’une compagnie d’assurance dommages. Dès 1996, NSIA réalise ses premières acquisitions en rachetant les filiales Vie et Non Vie des Assurances Générales de France (AGF), en Côte d’Ivoire (AGCI Vie et AGCI IARD). </p>
                            <p>Dès lors, progressivement, par croissance organique et externe, le Groupe NSIA s’est construit et est aujourd’hui présent dans douze (12) pays de l’Afrique Centrale et Occidentale.</p>
                            <p>
                            <center><img src="{{asset('img/afriquensia.PNG')}}" class="img-responsive"/></center>
                            </p>
                        </div><!-- End .col-md-6 -->

                        <div class="clearfix mb25 visible-xs visible-sm"></div><!-- margin -->

                        <div class="col-md-5">
                            <center><img src="{{asset('img/Historique.png')}}" class="img-responsive"/></center>
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div>
            <div class="mb50"></div><!-- margin -->

            <hr class="mt35 mb55">

            <div class="callout mb0">
                <div class="container">
                    <div class="left">
                        <h3 class="callout-title">
                            Carrière  <br>
                            <small>
                                Chez NSIA, plus de 1500 personnes travaillent chaque jour avec professionnalisme et engagement pour offrir des solutions compétitives et innovantes en Assurances et en Banque, en vue d’offrir au client, protection et financement et ainsi participer au développement économique et social des pays.
                            </small>
                        </h3>
                    </div><!-- End .left -->
                    <div class="right">
                        <a href="#" class="btn btn-nsia-blue min-width btn-nsia-rounded">NSIA Vie Côte d'Ivoire recrute</a>
                    </div><!-- End .right -->
                </div><!-- End .container -->
            </div><!-- End .callout -->
        </div><!-- End .main -->

        @include('patials._authers_footer')

    </div><!-- End #wrapper -->

    @stop
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
