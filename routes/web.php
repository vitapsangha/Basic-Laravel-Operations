<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Regis;

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


// Route::get('file',[Regis::class,'file']);

// Route::post('insert',[Regis::class,'filing']);

Route::get('display',[Regis::class,'display']);

Route::any('give',[Regis::class,'insert']);


// Route::get('display', function () {
//     return view('regisnew');
// });

// Route::view('display','regisnew');
// Route::resource('users', Regis::class);

Route::get('list',[Regis::class,'list']);
Route::get('delete/{id}',[Regis::class,'delete']);
Route::get('edit/{id}',[Regis::class,'update']);


