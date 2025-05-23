<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{asset('style.css')}}">
<script defer src="{{asset('script.js')}}"></script>
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
                <a href=""><img id="login" src="{{asset('img/profile-user-account-svgrepo-com.svg')}}" alt="Imagem para login"></a>
            </div>
        </div>
    </div>
    <div class="opcao-btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">
        <button>Faça Login para acessar sua conta</button>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>

                <form action="POST" action="{{route('cadastrarUsuario')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Sua senha" required>
                        </div>
                        <div class="mb-3">
                            <label for="passwordConfirmed" class="form-label">Confirme sua senha:</label>
                            <input type="password" class="form-control" id="passwordConfirmed" name="passwordConfirmed" placeholder="Confirme sua senha" required>
                        </div>
                    </div>
                    <div class="possui-cadastro" data-bs-toggle="modal" data-bs-target="#possuiCadastroModal">
                        <p>Já possui cadastro?</p>
                        <button>Clique aqui</button>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="possuiCadastroModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Cadastre-se</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="POST" action="{{route('home')}}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Sua senha" required>
                        </div>
                    </div>
                    <div class="possui-cadastro" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <p>Não é cadastrado ainda?</p>
                        <button>Clique aqui</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</header>
