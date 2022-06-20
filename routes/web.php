<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BookedController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EnterController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RevenuesController;
use App\Http\Controllers\ShowController;
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





Route::get('/',[ShowController::class,'home']);
Route::get('/articles',[ShowController::class,'articles']);
Route::get('/booked',[ShowController::class,'booked']);
Route::get('/condition',[ShowController::class,'condition']);
Route::view('/about','web.about');
Route::view('/services','web.services');




Route::group(['prefix' => 'admin',], function() {
   
    Route::view('/','admin.layout');

 
    Route::resource('enter', EnterController::class);
    Route::resource('employee',EmployeeController::class);
    Route::resource('expenses',ExpensesController::class);
    Route::resource('revenues',RevenuesController::class);
    Route::resource('lab',LabController::class);
    Route::resource('need',NeedController::class);
    Route::resource('payment',PaymentController::class);
    Route::resource('booked',BookedController::class);
    Route::resource('articles',ArticlesController::class);
    Route::resource('condition',ConditionController::class);
});