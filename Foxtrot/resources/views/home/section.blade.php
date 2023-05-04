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

    <!-- <div class="espaco"></div> -->

    <main>
        @section('main')
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
                <form action="{{route('produtos.filtrado')}}" method='post'>
                @csrf
                    @foreach($categorias as $categoria)
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$categoria->CATEGORIA_ID}}" id="flexCheckDefault" name='check{{$categoria->CATEGORIA_ID}}'>
                        <label class="form-check-label" for="flexCheckDefault">
                            {{$categoria->getCategoriaNome()}}
                        </label>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>

                    <!-- <div class="form-check">
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
                    </div> -->
                  </div>
              </div>



              <div class="container-nav-produtos">
                @foreach($produtos as $produto)
                    <div class="card">
                        <img src="{{$produto->getFirstImage()}}" class="card-img-top" alt=".">
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
      @endsection
    </main>

    <!-- <div id="footer"></div> -->

</body>
<!-- <script src="/js/load.js"></script> -->
</html>
