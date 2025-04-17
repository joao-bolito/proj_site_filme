<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\listarConteudoController;
use App\Http\Controllers\pesquisarFilmesController;

Route::get('', [homeController::class, 'listarFilmesPopulares']);
Route::get('listarFilmes', [listarConteudoController::class, 'listarFilmes']);
Route::get('pesquisar', [pesquisarFilmesController::class, 'pesquisarConteudo'])->name('pesquisar');
