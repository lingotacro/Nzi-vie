@extends('layouts.authers_lay' ,['title' => 'Actualité'])
@section('authers_lay')
    <div class="wrapper">
        @include('patials._authers_header')

        @include('patials._authers_page_title')

        <section class="slider-inner" style="margin-top: 20px;">
            <div class="container-fluid">
                <div class="row thm-margin">
                    <div class="col-xs-12 col-sm-6 col-md-6 thm-padding">
                        <div class="slider-wrapper">
                            <div id="owl-slider-rtl" class="owl-carousel owl-theme">
                                <!-- Slider item one -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img
                                                src="{{asset('img/actus/slider-520x460-1.jpg')}}" alt=""
                                                class="img-responsive"></a>
                                    </div>
                                </div>
                                <!-- /.Slider item one -->
                                <!-- Slider item two -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img
                                                src="{{asset('img/actus/slider-520x460-2.jpg')}}" alt=""
                                                class="img-responsive"></a>
                                    </div>
                                </div>
                                <!-- /.Slider item two -->
                                <!-- Slider item three -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img
                                                src="{{asset('img/actus/slider-520x460-3.jpg')}}" alt=""
                                                class="img-responsive"></a>
                                    </div>
                                </div>
                                <!-- /.Slider item three -->
                                <!-- Slider item four -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img
                                                src="{{asset('img/actus/slider-520x460-4.jpg')}}" alt=""
                                                class="img-responsive"></a>
                                    </div>
                                </div>
                                <!-- /.Slider item four -->
                                <!-- Slider item five -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img
                                                src="{{asset('img/actus/slider-520x460-5.jpg')}}" alt=""
                                                class="img-responsive"></a>
                                        <div class="post-text">
                                            <span class="post-category">Business</span>
                                            <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                    standard </a></h2>
                                            <ul class="authar-info">
                                                <li class="authar"><a href="#">by david hall</a></li>
                                                <li class="date">May 29,2016</li>
                                                <li class="view"><a href="#">25 views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Slider item five -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 " style="padding-right: 10px; padding-left: 15px;">
                        <center><h2> Lorem ipsum dolor sit amet, consectetur adipisicing.</h2></center>
                        <p style="text-align: justify;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at dicta doloremque
                            dolorum ducimus est, excepturi facilis harum ipsum iste laboriosam molestiae nesciunt
                            nostrum quisquam reiciendis sequi vero! Atque culpa exercitationem fugiat laborum odio quo
                            tempora! Ea illo non optio sapiente unde vel. Assumenda dolores harum mollitia nostrum
                            veniam veritatis. Alias dicta excepturi in incidunt optio quo temporibus velit! Consequuntur
                            dolores ea et excepturi natus porro quia tenetur ut. Ab accusamus aliquid, autem, corporis
                            ducimus earum error inventore ipsum modi natus quisquam, quos temporibus voluptas. Ad
                            consequuntur ipsum, laborum magni molestias quas quasi reiciendis rerum. Ad adipisci aperiam
                            aspernatur blanditiis commodi consequatur dicta dolore earum eos esse et facilis impedit in
                            incidunt ipsam iste itaque laborum libero modi molestiae nesciunt obcaecati officiis porro
                            praesentium quae quam quia quo reprehenderit, saepe sed soluta sunt suscipit, tempore
                            tenetur ullam ut vero. Consequatur ea incidunt ipsum quo sed? A beatae cumque debitis
                            delectus dicta, facilis iste iure odit, ratione repellendus, sapiente temporibus velit vero.
                            Accusantium ad alias asperiores distinctio excepturi facere impedit laudantium minima nobis
                            quam repudiandae saepe similique, sint soluta sunt tenetur velit voluptatibus! Ab accusamus
                            adipisci aspernatur aut consectetur consequuntur dicta dolorum eius error expedita fuga
                            harum, in inventore ipsa, libero maiores maxime molestias neque quia quo quos repellendus
                            repudiandae sit suscipit velit voluptate voluptates. Dignissimos dolor incidunt maiores
                        </p>
                    </div>
                </div>
            </div>

            <div class="container text-center" style="margin-top: 30px;">
                <h1 class="section-title-border "> Toutes l'actualités de  <strong> NSIA VIE ASSURANCES </strong></h1>
            </div>

            <div class="container-fluid" >
                <div class="row row-m">
                    <!-- START MAIN CONTENT -->
                    <div class="col-p main-content">
                        <div class="theiaStickySidebar">
                            <!-- START POST CATEGORY STYLE ONE (Popular news) -->
                            <div class="post-inner">
                                <!--post header-->
                                <div class="post-head">

                                </div>
                                <!-- post body -->
                                <div class="post-body">
                                    <div class="owl-carousel owl-theme post-slider-rtl">
                                        <!-- item one -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-6 main-post-inner ">
                                                    <article>
                                                        <figure>
                                                            <a href="#"><img src="{{asset('img/20ans-contrat-.jpg')}}" height="242" width="345" alt="" class="img-responsive"></a>

                                                        </figure>
                                                        <div class="post-info">
                                                            <h3 style="text-align: left;"><a href="#" >Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                            <ul class="authar-info" style="text-align: left;">
                                                                <li><i class="fa fa-clock-o"></i> May 15, 2016</li>
                                                            </ul>
                                                            <p style="text-align: left;">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="news-list">
                                                        <div class="news-list-item">
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                                <div class="grid-item">
                                                                    <div class="grid-item-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('img/pension.jpg')}}" class="img-responsive" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                    <ul class="authar-info">
                                                                        <li>May 15, 2016</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                                <div class="grid-item">
                                                                    <div class="grid-item-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('img/retraite.jpg')}}" class="img-responsive" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                    <ul class="authar-info">
                                                                        <li>May 15, 2016</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="news-list-item">
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                                <div class="grid-item">
                                                                    <div class="grid-item-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('img/pension.jpg')}}" class="img-responsive" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                    <ul class="authar-info">
                                                                        <li>May 15, 2016</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                                <div class="grid-item">
                                                                    <div class="grid-item-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('img/retraite.jpg')}}" class="img-responsive" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                    <ul class="authar-info">
                                                                        <li>May 15, 2016</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- item two -->
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-6 main-post-inner ">
                                                    <article>
                                                        <figure>
                                                            <a href="#"><img src="{{asset('img/du12.jpg')}}" height="242" width="345" alt="" class="img-responsive"></a>

                                                        </figure>
                                                        <div class="post-info">
                                                            <h3 style="text-align: left;"><a href="#" >Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                            <ul class="authar-info" style="text-align: left;">
                                                                <li><i class="fa fa-clock-o"></i> May 15, 2016</li>
                                                            </ul>
                                                            <p style="text-align: left;">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="news-list">
                                                        <div class="news-list-item">
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                                <div class="grid-item">
                                                                    <div class="grid-item-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('img/33.jpg')}}" class="img-responsive" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                    <ul class="authar-info">
                                                                        <li>May 15, 2016</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                                <div class="grid-item">
                                                                    <div class="grid-item-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('img/20ans-mariage-.jpg')}}" class="img-responsive" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                    <ul class="authar-info">
                                                                        <li>May 15, 2016</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="news-list-item">
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                                <div class="grid-item">
                                                                    <div class="grid-item-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('img/du12.jpg')}}" class="img-responsive" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                    <ul class="authar-info">
                                                                        <li>May 15, 2016</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                                <div class="grid-item">
                                                                    <div class="grid-item-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('img/du12.jpg')}}" class="img-responsive" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                    <ul class="authar-info">
                                                                        <li>May 15, 2016</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- END OF /. POST CATEGORY STYLE ONE (Popular news) -->


                            <!--  END OF /. POST CATEGORY STYLE TWO (Travel news) -->
                        </div>
                    </div>
                    <!-- END OF /. MAIN CONTENT -->

                    <!-- END OF /. SIDE CONTENT -->
                </div>
            </div>

        </section>


        <!-- END OF /. POST BLOCK SECTION -->


        @include('patials._authers_footer')
    </div>

