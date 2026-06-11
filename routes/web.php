<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubliController;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () { return view('admin.index');})->name('admin.dashboard');
    
    Route::prefix('publicidades')->group(function () {
        Route::get('/', [PubliController::class, 'allPublis'])->name('admin.publicidades');
        Route::get('/{id}', [PubliController::class, 'findPubli'])->name('admin.publicidades.show');
        Route::post('/', [PubliController::class, 'createPubli'])->name('admin.publicidades.create');
    });

    Route::prefix('empresas')->group(function () {
        Route::get('/', [EmpresaController::class, 'allEmpresas'])->name('admin.empresas');
        Route::get('/{id}', [EmpresaController::class, 'findEmpresa'])->name('admin.empresas.show');
        Route::post('/', [EmpresaController::class, 'createEmpresa'])->name('admin.empresas.create');
        Route::put('/', [EmpresaController::class, 'updateEmpresa'])->name('admin.empresas.update');
        Route::delete('/', [EmpresaController::class, 'deleteEmpresa'])->name('admin.empresas.delete');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
