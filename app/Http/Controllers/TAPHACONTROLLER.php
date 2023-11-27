<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ajouter_article_taphaA;
use Illuminate\Http\Request;
use App\Models;
use App\Models\booking_rooms;

use App\User;
use App\Http\Controllers\Controller;
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

      if($request->filled('city') && $request->filled('date') && $request->filled('guest') && $request->filled('filter')){
         $results = booking_rooms::where('city', 'like', "%$rooms%")
         ->orwhere('date_of_availability', 'like', "%$rooms_date%" )
         ->orwhere('number_of_guest', 'like', "%$rooms_guest%" )
         ->orwhere('city_view', 'like', "%$rooms_filter%" )
         ->orwhere('parking', 'like', "%$rooms_filter%" )
         ->orwhere('elevator', 'like', "%$rooms_filter%" )
         ->orwhere('wifi', 'like', "%$rooms_filter%" )
         ->paginate(5);
         return view('booking')->with('booking_rooms', $results);
      }elseif($request->filled('city')) {
         $results_rooms = booking_rooms::where('city', 'like', "%$rooms%")->paginate(5);  
         return view('booking')->with('booking_rooms', $results_rooms);
      }elseif($request->filled('date')) {
         $results_date_of_availability = booking_rooms::where('date_of_availability', 'like', "%$rooms_date%")->paginate(5);  
         return view('booking')->with('booking_rooms', $results_date_of_availability);
      }elseif($request->filled('guest')) {
         $results_guest = booking_rooms::where('number_of_guest', 'like', "%$rooms_guest%")->paginate(5);  
         return view('booking')->with('booking_rooms',$results_guest);
      }elseif($request->filled('filter')) {
         $results_filter_view = booking_rooms::where('city_view', 'like', "%$rooms_filter%")
         ->orwhere('parking', 'like', "%$rooms_filter%")
         ->orwhere('elevator', 'like', "%$rooms_filter%" )
         ->orwhere('wifi', 'like', "%$rooms_filter%" )->paginate(5);  
         return view('booking')->with('booking_rooms',$results_filter_view);
      } 
      else{
         $allrooms =  booking_rooms::all();
       return view('booking')->with('booking_rooms', $allrooms);
 
      }

     
            // ->orwhere('number_of_guest', 'like', "%$rooms%")
            // ->orwhere('date_of_availability', 'like', "%$rooms_date%")
     


      // if($request->filled('search')){
//    $rooms = booking_rooms::search($request->search)->get();

// }else {
//    $rooms = booking_rooms::paginate(8);
// }

//    return view('booking', compact('rooms'));
// }
   
}

      // affichage des chambres disponible à louer 
      // public function roomsshow_date(Request $request){
      //    $rooms_date = request()->input('date');
      //    $rooms = request()->input('city');
       

         // $results_date_of_availability = booking_rooms::where('date_of_availability', 'like', "%$rooms_date%")->paginate(5);
         // $results = booking_rooms::where('city', 'like', "%$rooms%")->paginate(5);
               // ->orwhere('number_of_guest', 'like', "%$rooms%")
               
        
               // ->paginate(5);
         
   //       return view('booking')->with('booking_rooms', $results_date_of_availability);
   //       return view('booking')->with('booking_rooms', $results);   
   // }
 }







