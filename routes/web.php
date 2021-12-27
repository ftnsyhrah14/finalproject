<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\userControl;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get("/",[homeControl::class,"index"]);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);


Route::get("/users",[adminControl::class,"user"]);
Route::get("/deleteuser/{id}",[adminControl::class,"deleteuser"]);
Route::get("/projects",[adminControl::class,"showAllproject"]);
Route::get('/new',[adminControl::class,"shownewForm"]);
Route::POST("/add",[adminControl::class,"addproject"]);
Route::get('viewproject/{projectId}',[adminControl::class,"showDetail"]);
Route::get('delproject/{projectId}',[adminControl::class,"deleteproject"]);
Route::get("/edit/{projectId}",[adminControl::class,"update"]);



Route::get("/ownproject",[userControl::class,"showForm"]);
Route::get('updownproject/{projectId}',[userControl::class,"showData"]);
Route::POST("/edit",[userControl::class,"update"]);
Route::get('viewdetails/{projectId}',[userControl::class,"showDetail"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
