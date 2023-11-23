<?php

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
    

Route::get('/Guest_Detail', function () {
    return view('/Guest_Detail');
});

Route::get('/header', function () {
    return view('/header');
});

Route::get('/checkoutpageA', function () {
    return view('/checkoutpageA');
});

Route::get('/contact', function () {
    return view('/contact');
});
Route::get('/landlord', function () {
    return view('/projet.landlord');
});

Route::get('/booking', function () {
    return view('booking');
});

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


//Déconnexion :
Route::get('/logout',[App\Http\Controllers\TAPHACONTROLLER::class,'logoutaction']);

// afficher le contenu des blogs
Route::get('/view_article/{id}',[App\Http\Controllers\TAPHACONTROLLER::class,'view_article_show']);

// Controller Contact


// Route::post('/contact-contact', [App\Http\Controllers\ContactController::class, 'showContactPage'])->name('contact');

//  Route::post('/contact-contact', 'ContactController@showContactPage')->name('contact');


Route::get('/contact', function () {
    return view('/contact');
});

Route::post('/contact-contact', function () 
{
    // $reservationsEmail = 'reservations@theflexliving.com';
    // $reservationsPhone = '0203 307 4477';

    // $landlordsEmail = 'supply@theflexliving.com';
    // $landlordsPhone = '0203 307 4477';

    // $maintenanceEmail = 'maintenance@theflexliving.com';
    // $maintenancePhone = '0203 307 4477';
    // $request->validate([
    //     'un'=>'required',
    //     'nom'=>'required',
    //     'email'=>'required',
    //     'tel'=>'required',
    //     'message' => ['required', 'string', 'max:2000'],
    // ]);


    // $file = $request->file('photo');
    // $file->move('images_article',$file->getClientOriginalName());
    // $file_name=$file->getClientOriginalName();

    $contact = new contact();
    $contact->un = request('un');
    $contact->nom = request('nom');
    $contact->email = request('email');
    $contact->tel = request('tel');
    $contact->message = request('message');;
    $contact->save();
    return redirect('/contact')->with('message','L\'message bien envoyer !');   
 });
