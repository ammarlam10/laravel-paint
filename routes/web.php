<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Salesmen;
use App\User;
use App\Page;

Route::get('/', function () {
    return view('welcome');
});


//
Route::get('/users/as', function () {
//    $parties = Salesmen::find(1)->party;
//echo $parties;

})->middleware('isAdmin');



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/users','userController');
Route::resource('/pages','PageController');
Route::resource('/access','PageAccessController');
Route::resource('/salesmen','SalesmenController');
Route::resource('/party','PartyController');

//Route::get('/try/{id}', function () {
//    $users = User::find(2);
//
//    foreach ($users->pages as $page){
//    echo $page->name;
//    }
//
//
//});