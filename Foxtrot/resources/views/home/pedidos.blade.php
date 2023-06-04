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

    <div class="container" style="margin-bottom:40px">
        <div class="area-titulo">
            <h3 class="titulo">Histórico de Pedidos</h3>
        </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            @foreach($pedidos as $pedido)
            <div class="accordion-item">

                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$pedido->PEDIDO_ID}}" aria-expanded="false" aria-controls="flush-collapseOne{{$pedido->PEDIDO_ID}}">
                        Pedido #{{$pedido->PEDIDO_ID}}
                    </button>
                </h2>
                @foreach($pedido->PedidoItem as $pedidoItem)
                <div id="flush-collapseOne{{$pedido->PEDIDO_ID}}" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="display:flex; justify-content:space-around">
                        <img src="{{$pedidoItem->Produto->getFirstImage()}}" alt="" style="max-width: 200px; max-height: 200px">
                        <div style="display:flex; flex-direction:column; align-items:center; justify-content: center">
                            <p><strong>Produto:</strong></p>
                            <p> {{$pedidoItem->Produto->PRODUTO_NOME}} </p>
                        </div>
                        <div style="display:flex; flex-direction:column; align-items:center; justify-content: center">
                            <p><strong>Quantidade:</strong></p>
                            <p> {{$pedidoItem->ITEM_QTD}} </p>
                        </div>
                        <div style="display:flex; flex-direction:column; align-items:center; justify-content: center">
                            <p><strong>Preço:</strong></p>
                            <p> R${{ number_format(($pedidoItem->ITEM_QTD*$pedidoItem->ITEM_PRECO), 2, ',', '.') }} </p>
                        </div>
                        <div style="display:flex; flex-direction:column; align-items:center; justify-content: center">
                            <p><strong>Status</strong></p>
                            <p>{{$pedido->Status->STATUS_DESC}}</p>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    @endsection


</body>
</html>
