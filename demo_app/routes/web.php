<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\abc;
use App\Http\Controllers\resource;
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


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/data/{name}/{id?}', function ($wel,$id = null) {
//     return view('data')->with(['wel' => $wel,'id'=>$id]);
// });
// Route::get('/data', function () {
//     return view('data');
    
// });
Route::get("/", [abc::class,"home"]);
Route::get("/data", [abc::class,"login"]);
Route::post("/register", [abc::class,"register"]);
// Route::resource("/photo", resource::class);

