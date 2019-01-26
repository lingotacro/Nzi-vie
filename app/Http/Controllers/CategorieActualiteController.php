<?php

namespace App\Http\Controllers;

use App\CategorieActualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategorieActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.accueil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
           'titre' => 'required',
        ]);
        if ($validator->fails()){
                return back()->with('error','Votre enregistrement n\'a pas été pris en compte');

        }
        if (CategorieActualite::where('titre', '=', Input::get('titre'))->count() > 0){
            return back();
        }else{
            CategorieActualite::create($request->all());
            session()->flash('message','Succès votre catégorie à bien été enregistré ');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategorieActualite  $categorieActualite
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieActualite $categorieActualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategorieActualite  $categorieActualite
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieActualite $categorieActualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategorieActualite  $categorieActualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieActualite $categorieActualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategorieActualite  $categorieActualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieActualite $categorieActualite)
    {
        //
    }
}
