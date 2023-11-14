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
|
*/

Route::get('/homepage', function () {
    return view('homepage');
});
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

Route::get('/property', function () {
    return view('property');
});  
Route::get('/blog', function () {
    return view('blog');
}); 
