
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kos',[KosController::class, 'index']);
Route::get('/kos/create',[KosController::class,'create']);
Route::post('/kos',[KosController::class,'store']);
Route::get('/kos/{id}',[KosController::class,'show']);