@extends('layouts.authers_lay' , ['title' => 'Contact', 'jb_title' => 'Nous contacter'])
@section('authers_lay')

    <div id="wrapper">
        @include('patials._authers_header')
        <!-- End .header -->
        <div class="main">
            <div class="page-header larger parallax custom mb0" style="background-image:url({{asset('img/Slide-Auto1924x628.jpg')}})">
                <div class="container">
                    <h1>CONTACT</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div><!-- End .container -->
            </div>
            <!-- End .page-header -->

            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15889.244811013781!2d-3.9897712!3d5.3694194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x292b62f8c1eb841c!2sNSIA+VIE+Assurances!5e0!3m2!1sfr!2sci!4v1518113043634" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div><!-- End #map -->

            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="contact-box">
                            <h3>Agence Angré</h3>
                            <ul>
                                <li><strong>Adresse:</strong> Rue des Jardins, Abidjan, Côte d'Ivoire </li>
                                <li><strong>Site Web:</strong> <a href="" target="_blank">
                                        www.nsiavieassurances.ci
                                    </a></li>
                                <li><strong>Telephone <i class="fa fa-phone"></i> : </strong> +225 22 41 98 00</li>
                                <li><strong>Email <i class="fa fa-envelop"></i> :</strong> info@groupensia.com</li>
                                <li>
                                    <strong>Réseaux Sociaux:</strong>
                                    <div class="social-icons">
                                        <a href="#" class="social-icon" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div><!-- End .social-icons -->
                                </li>
                            </ul>
                        </div><!-- End .contact-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="clearfix mb65 visible-sm visible-xs"></div><!-- margin -->

                    <div class="col-md-8">
                        <h2>Laissez nous un message</h2>
                        <form action="{{route('post-contact')}}" method="post" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="contactname" name="nom" placeholder="Entrez votre nom et prénoms" required>
                                </div><!-- End .col-md-6 -->
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="contactemail" name="email" placeholder="Entrez votre adresse email" required>
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="contactsubject" name="desir" placeholder="Que desirez vous ?">
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="6" id="contactmessage" name="message" placeholder="Ecrivez votre message ici..." required></textarea>
                                </div><!-- End .col-md-12 -->
                            </div><!-- End .row -->

                            <div class="text-right">
                                <button type="submit" class="btn btn-black btn-nsia-rounded min-width-md" data-loading-text="envoi du message..."> Envoyer le message  <i class="fa fa-send"></i></button>
                            </div><!-- End .text-right -->

                        </form>
                    </div><!-- End .col-md-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb90"></div><!-- margin -->

        </div><!-- End .main -->

       @include('patials._authers_footer')

    </div><!-- End #wrapper -->
    @stop
{{--<script src="{{asset('js/jquery.pagepiling.min.js')}}"></script>--}}
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')
