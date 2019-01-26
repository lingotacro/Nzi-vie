@extends('layouts.admin')
@section('admin')
    <div class="col-md-12">
        <div class="panel panel-color panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title" style="text-transform: uppercase;">ajouter une nouvelle actualité</h3>

            </div>
            <div class="panel-body">
                <div class="col-md-12 m-t-10">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('admin-actu-str')}}">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="title">Titre</label>
                            </div>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control inputmask" name="titre">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="sub-title">Sous titre</label>
                            </div>
                            <div class="col-md-8">
                                <input id="sub-title" type="text" class="form-control inputmask" name="sous_titre">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="img">Image</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" id="image" class="form-control inputmask"
                                       name="image"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="date_creation">Date de création</label>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" id="date_creation" class="form-control"
                                           name="publication"
                                           value="05/06/2018"
                                           placeholder="JJ/MM/AAAA">
                                    <span class="input-group-addon bg-custom b-0"><i
                                            class="mdi mdi-calendar text-white"></i></span>
                                </div><!-- input-group -->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="description">Description</label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control inputmask" name="description" id="description" cols="90"
                                          rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="email">Catégorie</label>
                            </div>
                            <div class="col-md-8">
                                <select name="categorie_actualite_id" id="" class="form-control inputmask">
                                    <option value="">sélectionnez la catégorie</option>
                                    @foreach($categorie as $cat)
                                        <option value="{{$cat->id}}">{{$cat->titre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-4">
                                <button type="submit" class="btn btn-icon waves-effect waves-light btn-primary"><i
                                        class="fa fa-save"></i> Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
