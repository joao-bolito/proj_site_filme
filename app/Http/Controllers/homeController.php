<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class homeController extends Controller
{
    public function listarFilmesPopulares(){
        $filmesPopulares = Http::get(config('services.tmdb.base_url') . 'movie/popular', [
            'api_key' => config('services.tmdb.key'),
            'language' => 'pt-BR',
            'page' => 1
        ]);

        $filmesEmCartaz = Http::get(config('services.tmdb.base_url') . 'movie/now_playing', [
            'api_key' => config('services.tmdb.key'),
            'language' => 'pt-BR',
            'page' => 1
        ]);

        $seriesPopulares = Http::get(config('services.tmdb.base_url') . 'tv/popular', [
            'api_key' => config('services.tmdb.key'),
            'language' => 'pt-BR',
            'page' => 1
        ]);

        $filmesPopulares = $filmesPopulares->json()['results'];
        $filmesEmCartaz = $filmesEmCartaz->json()['results'];
        $seriesPopulares = $seriesPopulares->json()['results'];

        return view('home', compact('filmesPopulares', 'filmesEmCartaz', 'seriesPopulares'));
    }
}
