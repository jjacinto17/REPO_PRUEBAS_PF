<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/create', [UsuarioController::class, 'create']);
Route::post('/usuarios/store', [UsuarioController::class, 'store']);
Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'edit']);
Route::put('/usuarios/update/{id}', [UsuarioController::class, 'update']);
Route::delete('/usuarios/delete/{id}', [UsuarioController::class, 'delete']);


Route::get('/', function () {
    return view('welcome');
});
