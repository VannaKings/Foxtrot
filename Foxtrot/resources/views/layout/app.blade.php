<header>

    <div id="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="/" style="max-width: 55px;"><img src="/images/logo-abreviada.png" alt="" style="max-width: 100px; max-height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="dropdown">
                <button class="btn btn-primary botao dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-bars"></i>Menu
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{url('/')}}">Inicio</a></li>
                    @foreach($categorias->take(6) as $categoria)
                    <li><a class="dropdown-item" href="/produtos/{{$categoria->CATEGORIA_ID}}">{{$categoria->getCategoriaNome()}}</a></li>
                    @endforeach
                    <!-- <li><a class="dropdown-item" href="{{url('produtos')}}">Carrinhos</a></li>
                    <li><a class="dropdown-item" href="{{url('produtos')}}">Colecionaveis</a></li>
                    <li><a class="dropdown-item" href="{{url('produtos')}}">Lego</a></li>
                    <li><a class="dropdown-item" href="{{url('produtos')}}">Esportes</a></li>
                    <li><a class="dropdown-item" href="{{url('produtos')}}">Bebês</a></li> -->
                </ul>
            </div>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-primary botao" type="submit" id="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            @if(!Auth::check())

            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown botao" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-user"></i>Olá! entre ou cadastre-se
                </button>
                <div class="dropdown-menu">
                <form class=" px-3 py-3" method = "POST" action = "{{ route('login') }}">
                @csrf
                    <div class="mb-3">
                        <label for="exampleDropdownFormEmail2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com" name = "email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleDropdownFormPassword2" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name = "password">
                    </div>
                    <div class="mb-3">

                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('cadastro')}}">Novo por aqui? Cadastre-se</a>
                </div>
            </div>
            @else
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown botao" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <i class="fa-solid fa-user"></i>Olá, {{Auth::user()->USUARIO_NOME}}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                    <li><a class="dropdown-item" href="/pedidos">Pedidos</a></li>
                    <li><a class="dropdown-item" href="/carrinho">Carrinho</a></li>
                    <hr>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li style="margin-top:-5px"><button type="submit" class="dropdown-item" ><i class="fa-solid fa-arrow-right-from-bracket" style="margin-right:10px;"></i>Sair</button></li>
                    </form>

                </ul>
            </div>
            @endif
            <div class="carrinho">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>

            </div>
        </nav>
    </div>
</header>
<main>
    @yield('main')
</main>
<footer class="container-footer">
    <div class="content-footer">
    <div class="about">
        <h5>Sobre a Foxtrot</h5>
        <p>Quem somos</p>
        <p>Trabalhe conosco</p>
        <p>Localização de lojas</p>
        <p>Vale-presente</p>
        <p></p>
    </div>
    <div class="contact">
        <h5>Atendimento ao cliente</h5>
        <p>Entre em contato</p>
        <p>Dúvidas frequentes</p>
        <p>Política de privacidade</p>
        <p>Política de entrega e devolução</p>
        <p>Política de vendas</p>
    </div>
    <div class="payment">
        <h5>Formas de pagamento</h5>
        <img src="../images/payment.png" alt="">
    </div>
    </div>

</footer>
<script>
    function mais(){
        var atual = document.getElementById("total").value;
        var novo = atual - (-1); //Evitando Concatenacoes
        document.getElementById("total").value = novo;
    }

    function menos(){
        var atual = document.getElementById("total").value;
        if(atual > 0) { //evita números negativos
            var novo = atual - 1;
            document.getElementById("total").value = novo;
        }
    }
</script>
