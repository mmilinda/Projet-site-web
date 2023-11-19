<?php
namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ajouter_article_taphaA;
use Illuminate\Http\Request;
use App\Models;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;



class TAPHACONTROLLER extends Controller
{

// affichage des articles 
    public function affiche_article_control(Request $request)
    {
        $ajouter_article_tapha = ajouter_article_taphaA::all();
        return view('blog')->with('ajouter_article_tapha_a_s', $ajouter_article_tapha);
                                    // nom de la table
    }

    public function ajouter_article_controller(Request $request)
    {
       
        $request->validate([
           'photo'=>'required',
           'titre'=>'required',
           'contenu' => 'required',
        ]);
      
   
        $file = $request->file('photo');
        $file->move('images_article',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();

        $ajouter = new ajouter_article_taphaA();
        $ajouter->photo = $file_name;
        $ajouter->titre = $request->input('titre');
        $ajouter->contenu = $request->input('contenu');
        $ajouter->save();
        return redirect('/afficheArticle')->with('message','L\'article a étè bien ajouter !');   
    }



    // affichage des articles pour edition
    public function  edition_article_blog_show(Request $request, $id)
    {
        $ajouter_article_tapha = ajouter_article_taphaA::findOrFail($id);
        return view('edition-Article')->with('ajouter_article_tapha_a_s', $ajouter_article_tapha);
                                    // nom de la table
    }
    // EDITION DES ARTICLES

    public function edition_article_update( Request $request, $id)
    {
        $file = $request->file('photo');
        $file->move('images_article',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();


        $ajouter = ajouter_article_taphaA::find($id);
        $ajouter->photo = $file_name;
        $ajouter->titre = $request->input('titre');
        $ajouter->contenu = $request->input('contenu');
        $ajouter->created_at = $request->input('created_at');
        $ajouter->save();
       return redirect('/afficheArticle')->with('message','L\'article a étè bien modifié !');
    }

    
   
    //    Supprimer un article 
    public function  suppression_article($id){
    $ajouter_article_tapha = ajouter_article_taphaA::findOrFail($id);
    $ajouter_article_tapha->delete();

    return redirect('/afficheArticle')->with('message','L\'article a étè bien supprimé !');

   }
// Déconnexion
   public function logoutaction($user, $value=true)
   {
      Session::flash($user);
      Auth:: logout();
      return redirect('login');
   }
}
