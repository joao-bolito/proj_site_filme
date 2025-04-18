<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('pesquisar.css')}}">
    <title>Buscar</title>
</head>
<body>
    <x-header></x-header>
    @if(isset($erro))
        <div class="alert alert-danger">
            {{ $erro }}
        </div>
    @endif

    <div class="resultado_filmes">
        <h1>Principais resultados:</h1>
        <div class="img_filmes">
            @foreach ($filmePesquisado as $filme)
                <img src="https://image.tmdb.org/t/p/original{{ $filme['poster_path'] }}" alt="{{ $filme['title'] }}">
            @endforeach
        </div>
    </div>

</body>
</html>
