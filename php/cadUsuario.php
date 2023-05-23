<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO DE USUARIO</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/usuario.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    

  </head>
  <body>

  <header>
        <div class="logo">
          <img src="" alt="" srcset="">
        </div>
    
        <nav class="nav" id="nav_menu">
    
          <ion-icon name="close-outline" class="close" id="close-menu"></ion-icon>
    
          <ul class="nav_list">
            <li class="nav_item"> <a href="/index.html" class="link">Home</a> </li>

            <li class="nav_item"> <a href="/php/cadCliente.php" class="link">Clientes</a> </li>
            <li class="nav_item"> <a href="/php/cadUsuario.php" class="link">Usuários</a> </li>
            <li class="nav_item"> <a href="/php/cadFuncionario.php" class="link">Funcionários</a> </li>
            <li class="nav_item"> <a href="/php/cadFornecedor.php" class="link">Forncedores</a> </li>  
            <li class="nav_item"> <a href="/php/cadProduto.php" class="link">Produtos</a> </li>          
          </ul>
        </nav>
    
        <ion-icon name="menu-outline" class="toggle" id="toggle-menu"> </ion-icon>
    
      </header>

<section class="container">
  
<label class="page-title">CADASTRO USUARIO</label>
  
  <div class="cad">
   <form method="POST" class="form">
    <label class="form-label">NOME COMPLETO:</label> <br>
    <input type="text" class="form-value" id="nome" name="nome"> <br>
    <label class="form-label">EMAIL:</label>
    <input type="email" class="form-value" id="email" name="email"><br>
    <label class="form-label">SENHA:</label>
    <input type="password" class="form-value" id="senha" name="senha">

    <div class="btns">
    <input type="reset" value="Limpar" class="btn1"> <br>
    <input type="submit" value="Cadastrar" class="btn2"> <br>
    <a href="#"><input type="button" value="Voltar" class="btn3"></a>
    </div>
   </form>
    
  </div>
</section>
    


<?php 

if(!empty($_POST)) {
  $usuario = array(
    $_POST['nome'],
    $_POST['email'],
    $_POST['senha']
  );

  for($i = 0; $i < count($usuario); $i++){
     echo "<br>" .$usuario[$i];
  }

  $caminho = "cadastros\usuario.txt";

  $valuesCad = "Usuario: $usuario[0], $usuario[1], $usuario[2] \n";

  if(file_put_contents($caminho, $valuesCad, FILE_APPEND)) {
    echo"<script> alert('Dados cadastrado com sucesso');</script>";
  } else {
    echo"<script> alert('Erro ao cadastrar!');</script>";
  }

}


?> 

  </body>
</html>