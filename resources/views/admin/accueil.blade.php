@extends('layouts.admin')
@section('admin')

    <div class="col-md-12">
        <div class="panel panel-color panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">INFORMATIONS DE L'ENTREPRISE</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-12 m-t-10">
                    <form class="form-horizontal" role="form" method="POST"
                          action="update-entreprise/2f0788f8-32f1-4a19-a30e-ab81ad9d65f3">
                        <input type="hidden" name="_token" value="YPwU8iypLUOXFRAoW53VsVAlZ8S3sB4QoeN238js"> <input
                            type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="nom">Nom</label>
                            </div>
                            <div class="col-md-8">
                                <input id="nom" type="text" class="form-control inputmask" name="nom"
                                       value="NSIA VIE ASSURANCE (vallon)">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="responsable">Directeur général</label>
                            </div>
                            <div class="col-md-8">
                                <input id="responsable" type="text" class="form-control inputmask"
                                       name="responsable"
                                       value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="libelle">Description</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="description" class="form-control inputmask"
                                       name="description"
                                       value="Entreprise d&#039;assurance"/>
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
                                           name="date_creation"
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
                                       for="raison_sociale">Raison sociale</label>
                            </div>
                            <div class="col-md-8">
                                <input id="raison_sociale" type="text" class="form-control inputmask"
                                       name="raison_sociale"
                                       value="SA">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="email">Email</label>
                            </div>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control inputmask" name="email"
                                       value="info@groupensia.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="adresse">Adresse géographique</label>
                            </div>
                            <div class="col-md-8">
                                <input id="adresse" type="text" class="form-control inputmask" name="adresse"
                                       value="COCODY VALLON, RUE DES JARDINS">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="telephone">Telephone</label>
                            </div>
                            <div class="col-md-8">
                                <input id="telephone" type="text" class="form-control inputmask" name="telephone"
                                       value="22449039">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="ville">Ville</label>
                            </div>
                            <div class="col-md-8">
                                <input id="ville" type="text" class="form-control inputmask" name="ville"
                                       value="ABIDJAN">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="banque">Banque</label>
                            </div>
                            <div class="col-md-8">
                                <input id="banque" type="text" class="form-control inputmask" name="banque"
                                       value="NSIA BANQUE">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="localisation_long">Logo </label>
                            </div>
                            <div class="col-md-8">
                                <input id="localisation_long" type="text" class="form-control inputmask"
                                       name="localisation_long"
                                       value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="localisation_lat">Couleur primaire</label>
                            </div>
                            <div class="col-md-8">
                                <input id="localisation_lat" type="text" class="form-control inputmask"
                                       name="localisation_lat"
                                       value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="localisation_lat">Couleur Sécondaire</label>
                            </div>
                            <div class="col-md-8">
                                <input id="localisation_lat" type="text" class="form-control inputmask"
                                       name="localisation_lat"
                                       value="">
                            </div>
                        </div>
                        <input type="hidden" name="t_name" value="entreprise">
                        <input type="hidden" name="version" value="4">
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
