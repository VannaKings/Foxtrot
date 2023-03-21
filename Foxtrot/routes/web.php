<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;

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


Route::get('/', [ProdutoController::class, 'home'])->name('home.index');
Route::get('/cadastro', [UserController::class, 'create']);
Route::post('/', [UserController::class, 'store']);


Route::get('/produto/{produto}', [ProdutoController::class, 'show']);

Route::get('/produtos', [ProdutoController::class, 'produtos']);

Route::get('/cadastro', [UserController::class, 'index']);
