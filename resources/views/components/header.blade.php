<link rel="stylesheet" href="{{asset('style.css')}}">
<header>
    <div class="container-header">
        <div class="links-conteudo-header">
            <li><a href="{{route('home')}}">Início</a></li>
            <li><a href="">Filmes</a></li>
            <li><a href="">Séries</a></li>
        </div>
        <div class="segunda-parte-header">
            <div class="container-pesquisa">
                <form action="{{route('pesquisar')}}" method="GET" class="form-pesquisa">
                    <input type="text" name="pesquisar" placeholder="Pesquisar">
                    <button type="submit" style="background: none; border: none; padding: 0;">
                        <img class="img-pesquisa" src="{{asset('img/search-alt-1-svgrepo-com.svg')}}" alt="Imagem de uma lupa para pesquisa">
                    </button>
                </form>
            </div>
            <div class="container-login">
                <a href=""><img src="{{asset('img/profile-user-account-svgrepo-com.svg')}}" alt="Imagem para login"></a>
            </div>
        </div>
    </div>
</header>
