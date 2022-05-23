<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\FrontendController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth','isAdmin'])->group(function(){
   Route::get('dashboard','App\Http\Controllers\Admin\FrontendController@index');
   Route::get('allproject','App\Http\Controllers\Admin\ProjectController@index');
   Route::get('add-project','App\Http\Controllers\Admin\ProjectController@add');
   Route::get('edit-project/{id}',[ProjectController::class,'edit']);
   Route::put('update-project/{id}',[ProjectController::class,'update']);
//    Route::get('add-category','App\Http\Controllers\ProjectController@add');
   Route::post('insert-project','App\Http\Controllers\Admin\ProjectController@insert');
   Route::get('delete-project/{id}',[ProjectController::class,'destroy']);

   Route::get('discus/{id}',[ProjectController::class,'massage']);
   //Message
   Route::get('comments',[CommentController::class,'store']);
   
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

