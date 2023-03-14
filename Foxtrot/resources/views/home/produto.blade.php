<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foxtrot</title>

    <!-- CSS e Bootstrap -->
    <link rel="stylesheet" href="/CSS/home.css">
    <link rel="stylesheet" href="/CSS/produto.css">
    <link rel="stylesheet" href="/CSS/detalhes.css">

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
            <a class="navbar-brand" href="#" style="max-width: 55px;"><img src="/images/logo-abreviada.png" alt="" style="max-width: 100px; max-height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="dropdown">
                <button class="btn btn-primary botao dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-bars"></i>Menu
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.blade.php">Inicio</a></li>
                <li><a class="dropdown-item" href="section.blade.php">Bonecas</a></li>
                <li><a class="dropdown-item" href="section.blade.php">Carrinhos</a></li>
                <li><a class="dropdown-item" href="section.blade.php">Colecionaveis</a></li>
                <li><a class="dropdown-item" href="section.blade.php">Lego</a></li>
                <li><a class="dropdown-item" href="section.blade.php">Esportes</a></li>
                <li><a class="dropdown-item" href="section.blade.php">Bebês</a></li>
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
                    <div class="mb-3">

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

    <section class= "secao-principal produtos secao-produtos">

        <div class="container-principal">


            <div class="detalhes-produto">

                <div class="container-detalhes">
                    <!-- Imagens -->
                    <ul class="img-list">
                        <li><img class='imgs' src="/images/placeholder-9.png" alt='Imagem do produto'></li>
                        <li><img class='imgs' src="/images/placeholder-9.png" alt='Imagem do produto'></li>
                        <li><img class='imgs' src="/images/placeholder-9.png" alt='Imagem do produto'></li>
                    </ul>
                    <img class='img-principal' src="/images/placeholder-9.png" alt='Imagem principal'>

                    <div class="informacoes">
                        <h2>{{$produto->PRODUTO_NOME}}</h2>

                        <p class='preco-destaque'>R$ {{$produto->Preco()}} </p>
                        <p>De: <strong class='preco-antigo'>R$ <s>{{$produto->PRODUTO_PRECO}}</s></strong></p>
                        <p class='informacoes-texto'>Categoria: imaginação</p>
                        <p class='informacoes-texto'><i class='fa-solid fa-box' style='margin-right:10px;'></i>Estoque: 1</p>

                        <div class="adicionar">
                            <button class="btn btn-primary"><i class="fa-solid fa-minus"></i></button>
                            <input type="tel">
                            <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                            <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i>Adicionar</a>
                        </div>

                    </div>
                </div>

    </section>

    <section class="descricao">
        <h1>Descrição</h1>
        <p>{{$produto->PRODUTO_DESC}}</p>

    </section>

    <section class="sugestoes">

        <h2>Você também pode gostar</h2>


        <div class="container-products">
            <div class="arrow-content">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </div>


            <div class="card" style="width: 18rem;">
            <img src="/images/placeholder-9.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Boneca</h5>
                <p class="card-text">Preço: R$ 49,90</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
            </div>

            <div class="card" style="width: 18rem;">
            <img src="/images/placeholder-9.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Quebra-cabeça</h5>
                <p class="card-text">Preço: R$ 39,90</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
            </div>

            <div class="card" style="width: 18rem;">
            <img src="/images/placeholder-9.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pista de corrida</h5>
                <p class="card-text">Preço: R$ 69,90</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
            </div>
            <div class="arrow-content">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </div>


        </div>
    </section>


    <!-- <div id="footer"></div> -->
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
            <img src="/images/payment.png" alt="">
        </div>
        </div>

    </footer>
</body>
<!-- <script src="js/load.js"></script> -->
</html>
