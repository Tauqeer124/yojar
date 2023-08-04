<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    //customer routes
    Route::get('/customer_all',[CustomerController::class,'index'])->name('customer.index');
    Route::get('/customer_view/{id}',[CustomerController::class,'show'])->name('customer.view');
    Route::get('/customer_add',[CustomerController::class,'create']);
    Route::post('/customer_add',[CustomerController::class,'store'])->name('customer.add');
    Route::get('/customer_edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::put('/customer_update/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::delete('/customer_delete/{id}',[CustomerController::class,'destroy'])->name('customer.delete');
    //toggle status of customer
    Route::get('change_status/{id}', [UserController]@changeStatus');

    //graph
    Route::get('country_graph',[CustomerController::class,'showgraph'])->name('country_graph');
    Route::get('dailyregister_graph',[CustomerController::class,'dailyUserRegistrationGraph'])->name('dailyregister_graph');



});

