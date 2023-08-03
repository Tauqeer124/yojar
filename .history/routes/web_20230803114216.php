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

    Route::get('/customer_add',[CustomerController::class,'create']);
    Route::post('/customer_add',[CustomerController::class,'store'])->name('customer.add');
    Route::get('/customer_edit/{id}',[CustomerController::class,'edit
    Route::post('/customer_update/{id}',[CustomerController::class,'store'])->name('customer.add');

});

