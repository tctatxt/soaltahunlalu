<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;

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

Route::get('/{id}', [BookController::class, 'index']);
// Route::get('/{id}', [BookController::class, 'show']);

Route::get('/{id}/category/{idCat}', [CategoryController::class, 'show']);

Route::get('/{id}/detail/{idCat}', [BookController::class, 'show']);

Route::get('/{id}/contact', function($id){
    return view('contact',[
        'user' => User::find($id)
    ]);
});

Route::post('/{id}/buyBooks', [TransactionController::class,'store']);

Route::get('/{id}/transaction', [TransactionController::class,'show']);
