<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KosController;
use Illuminate\Support\Facades\Route;
use App\Models\Kos;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $dataKos = Kos::all();

    return view('welcome', compact('dataKos'));
});

Route::get('/dashboard', function () {

    $dataKos = Kos::all();

    return view('dashboard', compact('dataKos'));

})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| ROUTE KOS (CRUD)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Kos
    Route::get('/kos', [KosController::class, 'index'])->name('kos.index');
    Route::get('/kos/create', [KosController::class, 'create'])->name('kos.create');
    Route::post('/kos', [KosController::class, 'store'])->name('kos.store');
    Route::get('/kos/{id}',[KosController::class,'show'])->name('kos.show');
    Route::get('/kos/{id}/edit', [KosController::class, 'edit'])->name('kos.edit');
    Route::put('/kos/{id}', [KosController::class, 'update'])->name('kos.update');
    Route::delete('/kos/{id}', [KosController::class, 'destroy'])->name('kos.destroy');

});

require __DIR__.'/auth.php';