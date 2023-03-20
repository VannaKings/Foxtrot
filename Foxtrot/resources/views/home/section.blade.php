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

    <!-- <div class="espaco"></div> -->

    <main>
      <!-- Cabeçalho da seção -->
      <section class="secao-cabecalho">
          <div class="container">
              <img src="/images/logo.png" alt="" style="">
          </div>
      </section>

      <!-- Seção Principal -->
      <section class="secaoPrincipal">
          <div class="container">

              <!-- FILTRO -->
              <div class="container-filtro">
                  <div class="titulo_filtro">
                      <strong>FILTRO</strong>
                  </div>
                  <p>Categorias</p>
                  <div class="filter-box">
                @foreach($categorias as $categoria)
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        {{$categoria->CATEGORIA_NOME}}
                      </label>
                    </div>
                @endforeach
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        Pelúcia
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                        Quebra-cabeça
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Bonecos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                        Playground
                      </label>
                    </div>
                  </div>
                  <p>Idade</p>
                  <div class="filter-box">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        0 a 3 meses
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                      <label class="form-check-label" for="flexCheckChecked">
                        1 a 2 anos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        3 a 6 anos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                      <label class="form-check-label" for="flexCheckChecked">
                        10 a 11 anos
                      </label>
                    </div>
                  </div>
                  <p>Marca</p>
                  <div class="filter-box">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        Fisher Price
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                        Estrela
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Lego
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                      <label class="form-check-label" for="flexCheckChecked">
                        Fun
                      </label>
                    </div>
                  </div>
              </div>



              <div class="container-nav-produtos">
                @foreach($produtos as $produto)
                <div class="card">
                  <img src="/images/placeholder-9.png" class="card-img-top" alt=".">
                  <div class="card-body">
                    <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
                    <p class="card-text">Preço: R$ {{$produto->getPrecoDesconto()}}</p>
                    <div class="buttons">
                      <a href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i>Ver mais</a>
                      <a href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i>Adicionar</a>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>

          </div>

      </section>
    </main>

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
<!-- <script src="/js/load.js"></script> -->
</html>
