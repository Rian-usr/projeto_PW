<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO DE FORNECEDORES</title>
    
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
  
<label class="page-title">CADASTRO FORNECEDOR</label>
  
  <div class="cad">
   <form method="POST" class="form">
    <label class="form-label">NOME COMPLETO:</label> <br>
    <input type="text" class="form-value" id="nome" name="nome"> <br>
    <label class="title"> Documentos </label> <br>
    <label class="form-label">CNPJ:</label>
    <input type="number" class="form-value" id="cNPJ" name="cnpj">
    <label class="form-label">RG:</label>
    <input type="number" class="form-value" id="rg" name="rg"> <br>
    <label class="title"> Endereço comercial  </label> <br>
    <label class="form-label">CEP:</label>
    <input type="number" class="form-value" id="cep" name="cep" onblur="pesquisaCEP(this.value)">
    <label class="form-label">CIDADE:</label>
    <input type="text" class="form-value" id="cidade" name="cidade">
    <label class="form-label">ESTADO:</label>
    <input type="text" class="form-value" id="uf" name="estado"> <br>
     <label class="form-label">RUA:</label>
    <input type="text" class="form-value" id="rua" name="rua">
    <label class="form-label">Nº:</label>
    <input type="number" class="form-value" id="num" name="num">
    <label class="form-label">BAIRRO:</label>
    <input type="text" class="form-value" id="bairro" name="bairro"> <br>
    <label class="title"> Contatos </label> <br>
    <label class="form-label">CELULAR:</label>
    <input type="number" class="form-value" id="celular" name="celular">
    <label class="form-label">EMAIL:</label>
    <input type="email" class="form-value" id="email" name="email"><br>
    <label class="form-label">FOTO:</label>
    <input type="file" accept="image/*" class="form-value" id="image" name="imageFornecedor"><br>

    <div class="btns">
    <input type="reset" value="Limpar" class="btn1"> <br>
    <input type="submit" value="Cadastrar" class="btn2"> <br>
    <a href="#"><input type="button" value="Consultar" class="btn3"></a>
    </div>
   </form>
    
  </div>
</section>
    


<?php 

if(!empty($_POST)) {
  $fornecedor = array(
    $_POST['nome'],
    $_POST['cnpj'],
    $_POST['rg'],
    $_POST['cep'],
    $_POST['rua'],
    $_POST['num'],
    $_POST['bairro'],
    $_POST['cidade'],
    $_POST['estado'],
    $_POST['celular'],
    $_POST['email']
  );

  for($i = 0; $i < count($fornecedor); $i++){
     echo "<br>" .$fornecedor[$i];
  }

  $caminho = "cadastros\Fornecedores.txt";

  $valuesCad = "Fornecedores: $fornecedor[0], $fornecedor[1], $fornecedor[2], $fornecedor[3], $fornecedor[4], $fornecedor[5], $fornecedor[6], $fornecedor[7], 
  $fornecedor[8], $fornecedor[9] \n";

  if(file_put_contents($caminho, $valuesCad, FILE_APPEND)) {
    echo"<script> alert('Dados cadastrado com sucesso');</script>";
  } else {
    echo"<script> alert('Erro ao cadastrar!');</script>";
  }

$image = $_FILES['imageFornecedor'];
$dir = "imgs/fornecedores/";

date_default_timezone_set('America/Sao_Paulo');

$extensao = strtolower(substr($image['name'], -4));

$new_name = date("Y.m.d-H.i.s") . $extensao;

move_uploaded_file($imagem['tmp_name'], $dir.$new_name);

}


?> 

    <script src="/js/buscaCEP.js"></script>
  </body>
</html>