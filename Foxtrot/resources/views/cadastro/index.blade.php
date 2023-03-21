<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foxtrot</title>

    <link rel="stylesheet" href="/CSS/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <img src="/images/logo.png" alt="logo" class="logo" style="max-width: 400px; margin-bottom: 20px;">
    <div class="container">
        <h1>Cadastre-se</h1>
        <form class="row g-3" method = "POST" action = "{{route('registrar')}}">
           @csrf
            <div class="col-md-6">
                <label for="inputName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" name='USUARIO_NOME'>
            </div>
            <div class="col-md-6">
                <label for="inputName" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="inputSobrenome" name='USUARIO_SOBRENOME'>
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name='USUARIO_EMAIL'>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Senha</label>
              <input type="password" class="form-control" id="inputPassword4" name = 'USUARIO_SENHA'>
            </div>
            <div class="col-md-6">
              <label for="inputCPF4" class="form-label">CPF</label>
              <input type="number" class="form-control" id="inputCPF4" name = 'USUARIO_CPF'>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="" name = 'USUARIO_CPF'>
            </div>
            <div class="col-4">
                <label for="inputZip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-4">
              <label for="inputCity" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Estado</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-12" style="margin-top: 40px;">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>
