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
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/cadastro/index.html">Novo por aqui? Cadastre-se</a>
                </div>
            </div>

            <div class="carrinho">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>

            </div>
        </nav>
    </div>

    <div class="espaco"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <h3>Olá, Fulano</h3>
                <!-- Nav seções -->
                <ul class="nav-vertical">
                    <li><i class="fa-solid fa-user" style="color:#1195d3;"></i><a class="filtro" href= "">Dados pessoais</a></li>
                    <li><i class="fa-solid fa-gift"></i><a class="filtro" href= "">Pedidos</a></li>
                    <li><i class="fa-solid fa-location-dot"></i><a class="filtro" href= "">Endereços</a><li>
                </ul>
                <!-- <div class="mt-4">
                    <h4 class="mb-4">Endereços Cadastrados</h4>
                    <ul class="list-group">
                    <li class="list-group-item">Rua A, Número B, Bairro C</li>
                    <li class="list-group-item">Rua D, Número E, Bairro F</li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-3">Cadastrar Novo Endereço</a>
                </div> -->
            </div>
            <div class="col-md-8">
                <h4 class="mb-4">Histórico de Pedidos</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID do Pedido</th>
                        <th>Data do Pedido</th>
                        <th>Status do Pedido</th>
                        <th>Valor Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>001</td>
                        <td>01/01/2022</td>
                        <td>Pago</td>
                        <td>R$ 100,00</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>02/02/2022</td>
                        <td>Enviado</td>
                        <td>R$ 50,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

