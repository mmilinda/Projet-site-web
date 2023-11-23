<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/Signin', function () {
    return view('SignIn');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

 
Route::controller(BlogController::class)->group(function () {
    Route::get('/add-blog', 'create');
    Route::post('/add-blog', 'store');
    Route::get('/blog', 'index');
    Route::get('/edit-blog/{blog_id}', 'edit');
    Route::put('/update-blog/{blog_id}', 'update');
    Route::delete('/delete-blog/{blog_id}', 'destroy');
});