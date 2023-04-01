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
    <!-- Cabeçalho da seção -->
    <section class="secao-cabecalho">
      <div class="container">
          <img src="/images/logo.png" alt="" style="">
      </div>
    </section>

    <div class="container-banner">
      <h1>Conheça a nova linha de brinquedos</h1>
    </div>

    <div class="container-products">
      <div class="arrow-content">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </div>

    @foreach($produtos->reverse()->take(3) as $produto)
      <div class="card" style="width: 18rem;">
        <img src="/images/placeholder-9.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
          <p class="card-text">Preço: R$ {{number_format($produto->PRODUTO_PRECO,2,",",".")}}</p>
          <a href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    @endforeach

      <div class="arrow-content">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </div>

    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/placeholder-9.png" class="d-block w-100" alt="..." style="border-radius: 70px;">
        </div>
        <div class="carousel-item">
          <img src="/images/placeholder-9.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/placeholder-9.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>





    <div class="titulo">
      <h2>Mais vendidos</h2>
    </div>

    <div class="container-products">
      <div class="arrow-content">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </div>


      @foreach($produtos->take(3) as $produto)
        <div class="card" style="width: 18rem;">
            <img src="/images/placeholder-9.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
            <p class="card-text">Preço: R$ {{number_format($produto->PRODUTO_PRECO,2,",",".")}}</p>
            <a href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-primary">Ver mais</a>
            </div>
        </div>
        @endforeach
      <div class="arrow-content">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </div>


    </div>
    @endsection
    <!-- <div id="footer"></div> -->

</body>
<script src="../js/load.js"></script>
</html>
