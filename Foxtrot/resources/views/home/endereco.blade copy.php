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
            <h3 class="titulo" style="text-align:center">Alterar Endereço</h3>
        </div>

        <div class="container" style="display:flex; justify-content:center; background-color:whitesmoke; padding: 50px 200px">
            <form class="row g-3" method='post' action='/endereco/altera/{{$endereco->ENDERECO_ID}}'>
                @csrf
                <input type="hidden" name="id" value="{{$endereco->ENDERECO_ID}}">
                <div class="mb-3 col-md-6">
                    <label for="rua" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Casa/Escritório" name='nome'>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="cep" class="form-label">CEP:</label>
                    <input type="text" class="form-control" id="cep" placeholder="11220-330" name='cep'>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="rua" class="form-label">Rua:</label>
                    <input type="text" class="form-control" id="rua" placeholder="Avenida Maria Coelho de Aguiar" name= 'logradouro'>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="numero" class="form-label">Número:</label>
                    <input type="text" class="form-control" id="numero" placeholder="123" name ='numero'>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="complemento" class="form-label">Complemento:</label>
                    <input type="text" class="form-control" id="complemento" placeholder="Casa, Apartamento (opcional)" name = 'complemento'>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="estado" class="form-label">Estado:</label>
                    <input type="text" class="form-control" id="estado" placeholder="SP" name = 'estado'>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" placeholder="São Paulo" name = 'cidade'>

                </div>

                <button type="submit" class="mb-3 col-md-3 btn btn-primary" style="margin: 10px"> Salvar </button>
            </form>
        </div>

    </div>
    @endsection
</body>
</html>
