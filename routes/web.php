<?php

use App\Models\Post;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KaryawanController;
use App\Models\Category;
//use App\Http\Controllers\CobaController;
//use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PostPlantController;
use App\Http\Controllers\RegisterController;
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

Route::get('/',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::POST('/login',[LoginController::class, 'authentication']);
Route::POST('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::POST('/register',[RegisterController::class, 'storee']);

Route::get('/main',[MainController::class, 'index'])->middleware('auth');
Route::resource('/main/category', CategoryController::class)->middleware('admin');
Route::resource('/main/post', PostController::class)->middleware('admin');
Route::resource('/main/user', UserController::class)->middleware('admin');

Route::get('/plant',[PostPlantController::class, 'index'])->middleware('auth');
Route::get('/personal',[PersonalController::class, 'index'])->middleware('auth');


//Route::resource('main/karyawan', KaryawanController::class)->middleware('admin');
// Route::resource('/main/karyawan', KaryawanController::class)->middleware('admin');
 //Route::get('/main/karyawann/{post:id}', [KaryawanController::class,'show']);


//Route::get('/dashboard',[MainController::class, 'index'])->middleware('auth');

// Route::get('/about',[PostController::class, 'index']);
// Route::get('/detail/{post:slug}', [PostController::class,'show']);
// Route::get('/main/karyawan/{post:id}', function(Post $post){
//     return $post;
// });

// Route::get('/categories',function(){

//     return view('categories', [
//         'title' => 'Post Categories',
//         'category' => Category::all()
//     ]);
// });




