<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class pesquisarFilmesController extends Controller
{
    public function pesquisarConteudo(Request $request){
        try{
            $filme = $request->input('pesquisar');

            if(empty($filme)){
                return view('pesquisar')->with('error', 'Digite o nome de um filme para pesquisar');
            }

            $filmePesquisado = Http::get(config('services.tmdb.base_url') . "search/movie", [
                'api_key' => config('services.tmdb.key'),
                'language' => 'pt-BR',
                'query' => $filme,
                'page' => 1
            ]);

            $filmePesquisado = $filmePesquisado->json()['results'];

            return view('pesquisar', compact('filmePesquisado'));

        }catch (Exception $e){
            return view('pesquisar')->with(['error' => 'Filme não encontrado', 'message' => $e->getMessage()], 500);
        }
    }
}