@stop

{{-- CSS--}}
<link href="{{asset('css/actus/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- Bootstrap rtl -->
<link href="{{asset('css/actus/bootstrap.rtl.full.min.css')}}" rel="stylesheet" type="text/css"/>
<!--Animate css-->
<link href="{{asset('css/actus/animate.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- Navigation css-->
<link href="{{asset('css/actus/bootsnav.css')}}" rel="stylesheet" type="text/css"/>
<!-- youtube css -->
<link href="{{asset('css/actus/RYPP.css')}}" rel="stylesheet" type="text/css"/>
<!-- themify-icons -->
<link href="{{asset('css/actus/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
<!-- Important Owl stylesheet -->
<link href="{{asset('css/actus/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- Default Theme -->
<link href="{{asset('css/actus/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- style css -->
<link href="{{asset('css/actus/style.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('css/actus/rtl-style.css')}}" rel="stylesheet" type="text/css"/>


{{--JS--}}
{{--<script src="{{asset('js/plugins.min.js')}}"></script>--}}
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<!-- jquery ui js -->
<script src="{{asset('js/actus/jquery-ui.min.js')}}" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/actus/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- Bootsnav js -->
<script src="{{asset('js/actus/bootsnav.js')}}" type="text/javascript"></script>
<script src="{{asset('js/actus/theia-sticky-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/actus/RYPP.js')}}" type="text/javascript"></script>
<!-- Skycons js -->
{{--<script src="../assets/js/actus/skycons.js" type="text/javascript"></script>--}}
<!-- youtube js -->
{{--<script src="../assets/js/actus/RYPP.js" type="text/javascript"></script>--}}
<script src="{{asset('js/actus/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/actus/custom.js')}}"></script>
