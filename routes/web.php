<?php
//CUSTOM CONTROLLERS
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EditorController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\Admin\TranslatorController;
use App\Http\Controllers\Admin\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->name("admin.")->prefix("admin/")->group(function(){
    Route::resource('books', BookController::class);
    Route::resource('authors', AuthorController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('editors', EditorController::class);
    Route::resource('loans', LoanController::class);
    Route::resource('translators', TranslatorController::class);
    Route::resource('users', UserController::class);
});


