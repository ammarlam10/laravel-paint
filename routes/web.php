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
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;


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
$orders = \App\Sales_order::findOrFail($id);
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('reports.order',compact('orders'));
    return $pdf->stream();
})->name('order');


//Route::get('/order/reports/', function () {
//    return 'asdad';
////    $orders = \App\Sales_order::all();
////    $pdf = App::make('dompdf.wrapper');
////    $pdf->loadView('reports.order_gp',compact('orders'));
////    return $pdf->stream();
//})->name('order_gp');


Route::get('/return/report/{id}', function ($id) {
    $orders = \App\Goods_return::findOrFail($id);
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('reports.return',compact('orders'));
    return $pdf->stream();
})->name('return');



Route::get('/party/report/{id}', function ($id) {
    $party = \App\Party::findOrFail($id);
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('reports.sales_ledger',compact('party'));
    return $pdf->stream();
})->name('sales_ledger');

Route::get('/salesmen/report/{id}', function ($id) {
//    return 'asd';
    $sm = Salesmen::all();
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('reports.route',compact('sm'));
    return $pdf->stream();
})->name('route');


