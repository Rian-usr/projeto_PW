<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO DE PRODUTO</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/style.css">

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
  
<label class="page-title">CADASTRO PRODUTO</label>
  
  <div class="cad">
   <form method="POST" class="form">
    <label class="form-label">NOME:</label> <br>
    <input type="text" class="form-value" id="nome" name="nome"> <br>
    <label class="title"> Características </label> <br>
    <label class="form-label">COR:</label>
    <input type="text" class="form-value" id="cor" name="cor" >
    <label class="form-label">PESO:</label>
    <input type="number" class="form-value" id="peso" name="peso"> <br>
    <label class="form-label">MATERIAL:</label>
    <input type="text" class="form-value" id="material" name="material">
    <label class="form-label">QUANTIDADE:</label>
    <input type="number" class="form-value" id="quantidade" name="quantidade"> <br>
    <label class="form-label">TIPO DE PRODUTO:</label>
    <input type="text" class="form-value" id="tipo" name="tipo">
     <label class="form-label">FORNECEDOR:</label>
    <input type="text" class="form-value" id="fornecedor" name="fornecedor"> <br>
    <label class="form-label">PREÇO:</label>
    <input type="number" step="0.010" class="form-value" id="preco" name="preco">
    <label class="form-label">CUSTO:</label>
    <input type="number" step="0.010" class="form-value" id="custo" name="custo"> <br>

    <div class="btns">
    <input type="reset" value="Limpar" class="btn1"> <br>
    <input type="submit" value="Cadastrar" class="btn2"> <br>
    <a href="/php/consultProduto.php"><input type="button" value="Consultar" class="btn3"></a>
    </div>
   </form>
    
  </div>
</section>
    


<?php 

if(!empty($_POST)) {
  $produto = array(
    $_POST['nome'],
    $_POST['cor'],
    $_POST['peso'],
    $_POST['material'],
    $_POST['quantidade'],
    $_POST['tipo'],
    $_POST['fornecedor'],
    $_POST['preco'],
    $_POST['custo'],
  );

  for($i = 0; $i < count($produto); $i++){
     echo "<br>" .$produto[$i];
  }

  $caminho = "cadastros\Fornecedor.txt";

  $valuesCad = "Produto: $produto[0], $produto[1], $produto[2], $produto[3], $produto[4], $produto[5], $produto[6], $produto[7], $produto[8] \n";

  if(file_put_contents($caminho, $valuesCad, FILE_APPEND)) {
    echo"<script> alert('Dados cadastrado com sucesso');</script>";
  } else {
    echo"<script> alert('Erro ao cadastrar!');</script>";
  }

}


?> 

  </body>
</html>