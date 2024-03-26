<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Route::get('/libro', [libroController::class, 'index'])->name('libro.index');
Route::get('/libro/create', [libroController::class, 'create'])->name('libro.create');
Route::post('/libro', [libroController::class, 'store'])->name('libro.store');
Route::get('/libro/{libro}', [libroController::class, 'show'])->name('libro.show');
Route::get('/libro/{libro}/edit', [libroController::class, 'edit'])->name('libro.edit');
Route::put('/libro/{libro}', [libroController::class, 'update'])->name('libro.update');
Route::delete('/libro/{libro}', [libroController::class, 'destroy'])->name('libro.destroy');