<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/home');
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/contact', function () {
    return view('/contact');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('admin', [App\Http\Controllers\AdminController::class, 'index']);

//Route::resource('posts',PostController::class);
//Route::resource('users',UserController::class);

