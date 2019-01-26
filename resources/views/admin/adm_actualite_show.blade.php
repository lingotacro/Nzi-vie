@extends('layouts.admin')

@section('admin')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive text-nowrap">

                <table  class="table table-striped table-colored table-info table-fixed table-hover">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Sous titre</th>
                        {{--<th>Image</th>--}}
                        <th>Publication</th>
                        <th>Description</th>
                        <th>Catégorie</th>
                        <th>Etat</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($showActualite as $actus)
                        <tr>
                            <td>{{$actus->titre}}</td>
                            <td>{{$actus->sous_titre}}</td>
                            {{--<td>{{$actus->image}}</td>--}}
                            <td>{{$actus->publication}}</td>
                            <td>{{$actus->description}}</td>
                            <td>{{$actus->categorie_actualite->titre}}</td>
                            <td>{{$actus->statut}}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-rounded"> <i class="far fa-trash-alt"></i> </button>
                                <button type="button" class="btn btn-primary btn-rounded"> <i class="far fa-eye"></i> </button>
                                <button type="button" class="btn btn-warning btn-rounded"> <i class="far fa-edit"></i> </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .table > thead > tr > th{
            color: white!important;
        }
    </style>
    @stop
