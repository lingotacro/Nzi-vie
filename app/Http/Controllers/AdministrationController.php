<?php

namespace App\Http\Controllers;

use App\Administration;
use App\Http\Requests\SocialFormRequest;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdministrationController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function acutusadd()
    {
        $categorie = '';
        return view('admin.adm_actualite_add');
    }

    public function getPageSocial(){
        $social = Social::all();
        return view('admin.adm_social',compact('social'));
    }

    public function storeSocial(SocialFormRequest $request){
//        dd($request->all());
        $result = Social::create($request->all());
        if ($result){
            return redirect()->back()->with('success','Succès votre enregistrement à bien été enregistré ');
        }else{
            return redirect()->back()->with('error','Erreur d\'enregistrement  ');
        }
    }
    public function deleteSocial(Social $sociale){
        $social_del = Social::destroy($sociale->id);
        if ($social_del ){
            return redirect()->back()->with('success','Votre suppressions à bien été pris en compte');
        }else{
            return redirect()->back()->with('error','Votre suppression à échoué');
        }
    }

    public function editSocial(SocialFormRequest $request, Social $sociale){

        $social_upd = $sociale->update($request->except(['_token']));
        if ($social_upd ){
            return redirect()->back()->with('success','Votre mise à jour  à bien été pris en compte');
        }else{
            return redirect()->back()->with('error','Mise à jour échoué veuillez reésayer ');
        }

    }
}
