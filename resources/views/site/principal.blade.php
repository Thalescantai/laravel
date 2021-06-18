<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Cadastro de Usuarios</title>
  </head>
  <style>
    body{
      background: #CCC;
    }
    .user{
      max-width: 40%;
      margin-left: 30%;
      border-radius: 10px;
      background: #ffffff;
      padding: 3%;
      margin-top: 05%;
    }
  </style>
  <body>
    
    <div class="user">
    <form action="/cad_user" method="POST">
        @csrf
        <div class="formulario">    <!--Codigo preencher os formularios-->
            <label for="nm_user" class="form_label">Nome:</label>
            <input type="text" class="form-control" name="nm_user" id="nm_user" placeholder="Seu nome!">
        </div>
    <br>
        <div class="formulario">
            <label for="email_user" class="form_label">Email:</label>
            <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Seu email!">
        </div>
    <br>
        <div class="formulario">
          <label for="cpf_user" class="form_label">CPF:</label>
          <input type="text" class="form-control" name="cpf_user" id="cpf_user" placeholder="Seu CPF!">
        </div>
<br>
          <div class="formulario">
            <label for="tel_user" class="form_label">Telefone:</label>
            <input type="text" class="form-control" name="tel_user" id="tel_user" placeholder="Seu telefone!">  
          </div>
<br>
          <div class="formulario">
            <label for="nascimento_user" class="form_label">Data de Nascimento</label>
            <input type="date" class="form-control" name="nascimento_user" id="nascimento_user" placeholder="Sua data de nascimento!">  
          </div>
<br>
          <div class="formulario">
            <label for="pai_user" class="form_label">Nome do Pai:</label>
            <input type="text" class="form-control" name="pai_user" id="pai_user" placeholder="Nome do Pai!">  
          </div>
<br>          
          <div class="formulario">
            <label for="mae_user" class="form_label">Nome da Mae:</label>
            <input type="text" class="form-control" name="mae_user" id="mae_user" placeholder="Nome da Mãe!">  
          </div>
   <br>       
          <div class="formulario">
            <label for="rg_user" class="form_label">Numero do RG:</label>
            <input type="text" class="form-control" name="rg_user" id="rg_user" placeholder="Numrero do RG!">  
          </div>
      <br>

          <div class="formulario">
            <label for="cep_user" class="form_label">Numero do CEP:</label>
            <input type="text" class="form-control" name="cep_user" id="cep_user" placeholder="Numrero do CEP!">  
          </div>
          
          <br>       
          <div class="formulario">
            <label for="rua_user" class="form_label">Nome da rua:</label>
            <input type="text" class="form-control" name="rua_user" id="rua_user" placeholder="Nome da rua!">  
          </div>

          <br>       
          <div class="formulario">
            <label for="bairro_user" class="form_label">Nome do Bairro:</label>
            <input type="text" class="form-control" name="bairro_user" id="bairro_user" placeholder="Nome do Bairro!">  
          </div>

          <br>       
          <div class="formulario">
            <label for="cidade_user" class="form_label">Nome da Cidade:</label>
            <input type="text" class="form-control" name="cidade_user" id="cidade_user" placeholder="Nome da cidade!">  
          </div>

          <br>       
          <div class="formulario">
            <label for="uf_user" class="form_label">UF:</label>
            <input type="text" class="form-control" name="uf_user" id="uf_user" placeholder="Seu UF!">  
          </div>

          <br>       
          <div class="formulario">
            <label for="renda_user" class="form_label">Renda mensal total:</label>
            <input type="text" class="form-control" name="renda_user" id="renda_user" placeholder="Renda mensal total!">  
          </div>

        <br>
        <div class="formulario">
            <button type="submit" class="btn btn-primary"> Salvar</button>
            <input type="text" hidden name="created_at" id="created_at" value="<?php echo date('d-m-y H:s')?>">
        </div>
    </form>
    </div>
    <!-- Esse Ultimo é o botao para salvar -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>