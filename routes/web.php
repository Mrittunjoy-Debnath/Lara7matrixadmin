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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' =>'auth'],function(){

});

//admin
Route::group(['as'=>'admin.','prefix'=>'admin','middleware' =>'is_admin'],function(){
    Route::get('/home', 'HomeController@adminIndex')->name('home');
});
