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

use App\Goods_delivered;
use App\Goods_return;
use App\Salesmen;
use App\User;
use App\Page;
use App\Stock;

Route::get('/', function () {
    return view('welcome');
});


//
Route::get('/test', function () {
    $stocks = Stock::find(1);
    //foreach ($stocks as $stock){
//    echo $stock->sales_order->quantity;
  //  foreach($stocks->sales_order as $sale){

    // $stocks->sales_order()->attach(2, ['quantity' => '400','discount' => '10']); //this works!!
    foreach($stocks->sales_order as $sale){
        echo " ";
        echo $sale->pivot->quantity;
        echo " ";
        echo $sale->total;
   }

//
//    }


});



Auth::routes();
Route::get('/home', 'HomeController@index');
Route::resource('/users','userController');
Route::resource('/pages','PageController');
Route::resource('/access','PageAccessController');
Route::resource('/salesmen','SalesmenController');
Route::resource('/party','PartyController');
Route::resource('/stock','StockController');
Route::resource('/order','SalesController');
Route::resource('/return','ReturnController');
Route::resource('/payment','payController');

Route::get('/order/report/{id}', function ($id) {
$order = \App\Sales_order::find($id);

    return view('reports.order',compact('order'));
})->name('order');




//
//Route::get('/try', function () {
//    $order = Goods_return::find(2);
//
//$a =$order->stock;
//    foreach ($a as $aa){
//        return $aa->pivot;
//   }
//
//
//});