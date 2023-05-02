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
    @extends('layout.app')

    @section('main')
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

                    <div class="col-md-6" style="margin-top: 10px">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Nome:</strong> {{Auth::user()->USUARIO_NOME}}</li>
                            <li class="list-group-item"><strong>E-mail:</strong> {{Auth::user()->USUARIO_EMAIL}}</li>
                            <li class="list-group-item"><strong>CPF:</strong> {{Auth::user()->USUARIO_CPF}}</li>
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
                        <h2 class="modal-title" id="editarInfoModalLabel">Editar</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Seu nome completo">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="Seu melhor e-mail">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">CPF:</label>
                            <input type="tel" class="form-control" id="telefone" placeholder="123.456.789-10">
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
                @if($endereco)
                @foreach($endereco->where("ENDERECO_APAGADO", 0) as $endereco)
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item col">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Endereço Principal</h5>
                                <div>
                                    <a href="/endereco/{{$endereco->ENDERECO_ID}}"><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                    <form action="/perfil/deletar/{{$endereco->ENDERECO_ID}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enderecoModal"><i class="fa-solid fa-pen-to-square"></i></button> -->
                            </div>
                            <div class="mt-2">
                                <p><strong>Nome:</strong> {{$endereco->ENDERECO_NOME}}</p>
                                <p><strong>CEP:</strong> {{$endereco->ENDERECO_CEP}}</p>
                                <p><strong>Logradouro:</strong> {{$endereco->ENDERECO_LOGRADOURO}}, {{$endereco->ENDERECO_NUMERO}}</p>
                                <p><strong>Cidade:</strong> {{$endereco->ENDERECO_CIDADE}}</p>
                                <p><strong>Estado:</strong> {{$endereco->ENDERECO_ESTADO}}</p>
                            </div>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item col">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Outro Endereço</h5>
                                <div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enderecoModal"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </div>
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
                    </div> -->
                @endforeach
                @endif
                </div>

                <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#enderecoModal"><i class="fa-solid fa-plus"></i> Novo Endereço</button>
            </div>
        </div>

        <!-- Modal para adicionar endereço -->
        <div class="modal fade" id="enderecoModal" tabindex="-1" aria-labelledby="enderecoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="enderecoModalLabel">Adicionar</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" method="post" action="/perfil/adicionar">
                            @csrf
                            <div class="mb-3 col-md-6">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" placeholder="Casa/Escritório" name="nome">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" placeholder="11220-330" name="cep">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="rua" class="form-label">Logradouro:</label>
                                <input type="text" class="form-control" id="rua" placeholder="Avenida Maria Coelho de Aguiar" name = "logradouro">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="numero" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="numero" placeholder="123" name="numero">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="complemento" class="form-label">Complemento:</label>
                                <input type="text" class="form-control" id="complemento" placeholder="Casa, Apartamento (opcional)" name="complemento">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="estado" class="form-label">Estado:</label>
                                <input type="text" class="form-control" id="estado" placeholder="SP" name="estado">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="cidade" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="cidade" placeholder="São Paulo" name="cidade">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
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

