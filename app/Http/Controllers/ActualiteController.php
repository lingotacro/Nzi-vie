<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\CategorieActualite;
use App\Http\Requests\ActualiteFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = CategorieActualite::all();
        return view('admin.adm_actualite_add',compact('categorie'));
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
    public function store(ActualiteFormRequest $request)
    {

        $request->merge(['publication'=> date('Y-m-d', strtotime($request->publication))]);
//        $imageName = time().'.'.request()->image->getClientOriginalExtension();
//        request()->image->move(public_path('images'), $imageName);
        Actualite::firstOrCreate([
             'titre' => $request->titre,
             'sous_titre' => $request->sous_titre,
             'image' => $request->image,
             'publication' => $request->publication,
             'description' => $request->description,
             'categorie_actualite_id' => $request->categorie_actualite_id,
        ]);
        $actualite = Actualite::where(
            'titre', '=', Input::get('titre')
        )->first();

        if ($actualite === null){
            Actualite::create($request->all());
            $request->session()->flash('message', 'Succès votre catégorie à bien été enregistré ');
            return back();
        }else{
            return back();
        }

        return redirect()->route('admin-actu-new');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        $showActualite = Actualite::all();
//        dd($showActualite[0]->categorie_actualite);
        return view('admin.adm_actualite_show', compact('showActualite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        //
    }
}
