@extends('layouts.authers_lay', ['title' => 'Cotation'])

@section('authers_lay')

    @include('patials._authers_header')
    @include('patials._authers_page_title')

    <div class="row">
        {{--<center>--}}
            {{--{{$services->datas[0]->produce_name}}--}}
        {{--</center>--}}

        <div class="mt-3" style="margin-left: 20px;">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item active">
                    <a class="nav-link active" data-toggle="tab" href="#reseau-individuel">Réseau Individuel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#reseseau-corporate">Réseau Corporate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#reseau-bancassurance">Réseau Bancassurance</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="reseau-individuel" class="tab-pane active"><br>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <center>

                                    <div class="col-md-6">
                                        <a href="#"><img src="{{asset('img/01.png')}}" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="col-md-6">
                                        <h2> Réseau Individuel</h2>
                                        <p style="text-align: justify; padding-right: 40px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Accusamus error est eum fugit incidunt, maxime minima minus, modi odit provident quasi
                                            quisquam quo repellat, totam voluptatem? Accusantium beatae dolorem doloremque, error minus
                                            quam temporibus ut veniam! Accusantium aliquid aperiam architecto aut consequatur cupiditate
                                            dolorum ea eaque expedita, fugiat incidunt ipsa itaque molestias natus nemo omnis
                                            perspiciatis quaerat quas quasi quibusdam repellendus rerum sit sunt tempore temporibus
                                            ullam ut vel vero voluptas voluptate? Architecto blanditiis dolorem eaque esse impedit
                                            incidunt inventore, libero maxime molestias, nihil perspiciatis quas quasi quia, sint
                                            voluptatibus? Assumenda dolore esse est id magni nobis numquam obcaecati sit. </p>
                                    </div>
                                </center>
                            </div>
                            <div class="container">
                                <center> <h1 style="text-transform: uppercase;">
                                        @if($services)
                                        {{$services->message}}</h1>
                                             @else
                                                 Lorem ipsum dolor sit amet.
                                         @endif
                                </center>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">--}}
                            {{--Launch demo modal--}}
                        {{--</button>--}}

                        <!-- Modal -->
                       @if($services)
                            @foreach($services->datas as $value )
                                <div class="modal fade" id="exampleModalCenter{{$value->produce_key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{$value->produce_name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                           @endif
                        <!-- Fin modal -->

                        <div class="owl-carousel owl-theme" style="margin-top: 35px;">
                           @if($services)
                                @foreach($services->datas as $value )
                                    <div class="item">
                                        <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$value->produce_key}}"><img src="{{$value->image}}" class="img-responsive zoom" alt=""></a>
                                    </div>
                                @endforeach
                           @endif
                        </div>
                        <hr>
                    </section>
                </div>
                <div id="reseseau-corporate" class="tab-pane fade"><br>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <center>

                                    <div class="col-md-6">
                                        <a href="#"><img src="{{asset('img/02.png')}}" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="col-md-6">
                                        <h2> Réseau Corporate</h2>
                                        <p style="text-align: justify; padding-right: 40px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Accusamus error est eum fugit incidunt, maxime minima minus, modi odit provident quasi
                                            quisquam quo repellat, totam voluptatem? Accusantium beatae dolorem doloremque, error minus
                                            quam temporibus ut veniam! Accusantium aliquid aperiam architecto aut consequatur cupiditate
                                            dolorum ea eaque expedita, fugiat incidunt ipsa itaque molestias natus nemo omnis
                                            perspiciatis quaerat quas quasi quibusdam repellendus rerum sit sunt tempore temporibus
                                            ullam ut vel vero voluptas voluptate? Architecto blanditiis dolorem eaque esse impedit
                                            incidunt inventore, libero maxime molestias, nihil perspiciatis quas quasi quia, sint
                                            voluptatibus? Assumenda dolore esse est id magni nobis numquam obcaecati sit. </p>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme" style="margin-top: 35px;">
                            <div class="item">
                                <a href=""><img src="{{asset('img/33.jpg')}}" class="img-responsive" alt=""></a>
                                <a href="" style="margin-top: 35px;"> <h3> Lorem ipsum dolor sit amet.</h3></a>
                            </div>

                        </div>
                        <hr>
                    </section>
                </div>
                <div id="reseau-bancassurance" class="tab-pane fade"><br>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <center>

                                    <div class="col-md-6">
                                        <a href="#"><img src="{{asset('img/03.png')}}" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="col-md-6">
                                        <h2> Réseau Bancassurance</h2>
                                        <p style="text-align: justify; padding-right: 40px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Accusamus error est eum fugit incidunt, maxime minima minus, modi odit provident quasi
                                            quisquam quo repellat, totam voluptatem? Accusantium beatae dolorem doloremque, error minus
                                            quam temporibus ut veniam! Accusantium aliquid aperiam architecto aut consequatur cupiditate
                                            dolorum ea eaque expedita, fugiat incidunt ipsa itaque molestias natus nemo omnis
                                            perspiciatis quaerat quas quasi quibusdam repellendus rerum sit sunt tempore temporibus
                                            ullam ut vel vero voluptas voluptate? Architecto blanditiis dolorem eaque esse impedit
                                            incidunt inventore, libero maxime molestias, nihil perspiciatis quas quasi quia, sint
                                            voluptatibus? Assumenda dolore esse est id magni nobis numquam obcaecati sit. </p>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme" style="margin-top: 35px;">
                            <div class="item">
                                <a href=""><img src="{{asset('img/33.jpg')}}" class="img-responsive" alt=""></a>
                                <a href="" style="margin-top: 35px;"> <h3> Lorem ipsum dolor sit amet.</h3></a>
                            </div>

                        </div>
                        <hr>
                    </section>
                </div>
            </div>
        </div>

    </div>
    @include('patials._authers_footer')



    <style>
        .nav-link{
            font-size: x-large;
            letter-spacing: 11px;
        }
        .zoom:hover {
            -ms-transform: scale(1.5); /* IE 9 */
            -webkit-transform: scale(1.5); /* Safari 3-8 */
            transform: scale(1.5);
        }
        .zoom{
            transition: transform .7s;
        }
    </style>


    <script src="{{asset('js/plugins.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            items:4,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        });

        // console.log(window.location.hash);
        var tabslink =  $('ul.nav.nav-tabs');
        var hash = window.location.hash;

        console.log(hash);
        var tab = tabslink.find('a[href="'+ hash +'"]');
        console.log(tabslink);
        if(tab){
            if (hash){
                tabslink.find('li').removeClass('active');
                tab.parent().addClass('active');
            }

            var content = $('.tab-content');
            var item = content.find('.tab-pane');

            if(item.hasClass('active')){
               if (hash) {
                   item.removeClass('active').addClass('fade')
               }
            }
            content.find($(hash)).addClass('active').removeClass('fade');


        }

    </script>
@stop

