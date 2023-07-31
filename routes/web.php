<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\client\HomeController;
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

Route::get('/', function () {
    return view('client.home');
});

Route::get('/panel', function () {
    return view('admin.home');
});

Route::get('/panel/category', function () {
    return view('category.index');
});


    Route::resource('category',CategoryController::class);

    Route::get('/',[HomeController::class,'index']);




