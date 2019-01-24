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
                                       for="title">Titre</label>
                            </div>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control inputmask" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="sub-title">Sous titre</label>
                            </div>
                            <div class="col-md-8">
                                <input id="sub-title" type="text" class="form-control inputmask" name="subtitle" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="img">Image</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" id="img" class="form-control inputmask"
                                       name="img"/>
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
                                       for="description">Description</label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control inputmask" name="description" id="description" cols="90" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="btn btn-default waves-effect waves-light" style="width: 100%;"
                                       for="email">Catégorie</label>
                            </div>
                            <div class="col-md-8">
                                <select name="" id="" class="form-control inputmask">
                                    <option value="">sélectionnez la catégorie</option>
                                    <option value="">Catégorie 1</option>
                                    <option value="">Catégorie 2</option>
                                    <option value="">Catégorie 3</option>
                                    <option value="">Catégorie 4</option>
                                </select>
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
