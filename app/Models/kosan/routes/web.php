<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kos',[KosController::class, 'index']);