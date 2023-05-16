<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO DE USUARIO</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/usuario.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    

  </head>
  <body>

<!-- <header>

 <nav class="navbar">
  
  <ul class="nav_list">
     <li>Cliente</li>
      <ul class="list_cliente">
       <li><a>Cadastrar</a></li>
       <li><a>Consultar</a></li>
      </ul>
     <li>Usuario</li>
      <ul class="list_usuario">
       <li><a href="">Cadastrar</a></li>
       <li><a>Consultar</a></li>
      </ul>
     <li>Funcinário</li>
     <ul class="list_funcioario">
       <li><a>Cadastrar</a></li>
       <li><a>Consultar</a></li>
      </ul>
     <li>Fornecedor</li>
      <ul class="list_fornecedor">
       <li><a>Cadastrar</a></li>
       <li><a>Consultar</a></li>
      </ul>
     <li>Produto</li>
      <ul class="list_produto">
       <li><a>Cadastrar</a></li>
       <li><a>Consultar</a></li>
      </ul>
  </ul>

 </nav>

</header> -->

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