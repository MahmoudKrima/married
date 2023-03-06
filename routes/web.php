<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\Aboutcontroller;
use App\Http\Controllers\Front\Blogcontroller;
use App\Http\Controllers\Front\Contactcontroller;
use App\Http\Controllers\myaccount\personalinfo\personalinfoController;
use App\Http\Controllers\myaccount\specification\specificationController;
use App\Http\Controllers\SearchController;
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


Route::group(['middleware'=> 'auth'], function(){
    Route::get('/dashboard2', [DashboardController::class,'index'])->name('dashboard2');
    Route::resource('/personalinfo', personalinfoController::class);
    Route::resource('/specification', specificationController::class);
    Route::get('/search', [SearchController::class,'index'])->name('search.index');
    Route::post('/search/details/{id}', [SearchController::class,'filter'])->name('search.filter');


});

// Route for Front Side

Route::resource('/', HomeController::class);
Route::resource('/about', Aboutcontroller::class);
Route::resource('/blog', Blogcontroller::class);
Route::resource('/contact', Contactcontroller::class);

// Route for dashboard

require __DIR__.'/auth.php';

