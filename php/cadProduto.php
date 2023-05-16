<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO DE PRODUTO</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <script src="/js/validaCPF.js"></script>

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
    <a href="#"><input type="button" value="Voltar" class="btn3"></a>
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

  $caminho = "cadastros\fornecedor.txt";

  $valuesCad = "Produto: $produto[0], $produto[1], $produto[2], $produto[3], $produto[4], $produto[5], $produto[6], $produto[7], $produto[8] \n";

  if(file_put_contents($caminho, $valuesCad, FILE_APPEND)) {
    echo"<script> alert('Dados cadastrado com sucesso');</script>";
  } else {
    echo"<script> alert('Erro ao cadastrar!');</script>";
  }

}


?> 

    <script src="/js/validaCPF.js"></script>
    <script src="/js/buscaCEP.js"></script>
  </body>
</html>