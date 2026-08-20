<?php

use Illuminate\Support\Facades\Route;

// ─── Controllers Públicos ───────────────────────────────────────────
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\EstruturaController;
use App\Http\Controllers\DepoimentosController;
use App\Http\Controllers\ContatoController;

// ─── Controllers Admin ──────────────────────────────────────────────
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepoimentosController as AdminDepoimentosController;
use App\Http\Controllers\Admin\ConfiguracoesController;

// ═══════════════════════════════════════════════════════
// SITE PÚBLICO
// ═══════════════════════════════════════════════════════

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/servicos', [ServicosController::class, 'index'])->name('servicos');
Route::get('/estrutura', [EstruturaController::class, 'index'])->name('estrutura');
Route::get('/depoimentos', [DepoimentosController::class, 'index'])->name('depoimentos');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

// ═══════════════════════════════════════════════════════
// ADMIN — Login/Logout (público)
// ═══════════════════════════════════════════════════════

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// ═══════════════════════════════════════════════════════
// ADMIN — Painel (protegido)
// ═══════════════════════════════════════════════════════

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Depoimentos CRUD
    Route::get('/depoimentos', [AdminDepoimentosController::class, 'index'])->name('depoimentos.index');
    Route::get('/depoimentos/criar', [AdminDepoimentosController::class, 'create'])->name('depoimentos.create');
    Route::post('/depoimentos', [AdminDepoimentosController::class, 'store'])->name('depoimentos.store');
    Route::get('/depoimentos/{depoimento}/editar', [AdminDepoimentosController::class, 'edit'])->name('depoimentos.edit');
    Route::put('/depoimentos/{depoimento}', [AdminDepoimentosController::class, 'update'])->name('depoimentos.update');
    Route::delete('/depoimentos/{depoimento}', [AdminDepoimentosController::class, 'destroy'])->name('depoimentos.destroy');
    Route::patch('/depoimentos/{depoimento}/toggle', [AdminDepoimentosController::class, 'toggleAtivo'])->name('depoimentos.toggle');

    // Configurações
    Route::get('/configuracoes', [ConfiguracoesController::class, 'index'])->name('configuracoes.index');
    Route::put('/configuracoes', [ConfiguracoesController::class, 'update'])->name('configuracoes.update');
});
