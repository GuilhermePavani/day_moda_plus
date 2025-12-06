<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Clientes
Route::get('/clientes/novo', [ClienteController::class, 'create'])->name('clientes.create');
Route::resource('clientes', ClienteController::class);

// Produtos
Route::resource('produtos', ProdutoController::class);

// Estoque
Route::resource('estoque', EstoqueController::class);

// Financeiro (ganhos e gastos)
Route::resource('financeiro', FinanceiroController::class);

// Contas MEI
Route::resource('contas-mei', ContaMeiController::class);

// Lista de Compras
Route::resource('lista-compras', ListaCompraController::class);

// Página pública de produtos
Route::get('/loja', [LojaController::class, 'index'])->name('loja.index');
