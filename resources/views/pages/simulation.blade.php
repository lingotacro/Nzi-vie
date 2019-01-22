@extends('layouts.authers_lay' , ['title' => 'Simulation', 'jb_title' => 'Faire une cotisation'])
@section('authers_lay')

    <div id="wrapper">
        @include('patials._authers_header')
        <!-- End .header -->

        <div class="main">
           @include('patials._authers_page_title')
            <!-- End .page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-md-9 bg-nsia-light-gray border pt65 pb50">
                        <form action="resultat.html" methode="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2 class="mb30">Details de la simulation Auto</h2>

                                    <label>Marque de votre véhicule</label>
                                    <input type="text" class="form-control" placeholder="Marque de votre véhicule" required="">

                                    <label>Modèle de votre véhicule</label>
                                    <input type="text" class="form-control" placeholder="Modèle de votre véhicule" required="">

                                    <label>Nombre de place</label>
                                    <select class="form-control">
                                        <option value="#">2</option>
                                        <option value="#">5</option>
                                        <option value="#">7</option>
                                    </select>

                                    <label>Usage du véhicule</label>
                                    <input type="text" class="form-control" placeholder="Usage du véhicule" required="">

                                    <label>Energies utilisées</label>
                                    <input type="text" class="form-control" placeholder="Energies utilisées" required="">

                                    <label>puissance fiscale</label>
                                    <input type="text" class="form-control" placeholder="puissance fiscale" required="">

                                    <label>Date de mise en circulation</label>
                                    <input type="text" class="form-control" placeholder="Date de mise en circulation" required="">

                                    <label>Valeur neuve du véhicule</label>
                                    <input type="text" class="form-control" placeholder="Valeur neuve du véhicule" required="">

                                    <!-- End .checkbox -->
                                </div><!-- End .col-sm-6 -->
                                <div class="col-sm-6">
                                    <h2 class="mb30">Adresse et Informations</h2>

                                    <label>Votre nom et prénoms</label>
                                    <input type="text" class="form-control" placeholder="Votre nom et prénoms" required="">

                                    <label>Votre numéro de téléphone</label>
                                    <input type="text" class="form-control" placeholder="Your address 2" required="">

                                    <label>Votre adresse email</label>
                                    <input type="text" class="form-control" placeholder="Your address 2" required="">

                                    <label>Votre ville</label>
                                    <input type="text" class="form-control" placeholder="Votre ville" required="">

                                    <div class="checkbox">
                                        <label class="custom-checkbox-wrapper">
                                    <span class="custom-checkbox-container">
                                        <input type="checkbox" name="discount" value="discount">
                                        <span class="custom-checkbox-icon"></span>
                                    </span>
                                            <span>J'ai lu et j'accepte <a href="#">les conditions générales</a>.</span>
                                        </label>
                                    </div><!-- End .checkbox -->

                                    <div class="checkbox">
                                        <label class="custom-checkbox-wrapper">
                                    <span class="custom-checkbox-container">
                                        <input type="checkbox" name="discount" value="discount">
                                        <span class="custom-checkbox-icon"></span>
                                    </span>
                                            <span>Souscrire à notre newsletter</span>
                                        </label>
                                    </div>

                                    <div class="mb15"></div><!-- margin -->

                                    <button type="submit" class="btn btn-custom min-width-sm">CONTINUER</button>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- end .row -->
                        </form>
                    </div><!-- End .col-md-9 -->

                    <aside class="col-md-3 sidebar">
                        <div class="widget">
                            <h3 class="widget-title">Autres simulations non vie</h3>
                            <ul class="fa-ul">
                                <li><a href="#"><i class="fa-li fa fa-car"></i>Auto (10)</a></li>
                                <li><a href="#"><i class="fa-li fa fa-home"></i>Multi-risques Habitation (16)</a></li>
                                <li><a href="#"><i class="fa-li fa fa-stethoscope"></i>Santé (12)</a></li>
                                <li><a href="#"><i class="fa-li fa fa-plane"></i>Voyages (7)</a></li>
                            </ul>
                        </div><!-- end .widget -->

                        <div class="widget">
                            <h3 class="widget-title">Actualité NSIA</h3>
                            <ul class="posts-list">
                                <li>
                                    <figure>
                                        <a href="#" title="Dolores labore quod"><img src="{{asset('img/DK0RA7YWAAEPL4y.jpg')}}" alt="Post"></a>
                                    </figure>
                                    <h5><a href="#">Lancement de NSIA <em>Chap Chap</em>.</a></h5>
                                    <span><em>Jan 06, 2016</em></span>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#" title="Dolores labore quod"><img src="{{asset('img/du12.jpg')}}" alt="Post"></a>
                                    </figure>
                                    <h5><a href="#">BIAO-CI change de nom pour devenir NSIA Banque</a></h5>
                                    <span>Jan 05, 2016</span>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#" title="Dolores labore quod"><img src="{{asset('img/post3.jpg')}}" alt="Post"></a>
                                    </figure>
                                    <h5><a href="#">Votre assurance garantie à 100%</a></h5>
                                    <span>Jan 04, 2016</span>
                                </li>
                            </ul>
                        </div><!-- End .widget -->
                    </aside>
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .main -->

            @include('patials._authers_footer')
            <!-- End .footer -->

    </div><!-- End #wrapper -->

    @stop
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/jquery.tweet.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
