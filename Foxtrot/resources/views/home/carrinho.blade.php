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
    @extends('layout.app')

    @section('main')
    <div class="espaco"></div>
    <div style='display: none'>{{$valorTotal = 0}}</div>
    <section class="carrinho">
        <div class="container">

            <div class="col-12 area-titulo">
                <h2 class="text-center mb-4 titulo">Carrinho de Compras</h2>
            </div>

            <div style="display:flex; justify-content:space-between; padding: 30px; background-color:whitesmoke">
                <div class="row">
                    @foreach($carrinho as $produto)
                        @if($produto->ITEM_QTD > 0)

                            <div class="card" style="width: 18rem;">
                                <form action="/carrinho/alterar/{{$produto->PRODUTO_ID}}" method = "POST">
                                @csrf
                                    <img src="/images/placeholder-9.png" alt="Nome do Produto" class="card-img-top" style="max-height:120px">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$produto->Produto->PRODUTO_NOME}}</h5>
                                        <p class="card-text">Preço: R$ {{$produto->Produto->getPrecoDesconto()}}</p>
                                        <div class="card-text" style="display:flex; justify-content:center">
                                            <button type="submit" class="btn btn-primary" onclick="menos()"><i class="fa-solid fa-minus"></i></button>
                                                <input type="number" style="width: 40px; text-align: center;" placeholder = '{{$produto->ITEM_QTD}}' name= "qtd" value="{{$produto->ITEM_QTD}}" id="total">
                                            <button  type="submit" class="btn btn-primary" onclick="mais()"><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger" style="margin-bottom: 10px"><i class="fa-solid fa-trash-can" style="margin-right: 10px"></i>Remover</button>
                                </form>
                            </div>


                        @endif
                    @endforeach
                </div>
                <div style='display: none'>
                    @for($i = 0; $i < count($carrinho); $i++)
                    {{$valor = (float)str_replace(',', '.', $carrinho[$i]->Produto->getPrecoDesconto())}}
                    {{$qtd = (float)$carrinho[$i]->ITEM_QTD}}
                    {{$valorTotal += (float)$valor*$qtd}}
                    @endfor
                </div>
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="margin-top:10px">Resumo do Pedido</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Subtotal: R$ {{number_format($valorTotal, 2, ',', '.')}}</p>
                            <p class="card-text">Frete: R$ 10,00</p>
                            <h5>Total: R$ {{number_format(($valorTotal+ 10), 2, ',', '.')}}</h5>

                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary ">Finalizar Compra</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection

</body>
</html>
