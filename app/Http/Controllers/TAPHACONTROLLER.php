<?php

namespace App\Http\Controllers;
use App\ajouter_article;
use Illuminate\Http\Request;

class TAPHACONTROLLER extends Controller
{
    public function ajouter_article_controller( Request $request)

    {
       
        $request->validate([
           'photo'=>'required',
           'titre'=>'required',
           'contenu' => 'required',
        ]);
      
   
        // $file = $request->file('photo');
        // $file->move('assets.imagesepreuve',$file->getClientOriginalName());
        // $file_name=$file->getClientOriginalName();
   
        $ajouter = new ajouter_article();
        $ajouter->photo = $request->input('photo');
        $ajouter->titre = $request->input('titre');
        $ajouter->contenu = $request->input('contenu');
        $ajouter->save();
        return redirect('/blog')->with('messageC','L\'article a étè bien ajouter !');
          
    }

    // public function insert( Request $request)

    // {
       
    //     $request->validate([
    //        'titre'=>'required',
    //        'consigne'=>'required',
    //        'video' => 'required',
    //        'lienvc'=>'required',
    //        'sujetvm'=>'required',
    //        'lienvm'=>'required',
    //        'imagevm'=>'required|max:100',
          
    //     ]);
      
   
    //     $file = $request->file('imagevm');
    //     $file->move('imagesepreuve',$file->getClientOriginalName());
    //     $file_name=$file->getClientOriginalName();
   
    //     $inserer = new formation_devfullphp();
    //     $inserer->titre = $request->input('titre');
    //     $inserer->consigne = $request->input('consigne');
    //     $inserer->video = $request->input('video');
    //     $inserer->lienvc = $request->input('lienvc');
    //     $inserer->sujetvm = $request->input('sujetvm');
    //     $inserer->lienvm = $request->input('lienvm');
    //     $inserer->imagevm = $file_name;
    //     $inserer->save();
    //     return redirect('index_u')->with('messageC','L\'ancien mot de passe a étè bien changé !');
          
    // }
}
