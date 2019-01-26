@extends('layouts.admin')
@section('admin')
{{--    @dump($errors)--}}

    <div class="row">
        <div class="col-lg-4">
           <center> <img class="img-circle" src="{{asset('img/58e91965eb97430e819064f5.png')}}" alt="" style="height: 100px!important;"></center>
            <div class="panel panel-color " >
                <div class="panel-heading" style="background: #385596!important;">
                    <center><h3 class="panel-title">Facebook</h3></center>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{route('social-post')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom de la page" required>
                        </div>
                        <div class="form-group">
                            <input type="url" name="lien" class="form-control" id="exampleInputPassword1" placeholder="Lien de la page" required>
                        </div>
                        <input type="hidden" name="type" value="facebook" id="">
                        <button type="submit" class="btn waves-effect waves-light" style="background: #385596!important; color: white!important;">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <center> <img class="img-circle" src="{{asset('img/58e9196deb97430e819064f6.png')}}" alt="" style="height: 90px!important;"></center>
            <div class="panel panel-color " style="margin-top: 10px;">
                <div class="panel-heading" style="background: #2AAAE0!important;">
                    <center><h3 class="panel-title">Twitter</h3></center>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{route('social-post')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nom" class="form-control"  placeholder="Nom de la page" required>
                        </div>
                        <div class="form-group">
                            <input type="url" name="lien" class="form-control"  placeholder="Lien de la page" required>
                        </div>
                        <input type="hidden" name="type" value="twitter" id="">

                        <button type="submit" class="btn  waves-effect waves-light" style="background: #2AAAE0!important; color: white!important;">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <center> <img class="img-circle" src="{{asset('img/linkedin-icon-logo-by-Vexels.png')}}" alt="" style="height: 100px!important;"></center>
            <div class="panel panel-color">
                <div class="panel-heading" style="background: #365E8E!important;">
                   <center> <h3 class="panel-title">LinkeDin</h3></center>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{route('social-post')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom de la page" required>
                        </div>
                        <div class="form-group">
                            <input type="url" name="lien" class="form-control" id="exampleInputPassword1" placeholder="Lien de la page" required>
                        </div>
                        <input type="hidden" name="type" value="linkeDin" id="">

                        <button type="submit" class="btn waves-effect waves-light" style="background: #365E8E!important; color: white!important;">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            @if($social->count() > 0)
                <div class="table-rep-plugin">
                    <div class="table-responsive" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table  table-striped">
                            <thead>
                            <tr>
                                <th>Nom de la page</th>
                                <th data-priority="6">Lien</th>
                                <th data-priority="3">Tyepe de réseau social</th>
                                <th data-priority="3">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- Repeat -->
                            <tr>
                                @foreach($social as $key =>  $social_net)

                                    <!--MODAL SHOW AND EDIT-->

                                        <div id="con-close-modal{{$key}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content ">
                                                    <form method="post" action="{{route('social-edit', $social_net->id)}}">
                                                        @csrf
                                                    <div class="modal-header ">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <center><h4 class="modal-title">Modification de votre réseau social</h4></center>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="field-1" class="control-label">Nom</label>
                                                                    <input type="text" name="nom" class="form-control" id="field-1" placeholder="nom de la page" value="{{$social_net->nom}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="field-2" class="control-label">Lien</label>
                                                                    <input type="url" name="lien" class="form-control" id="field-2" placeholder="Lien de la page" value="{{$social_net->lien}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="border-top: none!important;">
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Annuler</button>
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Sauvegarder</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!--//MODAL SHOW AND EDIT-->


                                    <th><span class="co-name">{{$social_net->nom}}</span></th>
                                    <td>{{$social_net->lien}}</td>
                                    <td>
                                        @if($social_net->type == 'facebook')
                                            <button type="button" class="btn btn-facebook waves-effect waves-light">
                                                <i class="fa fa-facebook-f"></i> Facebook
                                            </button>
                                        @endif

                                        @if($social_net->type == 'twitter')
                                            <button type="button" class="btn btn-twitter waves-effect waves-light">
                                                <i class="fa fa-twitter"></i> Twitter
                                            </button>
                                        @endif

                                        @if($social_net->type == 'linkeDin')
                                            <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                                <i class="fa fa-linkedin-in"></i> Linkedin
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        {{--<form method="POST" action="{{route('social-delete',$social_net->id)}}">--}}
                                            {{--{{csrf_field()}}--}}
                                            {{--{{method_field('PUT')}}--}}

                                            <a href="{{route('social-delete',$social_net->id)}}" data-method="PUT" data-confirm="etes vous sur ? " class="btn btn-danger waves-effect waves-light"> <i class="fa fa-trash-o"></i> </a>
                                        {{--</form>--}}
                                           <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal{{$key}}"> <i class="fa fa-edit"></i> </button>
                                    </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                @else
                <center>
                    <h1> VOUS NE DISPOSEW D'AUCUN RESEAU SOCIAL</h1>
                </center>
            @endif
        </div>
    </div>
</div>


    @stop
