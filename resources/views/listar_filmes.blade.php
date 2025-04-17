<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Filmes</title>
</head>
<body>
    <h1>Filmes:</h1>
    @foreach ($filmes as $filme)
        <a href=""><img src="https://image.tmdb.org/t/p/w500{{ $filme['poster_path'] }}" alt="{{ $filme['title'] }}"></a>
    @endforeach
</body>
</html>
