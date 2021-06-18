<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Usuarios!</title>
  </head>
  <body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Data Cadastro</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)

          <tr>
            <th> {{$users->nm_user}}</th>
            <td> {{$users->email_user}}</td>
            <td>{{$users->pwd_user}}</td>
            <td>{{$users->created_at}}</td>
            <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <a href="/">Voltar</a>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>

