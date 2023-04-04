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
    <link rel="stylesheet" href="/CSS/pedidos.css">

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
                <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                <li><a class="dropdown-item" href="/pedidos">Pedidos</a></li>
                <li><a class="dropdown-item" href="/">Carrinho</a></li>
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

    <div class="espaco"></div>

    <section class="carrinho">
        <div class="container">

            <div class="col-12 area-titulo">
                <h2 class="text-center mb-4 titulo">Carrinho de Compras</h2>
            </div>

            <div style="display:flex; justify-content:space-between; padding: 30px; background-color:whitesmoke">
                <div class="row">

                    <div class="card" style="width: 18rem;">
                        <img src="/images/placeholder-9.png" alt="Nome do Produto" class="card-img-top" style="max-height:120px">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Produto</h5>
                            <p class="card-text">Preço: R$ 99,00</p>
                            <div class="card-text" style="display:flex; justify-content:center">
                                <button class="btn btn-primary"><i class="fa-solid fa-minus"></i></button>
                                    <input type="text" style="width: 40px">
                                <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                        <a href="#" class="btn btn-danger" style="margin-bottom: 10px">Remover</a>
                    </div>
                </div>

                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="margin-top:10px">Resumo do Pedido</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Subtotal: R$ 99,99</p>
                            <p class="card-text">Frete: R$ 10,00</p>
                            <h5>Total: R$ 109,99</h5>

                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary ">Finalizar Compra</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
</html>
