<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|test
*/

Route::get('/', [BookController::class, 'index']);

Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/detail/{id}', [BookController::class, 'show']);
Route::get('/contact', function(){
    return view('contact');
});
