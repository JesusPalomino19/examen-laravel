<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categoria/{categoria}', [CategoriaController::class, 'show'])->name('categoria.show');
Route::get('/categoria/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{categoria}', [CategoriaController::class, 'update'])->name('categoria.update');
Route::delete('/categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

Route::get('/usuario', [usuarioController::class, 'index'])->name('usuario.index');
Route::get('/usuario/create', [usuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario', [usuarioController::class, 'store'])->name('usuario.store');
Route::get('/usuario/{usuario}', [usuarioController::class, 'show'])->name('usuario.show');
Route::get('/usuario/{usuario}/edit', [usuarioController::class, 'edit'])->name('usuario.edit');
Route::put('/usuario/{usuario}', [usuarioController::class, 'update'])->name('usuario.update');
Route::delete('/usuario/{usuario}', [usuarioController::class, 'destroy'])->name('usuario.destroy');

Route::get('/autor', [autorController::class, 'index'])->name('autor.index');
Route::get('/autor/create', [autorController::class, 'create'])->name('autor.create');
Route::post('/autor', [autorController::class, 'store'])->name('autor.store');
Route::get('/autor/{autor}', [autorController::class, 'show'])->name('autor.show');
Route::get('/autor/{autor}/edit', [autorController::class, 'edit'])->name('autor.edit');
Route::put('/autor/{autor}', [autorController::class, 'update'])->name('autor.update');
Route::delete('/autor/{autor}', [autorController::class, 'destroy'])->name('autor.destroy');

Route::get('/libro', [libroController::class, 'index'])->name('libro.index');
Route::get('/libro/create', [libroController::class, 'create'])->name('libro.create');
Route::post('/libro', [libroController::class, 'store'])->name('libro.store');
Route::get('/libro/{libro}', [libroController::class, 'show'])->name('libro.show');
Route::get('/libro/{libro}/edit', [libroController::class, 'edit'])->name('libro.edit');
Route::put('/libro/{libro}', [libroController::class, 'update'])->name('libro.update');
Route::delete('/libro/{libro}', [libroController::class, 'destroy'])->name('libro.destroy');
