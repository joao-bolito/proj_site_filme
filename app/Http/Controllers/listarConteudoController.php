<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class listarConteudoController extends Controller
{
    public function listarFilmes(){
        $response = Http::get(config('services.tmdb.base_url') . 'movie/popular', [
            'api_key' => config('services.tmdb.key'),
            'language' => 'pt-BR',
            'page' => 1
        ]);

        $filmes = $response->json()['results'];

        return view('listar_filmes', compact('filmes'));
    }
}
