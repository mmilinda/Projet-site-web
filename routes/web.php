<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandlordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|*/
Route::get('/Guest_Detail', function () {
    return view('/Guest_Detail');
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


// Route::get('/blog', function () {
//     return view('blog');
// }); 

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
Route::get('/property', function () {
    return view('property');

});

Route::get('/proper', function () {
    return view('/proper');
});

Route::get('/formulaire_ajout_articke', function () {
    return view('/formulaire_ajout_articke');
});

// envoi du formulaire
Route::post('/ajouter_article',[App\Http\Controllers\TAPHACONTROLLER::class,'ajouter_article_controller'])->name('form_ajout_article.file');


//  affichage de la page des articles
 Route::get('/afficheArticle',[App\Http\Controllers\TAPHACONTROLLER::class,'affiche_article_control']);

// Edition d'article
Route::get('/edition_article_blog/{id}', [App\Http\Controllers\TAPHACONTROLLER::class, 'edition_article_blog_show']);
Route::post('/edition_article_blogA/{id}', [App\Http\Controllers\TAPHACONTROLLER::class, 'edition_article_update']);

// Supprimer un article
Route::delete('/article-supprimer/{id}', [App\Http\Controllers\TAPHACONTROLLER::class, 'suppression_article']);
