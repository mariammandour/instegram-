<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postscontroller;
use App\Http\Controllers\userscontroller;


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


Route::get('/index', function () {
    return view('index');
});

Route::resource('User',userscontroller::class);

Route::get('/editpassword/{id}',[userscontroller::class,'editpassword']);
Route::post('/updatepassword/{id}',[userscontroller::class,'updatepassword']);
Route::post('/dologin',[userscontroller::class,'dologin']);
Route::get('/logout',[userscontroller::class,'logout']);
Route::get('/addfriend/{id}',[userscontroller::class,'addfriend']);
Route::get('/index',[userscontroller::class,'notfollow']);
Route::resource('post',postscontroller::class);





// /Blog         (GET)            ==  Route::get('Blog',[blogController::class,'index']);
// /Blog/create  (GET)            ==  Route::get('Blog/create',[blogController::class,'create']);
// /Blog         (post)           ==  Route::post('Blog',[blogController::class,'store']);
// /Blog/{id}    (GET)            ==  Route::get('Blog/{id}',[blogController::class,'show']);
// /Blog/{id}/edit    (GET)       ==  Route::get('Blog/{id}/edit',[blogController::class,'edit']);
// /Blog/{id}    (put)            ==  Route::put('Blog/{id}',[blogController::class,'update']);
// /Blog/{id}    (delete)         ==  Route::delete('Blog/{id}',[blogController::class,'destory']);