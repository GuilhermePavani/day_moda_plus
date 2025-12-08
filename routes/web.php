<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

// Vendas
Route::get('/vendas/create', [VendaController::class, 'create'])->name('vendas.create');
Route::post('/vendas/store', [VendaController::class, 'store'])->name('vendas.store');

// Clientes
Route::get('/clientes/novo', [ClienteController::class, 'create'])->name('clientes.create');
Route::resource('clientes', ClienteController::class);
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');

// Produtos
Route::resource('produtos', ProdutoController::class);

// Estoque
Route::resource('estoques', \App\Http\Controllers\EstoqueController::class);

// Financeiro (ganhos e gastos)
Route::resource('financeiro', FinanceiroController::class);

// Contas MEI
Route::resource('contas-mei', ContaMeiController::class);

// Lista de Compras
Route::resource('lista-compras', ListaCompraController::class);

// Página pública de produtos
Route::get('/site-produtos', [SiteController::class, 'blade'])->name('site.produtos');
