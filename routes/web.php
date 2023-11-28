<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\LandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandlordController;
use App\Models\contact;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|*/
Auth::routes();
Route::get('/', function () {
    return view('/homepage');
});

Route::group(['middleware' => ['auth','admin']], function(){
    // Affiche formulaire d'ajout article
    Route::get('/formulaire_ajout_articke', function () {
        return view('/formulaire_ajout_articke');
    });
    
    // envoi du formulaire
    Route::post('/ajouter_article',[App\Http\Controllers\TAPHACONTROLLER::class,'ajouter_article_controller'])->name('form_ajout_article.file');
    
    
   
    // Edition d'article
    Route::get('/edition_article_blog/{id}', [App\Http\Controllers\TAPHACONTROLLER::class, 'edition_article_blog_show']);
    Route::post('/edition_article_blogA/{id}', [App\Http\Controllers\TAPHACONTROLLER::class, 'edition_article_update']);
    
    // Supprimer un article
    Route::delete('/article-supprimer/{id}', [App\Http\Controllers\TAPHACONTROLLER::class, 'suppression_article']);
    
    
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    

});
 //  affichage de la page des articles
 Route::get('/afficheArticle',[App\Http\Controllers\TAPHACONTROLLER::class,'affiche_article_control']);

Route::get('/header', function () {
    return view('/header');
});

Route::get('/checkoutpageA', function () {
    return view('/checkoutpageA');
});

Route::get('/contact', function () {
    return view('/contact');
});
/*Route::get('/landlord', function () {
    return view('/projet.landlord');
});*/



Route::get('/Signin', function () {
    return view('SignIn');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/LogIn', function () {
    return view('LogIn');
     });
// Route::get('/property', function () {
//     return view('property');

// });

Route::get('/proper', function () {
    return view('/proper');
});
// Notification
Route::get('/message', function () {
    return view('/message');
});
Route::get('/message',[App\Http\Controllers\MessageController::class,'contact']);


Route::group(['middleware' => ['auth','admin']], function(){
Route::get('/cities',[LandController::class,'showcities'])->name('cities');
Route::post('/store_cities', [LandController::class, 'store_cities'])->name('store_cities');
Route::get('/areas',[AreaController::class,'showareas'])->name('areas');
Route::post('/store_areas', [AreaController::class, 'store_areas'])->name('store_areas');

//Route::get('/landlord',[LandController::class,'showlandlord'])->name('showlandlord');



Route::get('/liste_critere', [LandController::class, 'liste_critere'])->name('liste_critere');

Route::delete('/critere/supprimer/{id}', [LandController::class, 'supprimer_critere'])->name('critere.supprimer');

Route::get('/liste_area', [LandController::class, 'liste_area'])->name('liste_area');

Route::delete('/area/supprimer/{id}', [LandController::class, 'supprimer_area'])->name('area.supprimer');


Route::get('/liste_citi', [LandController::class, 'liste_citi'])->name('liste_citi');

Route::delete('/citi/supprimer/{id}', [LandController::class, 'supprimer_citi'])->name('citi.supprimer');
});
Route::get('/landlord',[LandController::class,'showlandlord'])->name('showlandlord');
Route::post('/store_critere', [LandController::class, 'store_critere'])->name('store_critere');
//Déconnexion :
Route::get('/logout',[App\Http\Controllers\TAPHACONTROLLER::class,'logoutaction']);

// afficher le contenu des blogs
Route::get('/view_article/{id}',[App\Http\Controllers\TAPHACONTROLLER::class,'view_article_show']);

//affichage contact
Route::get('/contact', function () {
    return view('/contact');
});
//Envoi formaulaire contact
Route::post('/contact-contact', function () 
{
    
    $contact = new contact();
    $contact->un = request('un');
    $contact->nom = request('nom');
    $contact->email = request('email');
    $contact->tel = request('tel');
    $contact->message = request('message');;
    $contact->save();
    return redirect('/contact')->with('message','L\'message bien envoyer !');   
 });




 //  affichage des chambres disponible à louer par la barre de recheche
 Route::get('/booking',[App\Http\Controllers\TAPHACONTROLLER::class,'roomsshow']);


 Route::get('/role_Guest_Detail/{id}',[App\Http\Controllers\TAPHACONTROLLER::class,'Guest_Detail_show']);

// Route::get('/Guest_Detail', function () {
//     return view('/Guest_Detail');
// });

//  Route::post('/Guest_Detail', function () 
//  {
     
//      $contact = new contact();
//      $contact->un = request('un');
//      $contact->nom = request('nom');
//      $contact->email = request('email');
//      $contact->tel = request('tel');
//      $contact->message = request('message');;
//      $contact->save();
//      return redirect('/contact')->with('message','L\'message bien envoyer !');   
//   });
 
 






