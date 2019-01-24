<?php
/**
 * Created by PhpStorm.
 * User: Paterne
 * Date: 16/01/2019
 * Time: 11:55
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil(){
        $jb_title = [];
        return view('pages.index', compact('jb_title'));
    }
    public function about(){

        $data['jb_title'] = ['lib_jb' => 'A PROPOS DE NOUS','sub_jb' => 'A propos de nous'];
//        dd($data);
        return view('pages.about', $data );
    }
    public function contact(){
        $data['jb_title'] = ['lib_jb' => 'CONTACT','sub_jb' => 'Contact'];
        return view('pages.contact', $data);
    }
    public function simulation(){
        $data['jb_title'] = ['lib_jb' => 'Simulation','sub_jb' => 'Simulation'];
        return view('pages.simulation', $data);
    }
    public  function actualite(){
        $data['jb_title'] = ['lib_jb' => 'Nos actualités ','sub_jb' => 'actualités'];
        return view('pages.actualite', $data);
    }
    public  function cotation(){
       try {
           $data['services'] = file_get_contents('http://test.jtprospace.com/ecomri08208154b8939a5e5cfd2d6dd792530b5196bb24/api/produce');
           $data['services'] = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $data['services']));
       }catch (\Exception $excep){
           echo 'problème de connexion ';
           return back()->with('error','Un probleème est survenue veuillez vérifier votre connexion ou reéssayer plus tard');
       }
////        dd($data['services']);

        $data['jb_title'] = ['lib_jb' => 'Services NSIA-VIE ASSURANCES','sub_jb' => 'Services'];
        return view('pages.cotation', $data);
    }

}
