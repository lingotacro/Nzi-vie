@extends('layouts.authers_lay' ,['title' => 'Actualité'])
@section('authers_lay')
    <div class="wrapper">
        @include('patials._authers_header')

        @include('patials._authers_page_title')

        <section class="slider-inner" style="margin-top: 20px;">
            <div >
                <div class="row thm-margin">
                    <div class="col-xs-12 col-sm-6 col-md-6 thm-padding">
                        <div class="slider-wrapper">
                            <div id="owl-slider-rtl" class="owl-carousel owl-theme">
                                <!-- Slider item one -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img src="{{asset('img/actus/slider-520x460-1.jpg')}}" alt="" class="img-responsive"></a>
                                        <div class="post-text">
                                            <span class="post-category">Business</span>
                                            <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </a></h2>
                                            <ul class="authar-info">
                                                <li class="authar"><a href="#">by david hall</a></li>
                                                <li class="date">May 29,2016</li>
                                                <li class="view"><a href="#">25 views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Slider item one -->
                                <!-- Slider item two -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img src="{{asset('img/actus/slider-520x460-2.jpg')}}" alt="" class="img-responsive"></a>
                                        <div class="post-text">
                                            <span class="post-category">Politics</span>
                                            <h2><a href="#">It is a long established fact that a reader will be distracted by the readable content of a page.</a></h2>
                                            <ul class="authar-info">
                                                <li class="authar"><a href="#">by david hall</a></li>
                                                <li class="date">May 29,2016</li>
                                                <li class="view"><a href="#">25 views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Slider item two -->
                                <!-- Slider item three -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img src="{{asset('img/actus/slider-520x460-3.jpg')}}" alt="" class="img-responsive"></a>
                                        <div class="post-text">
                                            <span class="post-category">Photography</span>
                                            <h2><a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece</a></h2>
                                            <ul class="authar-info">
                                                <li class="authar"><a href="#">by david hall</a></li>
                                                <li class="date">May 29,2016</li>
                                                <li class="view"><a href="#">25 views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Slider item three -->
                                <!-- Slider item four -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img src="{{asset('img/actus/slider-520x460-4.jpg')}}" alt="" class="img-responsive"></a>
                                        <div class="post-text">
                                            <span class="post-category">Travel</span>
                                            <h2><a href="#">There are many variations of passages of Lorem Ipsum available, but the majority.</a></h2>
                                            <ul class="authar-info">
                                                <li class="authar"><a href="#">by david hall</a></li>
                                                <li class="date">May 29,2016</li>
                                                <li class="view"><a href="#">25 views</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Slider item four -->
                                <!-- Slider item five -->
                                <div class="item">
                                    <div class="slider-post post-height-1">
                                        <a href="#" class="news-image"><img src="{{asset('img/actus/slider-520x460-5.jpg')}}" alt="" class="img-responsive"></a>
                                        <div class="post-text">
                                            <span class="post-category">Business</span>
                                            <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </a></h2>
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
                    <div class="col-xs-12 col-sm-6 col-md-6 thm-padding">
                        <div class="row slider-right-post thm-margin">
                            <div class="col-xs-6 col-sm-12 col-md-12 thm-padding hidden-xs">
                                <div class="slider-post post-height-2">
                                    <a href="#" class="news-image"><img src="{{asset('img/actus/slider-520x230-6.jpg')}}" alt="" class="img-responsive"></a>
                                    <div class="post-text">
                                        <span class="post-category">Travel</span>
                                        <h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4>
                                        <ul class="authar-info">
                                            <li class="authar hidden-xs hidden-sm"><a href="#">by david hall</a></li>
                                            <li class="hidden-xs">May 29,2017</li>
                                            <li class="view hidden-xs hidden-sm"><a href="#">25 views</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 thm-padding">
                                <div class="slider-post post-height-2">
                                    <a href="#" class="news-image"><img src="{{asset('img/actus/slider-260x230-7.jpg')}}" alt="" class="img-responsive"></a>
                                    <div class="post-text">
                                        <span class="post-category">Fashion</span>
                                        <h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4>
                                        <ul class="authar-info">
                                            <li class="authar hidden-xs hidden-sm"><a href="#">by david hall</a></li>
                                            <li class="hidden-xs">May 29,2017</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 thm-padding">
                                <div class="slider-post post-height-2">
                                    <a href="#" class="news-image"><img src="{{asset('img/actus/slider-260x230-8.jpg')}}" alt="" class="img-responsive"></a>
                                    <div class="post-text">
                                        <span class="post-category">Technology</span>
                                        <h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4>
                                        <ul class="authar-info">
                                            <li class="authar hidden-xs hidden-sm"><a href="#">by david hall</a></li>
                                            <li class="hidden-xs">May 29,2017</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END OF /. POST BLOCK SECTION -->
        <div >
            <div class="row row-m">
                <!-- START MAIN CONTENT -->
                <div class="col-sm-8 col-p main-content">
                    <div class="theiaStickySidebar">
                        <!-- START POST CATEGORY STYLE ONE (Popular news) -->
                        <div class="post-inner">
                            <!--post header-->
                            <div class="post-head">
                                <h2 class="title"><strong>Popular</strong> Posts</h2>
                                <div class="filter-nav">
                                    <ul>
                                        <li><a href="#" class="active">all</a></li>
                                        <li><a href="#">business</a></li>
                                        <li><a href="#">gadgets</a></li>
                                        <li><a href="#">design</a></li>
                                        <li><a href="#">fashion</a></li>
                                        <li><a href="#">video</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post body -->
                            <div class="post-body">
                                <div class="owl-carousel owl-theme post-slider-rtl">
                                    <!-- item one -->
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-6 main-post-inner bord-right">
                                                <article>
                                                    <figure>
                                                        <a href="#"><img src="{{asset('img/actus/340x215-1.jpg')}}" height="242" width="345" alt="" class="img-responsive"></a>
                                                        <span class="post-category">Business</span>
                                                    </figure>
                                                    <div class="post-info">
                                                        <h3><a href="#">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                        <ul class="authar-info">
                                                            <li><i class="ti-timer"></i> May 15, 2016</li>
                                                            <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                        </ul>
                                                        <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="news-list">
                                                    <div class="news-list-item">
                                                        <div class="img-wrapper">
                                                            <a href="#" class="thumb">
                                                                <img src="{{asset('img/actus/115x85-1.jpg')}}" alt="" class="img-responsive">
                                                                <div class="link-icon">
                                                                    <i class="fa fa-camera"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-info-2">
                                                            <h5><a href="#" class="title">Cooking Recipes Anytime And Anywhere</a></h5>
                                                            <ul class="authar-info">
                                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                                <li class="like hidden-xs hidden-sm"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="news-list-item">
                                                        <div class="img-wrapper">
                                                            <a href="#" class="thumb">
                                                                <img src="{{asset('img/actus/115x85-2.jpg')}}" alt="" class="img-responsive">
                                                                <div class="link-icon">
                                                                    <i class="fa fa-play"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-info-2">
                                                            <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the.</a></h5>
                                                            <ul class="authar-info">
                                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                                <li class="like hidden-xs hidden-sm"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="news-list-item">
                                                        <div class="img-wrapper">
                                                            <a href="#" class="thumb">
                                                                <img src="{{asset('img/actus/115x85-3.jpg')}}" alt="" class="img-responsive">
                                                                <div class="link-icon">
                                                                    <i class="fa fa-camera"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-info-2">
                                                            <h5><a href="#" class="title">It is a long established fact that a reader will.</a></h5>
                                                            <ul class="authar-info">
                                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                                <li class="like hidden-xs hidden-sm"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="news-list-item">
                                                        <div class="img-wrapper">
                                                            <a href="#" class="thumb">
                                                                <img src="{{asset('img/actus/115x85-4.jpg')}}" alt="" class="img-responsive">
                                                                <div class="link-icon">
                                                                    <i class="fa fa-play"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-info-2">
                                                            <h5><a href="#" class="title">Contrary to popular belief, Lorem Ipsum is.</a></h5>
                                                            <ul class="authar-info">
                                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                                <li class="like hidden-xs hidden-sm"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item two -->
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-6 main-post-inner bord-right">
                                                <article>
                                                    <figure>
                                                        <a href="#"><img src="{{asset('img/actus/340x215-2.jpg')}}" height="242" width="345" alt="" class="img-responsive"></a>
                                                        <span class="post-category">Business</span>
                                                    </figure>
                                                    <div class="post-info">
                                                        <h3><a href="#">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                        <ul class="authar-info">
                                                            <li><i class="ti-timer"></i> May 15, 2016</li>
                                                            <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                        </ul>
                                                        <p> Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="news-list">
                                                    <div class="news-list-item">
                                                        <div class="img-wrapper">
                                                            <a href="#" class="thumb">
                                                                <img src="{{asset('img/actus/115x85-4.jpg')}}" alt="" class="img-responsive">
                                                                <div class="link-icon">
                                                                    <i class="fa fa-camera"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-info-2">
                                                            <h5><a href="#" class="title">Cooking Recipes Anytime And Anywhere</a></h5>
                                                            <ul class="authar-info">
                                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                                <li class="like hidden-xs hidden-sm"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="news-list-item">
                                                        <div class="img-wrapper">
                                                            <a href="#" class="thumb">
                                                                <img src="{{asset('img/actus/115x85-3.jpg')}}" alt="" class="img-responsive">
                                                                <div class="link-icon">
                                                                    <i class="fa fa-camera"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-info-2">
                                                            <h5><a href="#" class="title">Cooking Recipes Anytime And Anywhere</a></h5>
                                                            <ul class="authar-info">
                                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                                <li class="like hidden-xs hidden-sm"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="news-list-item">
                                                        <div class="img-wrapper">
                                                            <a href="#" class="thumb">
                                                                <img src="{{asset('img/actus/115x85-2.jpg')}}" alt="" class="img-responsive">
                                                                <div class="link-icon">
                                                                    <i class="fa fa-camera"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-info-2">
                                                            <h5><a href="#" class="title">Cooking Recipes Anytime And Anywhere</a></h5>
                                                            <ul class="authar-info">
                                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                                <li class="like hidden-xs hidden-sm"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="news-list-item">
                                                        <div class="img-wrapper">
                                                            <a href="#" class="thumb">
                                                                <img src="{{asset('img/actus/115x85-1.jpg')}}" alt="" class="img-responsive">
                                                                <div class="link-icon">
                                                                    <i class="fa fa-camera"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="post-info-2">
                                                            <h5><a href="#" class="title">Cooking Recipes Anytime And Anywhere</a></h5>
                                                            <ul class="authar-info">
                                                                <li><i class="ti-timer"></i> May 15, 2016</li>
                                                                <li class="like hidden-xs hidden-sm"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post footer -->
                            <div class="post-footer">
                                <div class="row thm-margin">
                                    <div class="col-xs-12 col-sm-8 col-md-9 thm-padding">
                                        <a href="#" class="more-btn">More popular posts</a>
                                    </div>
                                    <div class="hidden-xs col-sm-4 col-md-3 thm-padding">
                                        <div class="social">
                                            <ul>
                                                <li>
                                                    <div class="share transition">
                                                        <a href="#" target="_blank" class="ico fb"><i class="fa fa-facebook"></i></a>
                                                        <a href="#" target="_blank" class="ico tw"><i class="fa fa-twitter"></i></a>
                                                        <a href="#" target="_blank" class="ico gp"><i class="fa fa-google-plus"></i></a>
                                                        <a href="#" target="_blank" class="ico pin"><i class="fa fa-pinterest"></i></a>
                                                        <i class="ti-share ico-share"></i>
                                                    </div>
                                                </li>
                                                <li><a href="#"><i class="ti-heart"></i></a></li>
                                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF /. POST CATEGORY STYLE ONE (Popular news) -->

                        <!-- START POST CATEGORY STYLE TWO (Travel news) -->
                        <div class="post-inner post-inner-2">
                            <!--post header-->
                            <div class="post-head">
                                <h2 class="title"><strong>Travel</strong> News</h2>
                                <div class="filter-nav">
                                    <ul>
                                        <li><a href="#" class="active">all</a></li>
                                        <li><a href="#">business</a></li>
                                        <li><a href="#">gadgets</a></li>
                                        <li><a href="#">design</a></li>
                                        <li><a href="#">fashion</a></li>
                                        <li><a href="#">video</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post body -->
                            <div class="post-body">
                                <div class="owl-carousel owl-theme post-slider-rtl">
                                    <!-- item one -->
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-6 main-post-inner bord-right">
                                                <article>
                                                    <figure>
                                                        <a href="#"><img src="{{asset('img/actus/340x215-3.jpg')}}" height="242" width="345" alt="" class="img-responsive"></a>
                                                        <span class="post-category">Travel</span>
                                                    </figure>
                                                    <div class="post-info">
                                                        <h3><a href="#">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                        <ul class="authar-info">
                                                            <li><i class="ti-timer"></i> May 15, 2016</li>
                                                            <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                        </ul>
                                                        <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="news-grid-2">
                                                    <div class="row row-margin">
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                            <div class="grid-item">
                                                                <div class="grid-item-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/actus/165x110-1.jpg')}}" class="img-responsive" alt="">
                                                                        <div class="link-icon"><i class="fa fa-play"></i></div>
                                                                    </a>
                                                                </div>
                                                                <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                <ul class="authar-info">
                                                                    <li>May 15, 2016</li>
                                                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                            <div class="grid-item">
                                                                <div class="grid-item-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/actus/165x110-2.jpg')}}" class="img-responsive" alt="">
                                                                        <div class="link-icon"><i class="fa fa-camera"></i></div>
                                                                    </a>
                                                                </div>
                                                                <h5><a href="#" class="title">It is a long established fact that a reader will be distracted by</a></h5>
                                                                <ul class="authar-info">
                                                                    <li>May 15, 2016</li>
                                                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                            <div class="grid-item">
                                                                <div class="grid-item-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/actus/165x110-3.jpg')}}" class="img-responsive" alt="">
                                                                        <div class="link-icon"><i class="fa fa-camera"></i></div>
                                                                    </a>
                                                                </div>
                                                                <h5><a href="#" class="title">There are many variations of passages of Lorem Ipsum.</a></h5>
                                                                <ul class="authar-info">
                                                                    <li>May 15, 2016</li>
                                                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                            <div class="grid-item">
                                                                <div class="grid-item-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/actus/165x110-4.jpg')}}" class="img-responsive" alt="">
                                                                        <div class="link-icon"><i class="fa fa-play"></i></div>
                                                                    </a>
                                                                </div>
                                                                <h5><a href="#" class="title">Contrary to popular belief, Lorem Ipsum is not simply random text.</a></h5>
                                                                <ul class="authar-info">
                                                                    <li>May 15, 2016</li>
                                                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
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
                                            <div class="col-sm-6 main-post-inner bord-right">
                                                <article>
                                                    <figure>
                                                        <a href="#"><img src="{{asset('img/actus/340x215-4.jpg')}}" height="242" width="345" alt="" class="img-responsive"></a>
                                                        <span class="post-category">Travel</span>
                                                    </figure>
                                                    <div class="post-info">
                                                        <h3><a href="#">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                        <ul class="authar-info">
                                                            <li><i class="ti-timer"></i> May 15, 2016</li>
                                                            <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                                        </ul>
                                                        <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="news-grid-2">
                                                    <div class="row row-margin">
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                            <div class="grid-item">
                                                                <div class="grid-item-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/actus/165x110-5.jpg')}}" class="img-responsive" alt="">
                                                                        <div class="link-icon"><i class="fa fa-camera"></i></div>
                                                                    </a>
                                                                </div>
                                                                <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing.</a></h5>
                                                                <ul class="authar-info">
                                                                    <li>May 15, 2016</li>
                                                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                            <div class="grid-item">
                                                                <div class="grid-item-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/actus/165x110-6.jpg')}}" class="img-responsive" alt="">
                                                                        <div class="link-icon"><i class="fa fa-camera"></i></div>
                                                                    </a>
                                                                </div>
                                                                <h5><a href="#" class="title">It is a long established fact that a reader will be distracted by</a></h5>
                                                                <ul class="authar-info">
                                                                    <li>May 15, 2016</li>
                                                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                            <div class="grid-item">
                                                                <div class="grid-item-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/actus/165x110-7.jpg')}}" class="img-responsive" alt="">
                                                                        <div class="link-icon"><i class="fa fa-camera"></i></div>
                                                                    </a>
                                                                </div>
                                                                <h5><a href="#" class="title">There are many variations of passages of Lorem Ipsum.</a></h5>
                                                                <ul class="authar-info">
                                                                    <li>May 15, 2016</li>
                                                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                                                            <div class="grid-item">
                                                                <div class="grid-item-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('img/actus/165x110-8.jpg')}}" class="img-responsive" alt="">
                                                                        <div class="link-icon"><i class="fa fa-camera"></i></div>
                                                                    </a>
                                                                </div>
                                                                <h5><a href="#" class="title">Contrary to popular belief, Lorem Ipsum is not simply random text.</a></h5>
                                                                <ul class="authar-info">
                                                                    <li>May 15, 2016</li>
                                                                    <li class="like hidden-sm"><a href="#">15 likes</a></li>
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
                            <!-- footer post -->
                            <div class="post-footer">
                                <div class="row thm-margin">
                                    <div class="col-xs-12 col-sm-8 col-md-9 thm-padding">
                                        <a href="#" class="more-btn">More popular posts</a>
                                    </div>
                                    <div class="hidden-xs col-sm-4 col-md-3 thm-padding">
                                        <div class="social">
                                            <ul>
                                                <li>
                                                    <div class="share transition">
                                                        <a href="#" target="_blank" class="ico fb"><i class="fa fa-facebook"></i></a>
                                                        <a href="#" target="_blank" class="ico tw"><i class="fa fa-twitter"></i></a>
                                                        <a href="#" target="_blank" class="ico gp"><i class="fa fa-google-plus"></i></a>
                                                        <a href="#" target="_blank" class="ico pin"><i class="fa fa-pinterest"></i></a>
                                                        <i class="ti-share ico-share"></i>
                                                    </div>
                                                </li>
                                                <li><a href="#"><i class="ti-heart"></i></a></li>
                                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  END OF /. POST CATEGORY STYLE TWO (Travel news) -->
                    </div>
                </div>
                <!-- END OF /. MAIN CONTENT -->
                <!-- START SIDE CONTENT -->
                <div class="col-sm-4 col-p leftSidebar">
                    <div class="theiaStickySidebar">
                        <!-- START LATEST REVIEWS -->
                        <div class="panel_inner review-inner">
                            <div class="panel_header">
                                <h4><strong>Latest</strong> Reviews</h4>
                            </div>
                            <div class="panel_body">
                                <div class="more-post">
                                    <a href="#" class="news-image"><img src="{{asset('img/actus/340x215-5.jpg')}}" alt="" class="img-responsive"></a>
                                    <div class="reatting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="post-text">
                                        <span class="post-category">Technology</span>
                                        <h4>Lorem Ipsum is simply dummy text of the printing </h4>
                                        <ul class="authar-info">
                                            <li><i class="ti-timer"></i> May 15, 2016</li>
                                            <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-list">
                                    <div class="news-list-item">
                                        <div class="img-wrapper">
                                            <a href="#" class="thumb">
                                                <img src="{{asset('img/actus/115x85-5.jpg')}}" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="fa fa-camera"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="post-info-2">
                                            <h5><a href="#" class="title">It is a long established fact that a reader. </a></h5>
                                            <div class="reviews-reatting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-list-item">
                                        <div class="img-wrapper">
                                            <a href="#" class="thumb">
                                                <img src="{{asset('img/actus/115x85-6.jpg')}}" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="fa fa-play"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="post-info-2">
                                            <h5><a href="#" class="title">There are many variations of passages,</a></h5>
                                            <div class="reviews-reatting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-list-item">
                                        <div class="img-wrapper">
                                            <a href="#" class="thumb">
                                                <img src="{{asset('img/actus/115x85-7.jpg')}}" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="fa fa-camera"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="post-info-2">
                                            <h5><a href="#" class="title">Lorem Ipsum is simply dummy text of the.</a></h5>
                                            <div class="reviews-reatting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF /. LATEST REVIEWS -->
                        <!-- START WEATHER -->
                        <div class="weather-wrapper-2 weather-bg-2">
                            <div class="weather-temperature">
                                <div class="weather-now">
                                    <span class="big-degrees">39</span>
                                    <span class="circle">°</span>
                                    <span class="weather-unit">C</span>
                                </div>
                                <div class="weather-icon-2">
                                    <!-- *** Start All animated skycons canvas *** -->
                                    <!--<canvas id="clear-day" width="70" height="70"></canvas>-->
                                    <!--<canvas id="clear-night" width="70" height="70"></canvas>-->
                                    <canvas id="partly-cloudy-day" width="70" height="70"></canvas>
                                    <!--<canvas id="partly-cloudy-night" width="70" height="70"></canvas>-->
                                    <!--<canvas id="cloudy" width="70" height="70"></canvas>-->
                                    <!--<canvas id="rain" width="70" height="70"></canvas>-->
                                    <!--<canvas id="sleet" width="70" height="70"></canvas>-->
                                    <!--<canvas id="snow" width="70" height="70"></canvas>-->
                                    <!--<canvas id="wind" width="64" height="70"></canvas>-->
                                    <!--<canvas id="fog" width="70" height="70"></canvas>-->
                                    <!-- *** End All animated skycons canvas *** -->
                                    <!-- Normal weather icon -->
                                    <!--<i class="wi wi-day-lightning"></i>-->
                                </div>
                            </div>
                            <div class="weather-info">
                                <div class="weather-name">Partly Sunny</div>
                                <span>Real Fell: 67 <sup>°</sup></span>
                                <span>Change of Rain</span>
                            </div>
                            <div class="weather-week-2">
                                <div class="weather-days">
                                    <div class="day-0">Sun</div>
                                    <div class="day-icon">
                                        <i class="wi wi-day-sunny"></i>
                                    </div>
                                    <div class="day-degrees">
                                        <span class="degrees-0">45</span>
                                        <span class="td-circle">°</span>
                                    </div>
                                </div>
                                <div class="weather-days">
                                    <div class="day-1">Mon</div>
                                    <div class="day-icon">
                                        <i class="wi wi-day-cloudy-high"></i>
                                    </div>
                                    <div class="day-degrees">
                                        <span class="degrees-1">21</span>
                                        <span class="circle">°</span>
                                    </div>
                                </div>
                                <div class="weather-days">
                                    <div class="day-2">Tue</div>
                                    <div class="day-icon">
                                        <i class="wi wi-day-sleet"></i>
                                    </div>
                                    <div class="day-degrees">
                                        <span class="degrees-2">29</span>
                                        <span class="circle">°</span>
                                    </div>
                                </div>
                                <div class="weather-days">
                                    <div class="day-3">Wed</div>
                                    <div class="day-icon">
                                        <i class="wi wi-day-lightning"></i>
                                    </div>
                                    <div class="day-degrees">
                                        <span class="degrees-3">19</span>
                                        <span class="circle">°</span>
                                    </div>
                                </div>
                                <div class="weather-days">
                                    <div class="day-4">Thu</div>
                                    <div class="day-icon">
                                        <i class="wi wi-sleet"></i>
                                    </div>
                                    <div class="day-degrees">
                                        <span class="degrees-4">54</span>
                                        <span class="circle">°</span>
                                    </div>
                                </div>
                                <div class="weather-days">
                                    <div class="day-4">Fri</div>
                                    <div class="day-icon">
                                        <i class="wi wi-smog"></i>
                                    </div>
                                    <div class="day-degrees">
                                        <span class="degrees-5">68</span>
                                        <span class="circle">°</span>
                                    </div>
                                </div>
                                <div class="weather-days">
                                    <div class="day-4">Sat</div>
                                    <div class="day-icon">
                                        <i class="wi wi-lightning"></i>
                                    </div>
                                    <div class="day-degrees">
                                        <span class="degrees-6">28</span>
                                        <span class="circle">°</span>
                                    </div>
                                </div>
                            </div>
                            <div class="weather-footer">
                                <div class="weather-date">
                                    Saturday, March 26th
                                </div>
                                <div class="weather-city">
                                    San Francisco, CA
                                </div>
                            </div>
                        </div>
                        <!-- END OF /. WEATHER -->
                        <!-- START NAV TABS -->
                        <div class="tabs-wrapper">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Most Viewed</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Popular news</a></li>
                            </ul>
                            <!-- Tab panels one -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="most-viewed">
                                        <ul id="most-today" class="content tabs-content">
                                            <li><span class="count">01</span><span class="text"><a href="#">South Africa bounce back on eventful day</a></span></li>
                                            <li><span class="count">02</span><span class="text"><a href="#">Steyn ruled out of series with shoulder fracture</a></span></li>
                                            <li><span class="count">03</span><span class="text"><a href="#">BCCI asks ECB to bear expenses of team's India tour</a></span></li>
                                            <li><span class="count">04</span><span class="text"><a href="#">Duminy, Elgar tons set Australia huge target</a></span></li>
                                            <li><span class="count">05</span><span class="text"><a href="#">English spinners are third-class citizens, says Graeme Swann</a></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Tab panels two -->
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <div class="popular-news">
                                        <div class="p-post">
                                            <h4><a href="#">It is a long established fact that a reader will be distracted by  </a></h4>
                                            <ul class="authar-info">
                                                <li class="date"><a href="#"><i class="ti-timer"></i> May 15, 2016</a></li>
                                                <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                            </ul>
                                            <div class="reatting-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="p-post">
                                            <h4><a href="#">It is a long established fact that a reader will be distracted by  </a></h4>
                                            <ul class="authar-info">
                                                <li class="date"><a href="#"><i class="ti-timer"></i> May 15, 2016</a></li>
                                                <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                            </ul>
                                            <div class="reatting-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="p-post">
                                            <h4><a href="#">It is a long established fact that a reader will be distracted by  </a></h4>
                                            <ul class="authar-info">
                                                <li class="date"><a href="#"><i class="ti-timer"></i> May 15, 2016</a></li>
                                                <li class="like"><a href="#"><i class="ti-thumb-up"></i>15 likes</a></li>
                                            </ul>
                                            <div class="reatting-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF /. NAV TABS -->
                    </div>
                </div>
                <!-- END OF /. SIDE CONTENT -->
            </div>
        </div>


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
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/actus/jquery.min.js')}}" type="text/javascript"></script>
<!-- jquery ui js -->
<script src="{{asset('js/actus/jquery-ui.min.js')}}" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/actus/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- Bootsnav js -->
<script src="{{asset('js/actus/bootsnav.js')}}" type="text/javascript"></script>
<script src="{{asset('js/actus/theia-sticky-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/actus/RYPP.js')}}" type="text/javascript"></script>
<!-- Skycons js -->
{{--<script src="../assets/js/skycons.js" type="text/javascript"></script>--}}
<!-- youtube js -->
{{--<script src="../assets/js/RYPP.js" type="text/javascript"></script>--}}
<script src="{{asset('js/actus/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/actus/custom.js')}}"></script>
