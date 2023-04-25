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
    @extends('layout.app')
    @section('main')

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
                    <img class='img-principal' src="{{$produto->getFirstImage()}}" alt='Imagem principal'>

                    <div class="informacoes">
                        <h2>{{$produto->PRODUTO_NOME}}</h2>

                        <p id='preco-antigo'>De: <strong class='preco-antigo'>R$ <s>{{$produto->PRODUTO_PRECO}}</s></strong></p>
                        <p class='preco-destaque'>R$ {{$produto->getPrecoDesconto()}} </p>
                        <p class='informacoes-texto'>Categoria: {{$produto->Categoria->CATEGORIA_NOME}}</p>
                        <p class='informacoes-texto'><i class='fa-solid fa-box' style='margin-right:10px;'></i>Estoque: {{$produto->getEstoque()}}</p>
                        <form action="/carrinho/{{$produto->PRODUTO_ID}}" method = "POST" >
                        @csrf
                            @if($produto->getEstoque() != "Indisponível")
                            <div class="adicionar">
                                <a class="btn btn-primary" onclick="menos()" ><i class="fa-solid fa-minus"></i></a>
                                    <input type="number" name ="qtd" id="total" style="text-align: center;">
                                <a class="btn btn-primary" onclick="mais()"><i class="fa-solid fa-plus"></i></a>
                            </div>
                            <button type='submit' class="btn btn-success" style="margin-top: 20px">
                                <i class="fa-solid fa-cart-shopping" style="margin-right: 5px"></i>Adicionar
                            </button>
                            @else
                            <div class="adicionar">
                                <a class="btn btn-primary" onclick="menos()"><i class="fa-solid fa-minus"></i></a>
                                    <input type="number" name = "qtd" id="total" style="text-align: center;">
                                <a class="btn btn-primary" onclick="mais()"><i class="fa-solid fa-plus"></i></a>
                            </div>
                            <button type='submit' class="btn btn-success" style="margin-top: 20px">
                                <i class="fa-solid fa-cart-shopping" style="margin-right: 5px"></i>Adicionar
                            </button>
                            @endif
                        </form>
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

            @foreach($maisProdutos as $produtoo)
                @if($produtoo->PRODUTO_ID !== $produto->PRODUTO_ID)
                <div class="card" style="width: 18rem;">
                    <img src="$produtoo->getFirstImage()" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$produtoo->PRODUTO_NOME}}</h5>
                        <p class="card-text">Preço: R$ {{$produtoo->getPrecoDesconto()}}</p>
                        <a href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
                @endif
            @endforeach
            <!-- <div class="card" style="width: 18rem;">
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
            </div> -->
            <div class="arrow-content">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </div>


        </div>
    </section>
    @endsection


</body>
<!-- <script src="js/load.js"></script> -->
</html>
