<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foxtrot</title>

    <!-- CSS e Bootstrap -->
    <link rel="stylesheet" href="/CSS/home.css">
    <link rel="stylesheet" href="/CSS/section.css">
    <link rel="stylesheet" href="/CSS/perfil.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <!--Icones font awesome-->
    <script src="https://kit.fontawesome.com/0169495cc4.js" crossorigin="anonymous"></script>
</head>
<body>
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
                <li><a class="dropdown-item" href="/">Inicio</a></li>
                <li><a class="dropdown-item" href="/produtos">Bonecas</a></li>
                <li><a class="dropdown-item" href="/produtos">Carrinhos</a></li>
                <li><a class="dropdown-item" href="/produtos">Colecionaveis</a></li>
                <li><a class="dropdown-item" href="/produtos">Lego</a></li>
                <li><a class="dropdown-item" href="/produtos">Esportes</a></li>
                <li><a class="dropdown-item" href="/produtos">Bebês</a></li>
                </ul>
            </div>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-primary botao" type="submit" id="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown botao" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-user"></i>Olá, fulano
                </button>

                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/">Perfil</a></li>
                <li><a class="dropdown-item" href="/produtos">Pedidos</a></li>
                <li><a class="dropdown-item" href="/produtos">Carrinho</a></li>
                </ul>
            </div>

            <!-- <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown botao" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-user"></i>Olá! entre ou cadastre-se
                </button>
                <div class="dropdown-menu">
                <form class=" px-3 py-3">
                    <div class="mb-3">
                    <label for="exampleDropdownFormEmail2" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                    <label for="exampleDropdownFormPassword2" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                    </div>
                    <div class="mb-3">

                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/cadastro">Novo por aqui? Cadastre-se</a>
                </div>
            </div> -->

            <div class="carrinho">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>

            </div>
        </nav>
    </div>

    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark"> -->
        <!-- Logo -->
        <!-- <a class="navbar-brand" href="#">Minha Loja</a> -->
        <!-- Links -->
        <!-- <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Perfil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Histórico de Pedidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Endereço</a>
        </li>
        </ul>
    </nav> -->
    <div class="espaco"></div>
    <div class="container">
        <!-- <h2>Perfil do Usuário</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Informações Pessoais</h3>
                <p>Nome: João Silva</p>
                <p>E-mail: joaosilva@gmail.com</p>
                <p>Telefone: (11) 99999-9999</p>
            </div>
            <div class="col-md-6">
                <h3>Endereço</h3>
                <p>Rua A, 123</p>
                <p>Bairro: Centro</p>
                <p>Cidade: São Paulo</p>
                <p>CEP: 01234-567</p>
            </div>
        </div>
        <hr> -->
        <div class="row">
            <div class="col-md-4">
                <h3>Informações Pessoais</h3>
                <p><strong>Nome:</strong> João Silva</p>
                <p><strong>E-mail:</strong> joaosilva@gmail.com</p>
                <p><strong>Telefone:</strong> (11) 99999-9999</p>
                <p><strong>CPF:</strong> 123.456.789-00</p>
                <p><strong>Data de Nascimento:</strong> 01/01/1980</p>
            </div>
            <div class="col-md-4">
                <h3>Endereço de Entrega</h3>
                <p><strong>Rua:</strong> A, 123</p>
                <p><strong>Bairro:</strong> Centro</p>
                <p><strong>Cidade:</strong> São Paulo</p>
                <p><strong>CEP:</strong> 01234-567</p>
                <p><strong>País:</strong> Brasil</p>
            </div>
            <div class="col-md-4">
                <h3>Endereço de Cobrança</h3>
                <p><strong>Rua:</strong> B, 456</p>
                <p><strong>Bairro:</strong> Centro</p>
                <p><strong>Cidade:</strong> São Paulo</p>
                <p><strong>CEP:</strong> 01234-567</p>
                <p><strong>País:</strong> Brasil</p>
            </div>
        </div>

        <h3>Histórico de Pedidos</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID do Pedido</th>
                    <th>Data</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>01/01/2023</td>
                    <td>R$ 100,00</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>02/01/2023</td>
                    <td>R$ 200,00</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>03/01/2023</td>
                    <td>R$ 300,00</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

