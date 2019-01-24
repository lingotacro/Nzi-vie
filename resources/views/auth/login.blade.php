@extends('layouts.auth')
@section('content')

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

    <!-- HOME -->
    <section>
        <div class="container-alt">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="m-t-40 account-pages">
                            <div class="text-center account-logo-box">
                                <h2 class="text-uppercase">
                                    <a href="index.html" class="text-success">
                                        <span><img src="{{asset('img/logo.png')}}" alt="" height="36"></span>
                                    </a>
                                </h2>
                                <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="email"  name="email" value="{{ old('email') }}" placeholder="Email" required>
                                            @if ($errors->has('email'))
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                            @if ($errors->has('password'))
                                                     <strong>{{ $errors->first('password') }}</strong>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox-signup" type="checkbox" checked>
                                                <label for="checkbox-signup">
                                                    Se souvenir de moi
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group text-center m-t-30">
                                        <div class="col-sm-12">
                                            <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Mot de passe oublié?</a>
                                        </div>
                                    </div>

                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Connecter</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                        <!-- end card-box-->


                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Pas de compte ? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Inscription</b></a></p>
                            </div>
                        </div>

                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->
    @stop
