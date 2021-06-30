<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');

});

*/

Route::get('/',[App\Http\Controllers\PagesController::class,'index']); //prosledjujemo celu putanju do kontrolera

Route::get('/about',[App\Http\Controllers\PagesController::class,'about']);

Route::get('/services',[App\Http\Controllers\PagesController::class,'services']);


/*
Route::get('/users/{id}', function ($id) { //prosledjujemo id od korisnika, dinamicka ruta
    return 'This is a user ' . $id;

});

*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\PostsController;
Route::resource('posts', PostsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
