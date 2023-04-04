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
                    <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                    <li><a class="dropdown-item" href="/pedidos">Pedidos</a></li>
                    <li><a class="dropdown-item" href="/carrinho">Carrinho</a></li>
                    <hr>
                    <li style="margin-top:-5px"><a class="dropdown-item" href=""><i class="fa-solid fa-arrow-right-from-bracket" style="margin-right:10px;"></i>Sair</a></li>
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

    <div class="container">

        <div class="container my-5">
            <div class="area-titulo titulo">
                <h1 class="mb-3 titulo">Perfil</h1>
            </div>

            <div class="area-perfil">
                <div class="row" style="display:flex;justify-content:center">

                    <div class="col-md-4 div-image">
                        <img src="/images/img-perfil.png" alt="">
                    </div>

                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Nome Completo:</strong> John Doe</li>
                            <li class="list-group-item"><strong>E-mail:</strong> john.doe@example.com</li>
                            <li class="list-group-item"><strong>CPF:</strong> xxx.xxx.xxx-xx</li>
                            <li class="list-group-item"><strong>Telefone:</strong> (xx) xxxx-xxxx</li>
                        </ul>
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#editarInfoModal">Editar Informações</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal para editar informações -->
        <div class="modal fade" id="editarInfoModal" tabindex="-1" aria-labelledby="editarInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarInfoModalLabel">Editar Informações Pessoais</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Seu nome completo">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="Seu melhor e-mail">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="tel" class="form-control" id="telefone" placeholder="(xx) xxxx-xxxx">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Salvar Mudanças</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="area-titulo-endereco">
                <h3 class="mb-3 titulo">Meus Endereços</h3>
            </div>

            <div class="area-endereco">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item col">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Endereço Principal</h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enderecoModal"><i class="fa-solid fa-pen-to-square"></i></button>
                            </div>
                            <div class="mt-2">
                                <p><strong>Nome:</strong> John Doe</p>
                                <p><strong>CEP:</strong> 12345-678</p>
                                <p><strong>Rua:</strong> Rua da Exemplo, 123</p>
                                <p><strong>Cidade:</strong> São Paulo</p>
                                <p><strong>Estado:</strong> SP</p>
                            </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item col">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Outro Endereço</h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enderecoModal"><i class="fa-solid fa-pen-to-square"></i></button>
                            </div>
                            <div class="mt-2">
                                <p><strong>Nome:</strong> John Doe</p>
                                <p><strong>CEP:</strong> 12345-678</p>
                                <p><strong>Rua:</strong> Rua da Exemplo, 123</p>
                                <p><strong>Cidade:</strong> São Paulo</p>
                                <p><strong>Estado:</strong> SP</p>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#enderecoModal"><i class="fa-solid fa-plus"></i> Novo Endereço</button>
            </div>
        </div>

        <!-- Modal para editar/adicionar endereço -->
        <div class="modal fade" id="enderecoModal" tabindex="-1" aria-labelledby="enderecoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="enderecoModalLabel">Adicionar/Editar Endereço</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" placeholder="Seu CEP">
                            </div>
                            <div class="mb-3">
                                <label for="rua" class="form-label">Rua:</label>
                                <input type="text" class="form-control" id="rua" placeholder="Sua rua">
                            </div>
                            <div class="mb-3">
                                <label for="numero" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="numero" placeholder="Seu número">
                            </div>
                            <div class="mb-3">
                                <label for="complemento" class="form-label">Complemento:</label>
                                <input type="text" class="form-control" id="complemento" placeholder="Seu complemento (opcional)">
                            </div>
                            <div class="mb-3">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" placeholder="Seu bairro">
                            </div>
                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="cidade" placeholder="Sua cidade">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Salvar Mudanças</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container my-5">
                <div class="col-md-6">
                    <h2>Endereços</h2>
                    <ul class="list-group mb-3">
                    <li class="list-group-item">
                        <p><strong>Endereço de Cobrança:</strong></p>
                        <p>Nome da Rua, 123</p>
                        <p>Bairro, Cidade - UF</p>
                        <p>CEP: 12345-678</p>
                        <button type="button" class="btn btn-link">Editar</button>
                    </li>
                    <li class="list-group-item">
                        <p><strong>Endereço de Entrega:</strong></p>
                        <p>Nome da Rua, 123</p>
                        <p>Bairro, Cidade - UF</p>
                        <p>CEP: 12345-678</p>
                        <button type="button" class="btn btn-link">Editar</button>
                    </li>
                    </ul>
                    <button type="button" class="btn btn-primary">Adicionar Novo Endereço</button>
                </div>
            </div>
        </div> -->

</body>
</html>

