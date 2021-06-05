<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('/about');
});

Route::get('/contact', function () {
    return view('/contact');
});
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [HomeController::class, 'show']);
Route::get('admin', [AdminController::class, 'index']);


//posts Route
/* Route::get('posts', [PostsController::class, 'index']);
Route::get('posts/create', [PostsController::class, 'create']);
Route::get('posts/{post}', [PostsController::class, 'show']);
Route::post('posts/', [PostsController::class, 'store']);
Route::get('posts/{post}/edit', [PostsController::class, 'edit']);
Route::patch('posts/{post}', [PostsController::class, 'update']);
Route::delete('posts/{post}', [PostsController::class, 'destroy']); */

Route::resource('posts',PostsController::class);
//Route::resource('users',UserController::class);

