<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosController;
use App\Models\Kos; // Tambahkan ini

Route::get('/', function () {

    $dataKos = Kos::all();

    return view('welcome', compact('dataKos'));
});

Route::get('/kos',[KosController::class, 'index']);

Route::get('/kos/create', [KosController::class, 'create']);
Route::post('/kos', [KosController::class, 'store']);