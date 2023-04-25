<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\EnderecoController;

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
Route::get('/cadastro', [UserController::class, 'create'])->name('cadastro');
Route::post('/', [UserController::class, 'store'])->name('registrar');


Route::get('/produto/{produto}', [ProdutoController::class, 'show']);

Route::get('/produtos', [ProdutoController::class, 'produtos'])->name('produtos');

Route::get('/cadastro', [UserController::class, 'index']);

Route::get('/perfil', [EnderecoController::class, 'index'])->name('perfil');
Route::post('/perfil/adicionar', [EnderecoController::class, 'store'])->name('endereco.store');
Route::post('/perfil/deletar/{endereco}', [EnderecoController::class, 'delete'])->name('endereco.delete');

Route::get('/pedidos', [UserController::class, 'pedidos']);

Route::get('/endereco', [UserController::class, 'endereco']);

Route::post('/carrinho/{produto}', [CarrinhoController::class, 'store'])->name('carrinho.store');
Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');

Route::post('/carrinho/alterar/{produto}', [CarrinhoController::class, 'alterar'])->name('carrinho.alterar');

