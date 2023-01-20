<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PassportController;


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

// https://www.javatpoint.com/laravel-relationship

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 1. One To Many Relationship

// Category .... (One to Many Relationship)

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('categories', [CategoryController::class, 'index'])->name('category.index');

// More Examples ...

// 2. One To One Relationship 

// User to Passport...

Route::get('/passport/create', [PassportController::class, 'create'])->name('passport.create');
Route::post('/passport/store', [PassportController::class, 'store'])->name('passport.store');
Route::get('/passport/show', [PassportController::class, 'show'])->name('passport.show');

// One to Many Relationship..

// (For Many to Many Relationship we have to use belongsToMany() in both models instead of hasOne() or hasMany())