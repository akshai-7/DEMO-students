<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Registercontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Auth\Logincontroller;
use App\Http\Middleware;

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

Route::view('register','auth.register');
Route::post('/',[Registercontroller::class,'store']);


Route::view('/','auth.login');
Route::post('/home',[Logincontroller::class,'insert']);



Route::get('/home',[Usercontroller::class,'create']);
Route::post('/store',[Usercontroller::class,'store'])->middleware('student');
Route::get('/list',[Usercontroller::class,'list']);
Route::get('edit/{id}',[Usercontroller::class,'edit']);
Route::post('update/{id}',[Usercontroller::class,'update'])->middleware('student');
Route::get('delete/{id}',[Usercontroller::class,'delete']);
