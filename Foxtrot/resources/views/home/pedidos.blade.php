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

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID do Pedido</th>
                    <th>Data</th>
                    <th>Total</th>
                    <th>Comprar novamente</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                <tr>
                    <td>{{$pedido->PEDIDO_ID}}</td>
                    <td>{{date_format($pedido->PEDIDO_DATA,'d/m/Y')}}</td>
                    <td>R$ {{$pedido->getTotalPrice()}}</td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i></button></td>
                </tr>
                @endforeach
                <!-- <tr>
                    <td>002</td>
                    <td>02/01/2023</td>
                    <td>R$ 200,00</td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i></button></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>03/01/2023</td>
                    <td>R$ 300,00</td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i></button></td>
                </tr> -->
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>
