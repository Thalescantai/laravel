<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\PrincipalController:: class, 'principal'])->name('principal');
Route::get('/usuarios', [App\Http\Controllers\UsuariosController:: class, 'usuario']);
Route::post('/cad_user', [App\Http\Controllers\PrincipalController:: class, 'store']);

/*
Route::get('/contato', [App\Http\Controllers\ContatoController:: class, 'contato']);
Route::get('/quemsomos', [App\Http\Controllers\QuemSomos:: class, 'quemsomos']);
Route::get('/galeria', [App\Http\Controllers\Galeria:: class, 'galeria']);
Route::get('/produto', [App\Http\Controllers\Produto:: class, 'produto']);
Route::get('/carrinho', [App\Http\Controllers\Carrinho:: class, 'carrinho']);
*/