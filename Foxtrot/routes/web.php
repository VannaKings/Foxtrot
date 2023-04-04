<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/', [ProdutoController::class, 'home'])->name('home.index');
Route::get('/cadastro', [UserController::class, 'create']);
Route::post('/', [UserController::class, 'store'])->name('registrar');


Route::get('/produto/{produto}', [ProdutoController::class, 'show']);

Route::get('/produtos', [ProdutoController::class, 'produtos']);

Route::get('/cadastro', [UserController::class, 'index']);

Route::get('/perfil', [UserController::class, 'perfil']);
