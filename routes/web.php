<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\listarConteudoController;
use App\Http\Controllers\pesquisarFilmesController;
use App\Http\Controllers\loginController;

Route::get('', [homeController::class, 'listarFilmesPopulares'])->name('home');
Route::get('listarFilmes', [listarConteudoController::class, 'listarFilmes']);
Route::get('pesquisar', [pesquisarFilmesController::class, 'pesquisarConteudo'])->name('pesquisar');
Route::post('cadastrar', [loginController::class, 'cadastrarUsuario'])->name('cadastrarUsuario');
