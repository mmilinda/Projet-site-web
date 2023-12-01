<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ajouter_article_taphaA;
use App\Models\Critere;
use App\Models\City;
use App\Models\reservation;
use App\Models\cities;
use Illuminate\Http\Request;
use App\Models;
use App\Models\booking_rooms;

use App\User;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;




class TAPHACONTROLLER extends Controller
{

// affichage des articles 
    public function affiche_article_control(Request $request)
    {

      //   $string= "Lorem ipsum dolor sit amet consectetur: adipisicing elit. ";
      //   (str::of($string)->words(words:5, end:'lire plus'));
        $ajouter_article_tapha = ajouter_article_taphaA::all();
        return view('blog')->with('ajouter_article_tapha_a_s', $ajouter_article_tapha);
                                    // nom de la table
    }

    public function ajouter_article_controller(Request $request)
    {
       
        $request->validate([
           'photo'=>'required',
           'titre'=>'required',
           'contenu' => ['required', 'string', 'max:2000'],
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

     // affichage le contenu des articles pour edition
     public function  view_article_show(Request $request, $id)
     {
         $ajouter_article_tapha = ajouter_article_taphaA::findOrFail($id);
         return view('affiche_contenu_article')->with('ajouter_article_tapha_a_s', $ajouter_article_tapha);
                                                      // nom de la table
     }




   //   Affichage de city

   // public function affichage_city(Request $request){
   //    $cities = City::all();
   // return view('booking_include')->with('cities',$cities);
   // }
// affichage des chambres disponible à louer 
public function roomsshow(Request $request){

      $rooms = request()->input('city');
      $rooms_date = request()->input('date');
      $rooms_guest = request()->input('guest');
      $rooms_filter = request()->input('filter');
      $rooms_filterB = request()->input('filter');
      $rooms_filterC = request()->input('filter');
      $rooms_filterD = request()->input('filter');
     

      // filter

   //    if ($request->filled('city')) {  
   //       $guest_detail = Critere::all();
   //       return view('booking')->with('Critere', $guest_detail);
   //                                                 // nom de la table
   //   }
         // ->orwhere('city_view', 'like', "%$rooms_filter%" )
         // ->orwhere('parking', 'like', "%$rooms_filter%" )
         // ->orwhere('elevator', 'like', "%$rooms_filter%" )
         // ->orwhere('wifi', 'like', "%$rooms_filter%" )
      if($request->filled('city') && $request->filled('date') && $request->filled('guest')){
         $results = Critere::where('city', 'like', "%$rooms%")
         ->orwhere('date_of_availability', 'like', "%$rooms_date%" )
         ->orwhere('nombre_chambre', 'like', "%$rooms_guest%" )->paginate(5);
         return view('booking')->with('Critere', $results);
      }elseif($request->filled('city')) {
         $results_rooms = Critere::where('city', 'like', "%$rooms%")->paginate(5);  
         return view('booking')->with('Critere', $results_rooms);
      }elseif($request->filled('date')) {
         $results_date_of_availability = Critere::where('date_of_availability', 'like', "%$rooms_date%")->paginate(5);  
         return view('booking')->with('Critere', $results_date_of_availability);
      }elseif($request->filled('guest')) {
         $results_guest = Critere::where('nombre_chambre', 'like', "%$rooms_guest%")->paginate(5);  
         return view('booking')->with('Critere',$results_guest);
      }elseif($request->filled('filter')) {
         $results_filter_view = Critere::where('city_view', 'like', "$rooms_filter")
         ->orwhere('parking', 'like', "$rooms_filter")
         ->orwhere('elevator', 'like', "$rooms_filter" )
         ->orwhere('wifi', 'like', "$rooms_filter" )->paginate(5);  
         return view('booking')->with('Critere',$results_filter_view);
      } 
      else{
         $allrooms =  Critere::all();
       return view('booking')->with('Critere', $allrooms);
 
      }
     
       
}
// public function  edition_article_blog_show(Request $request, $id)
//  {
//      $ajouter_article_tapha = ajouter_article_taphaA::findOrFail($id);
//      return view('edition-Article')->with('ajouter_article_tapha_a_s', $ajouter_article_tapha);
//                                  // nom de la table
//  }

  // affichage du guest detail
//   public function  affichage_city(Request $request)
//   {
//       $guest_detail = Critere::all();
//       return view('booking')->with('Critere', $guest_detail);
//                                                 // nom de la table
//   }

  // affichage du guest detail
  public function  Guest_Detail_show(Request $request, $id)
  {
      $guest_detail = Critere::findOrFail($id);
      return view('Guest_Detail')->with('Critere', $guest_detail);
                                                // nom de la table
  }


// return view('projet.landlord',compact('cities','areas'));

// public function edite_property_update(Request $request, $id)
// {
//     $file = $request->file('photo');
//     $file->move('images_property',$file->getClientOriginalName());
//     $file_name=$file->getClientOriginalName();

//     $critere = Critere::find($id);
//     $critere->nom = $request->input('nom');
//     $critere->email = $request->input('email');
//     $critere->numero_tel = $request->input('numero_tel');
//     $critere->city = $request->input('city');
//     $critere->area = $request->input('area');
//     $critere->nombre_chambre=$request->input('nombre_chambre');
//     $critere->photo = $file_name;
//     $critere->type_property=$request->input('type_property');
//     $critere->price=$request->input('price');
//     $critere->bath=$request->input('bath');
//     $critere->wifi=$request->input('wifi');
//     $critere->city_view=$request->input('city_view');
//     $critere->elevator=$request->input('elevator');
//     $critere->parking=$request->input('parking');
//     $critere->level=$request->input('level');
//     $critere->date_of_availability=$request->input('date_of_availability');
//     $critere->save();
//     // Si vous avez besoin de gérer le téléchargement de la vidéo, vous pouvez le faire ici.
//     return redirect('afficheArticle')->with('success', 'opération effetuée avec succès');
//    }

   // public function edition_article_update( Request $request, $id)
   // {
   //     $file = $request->file('photo');
   //     $file->move('images_article',$file->getClientOriginalName());
   //     $file_name=$file->getClientOriginalName();


   //     $ajouter = ajouter_article_taphaA::find($id);
   //     $ajouter->photo = $file_name;
   //     $ajouter->titre = $request->input('titre');
   //     $ajouter->contenu = $request->input('contenu');
   //     $ajouter->created_at = $request->input('created_at');
   //     $ajouter->save();
   //    return redirect('/afficheArticle')->with('message','L\'article a étè bien modifié !');
   // }

   
 // affichage des properties pour l'édition
 
 public function edite_property_show(Request $request, $id){
   $edite_property = Critere::findOrFail($id);
   // $citys = cities::findOrFail($id);
   return view('edite_property')->with('Critere', $edite_property);
   // return view('edite_property', compact('Critere', 'cities'));
}

//Affichage de la liste des  cities
public function edite_property_cities(Request $request)
{
 $affiche_cities = cities::all();
 return view('edite_property')->with('cities', $affiche_cities);
}

// public function  Guest_Detail_show(Request $request, $id)
//   {
//       $guest_detail = Critere::findOrFail($id);
//       return view('Guest_Detail')->with('booking_rooms', $guest_detail);
//                                                 // nom de la table
//   }
 }







