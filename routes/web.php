<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublishersController;
use App\Http\Controllers\WritersController;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware("auth")->group(function (){
    Route::get("/", function(){
        return view("admin.admin");
    });

    Route::resource("/kategoriler", CategoriesController::class);
    Route::resource("/yayimcilar", PublishersController::class);
    Route::resource("/yazarlar", WritersController::class);
});
