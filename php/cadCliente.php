<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADASTRO DE CLIENTE</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
  </head>
  <body>

<header>

</header>

<section class="container">
  
<label class="page-title">CADASTRO CLIENTE</label>
  
  <div class="cad">
   <form method="post" class="form">
    <label class="form-label">NOME COMPLETO:</label> <br>
    <input type="text" class="form-value" id="nome" name="nome"> <br>
    <label class="title"> Documentos </label> <br>
    <label class="form-label">CPF:</label>
    <input type="number" class="form-value" id="cpf" name="cpf">
    <label class="form-label">RG:</label>
    <input type="number" class="form-value" id="rg" name="rg"> <br>
    <label class="title"> Endereço residencial </label> <br>
    <label class="form-label">CEP:</label>
    <input type="number" class="form-value" id="cep" name="cep">
    <label class="form-label">CIDADE:</label>
    <input type="text" class="form-value" id="cidade" name="cidade">
    <label class="form-label">ESTADO:</label>
    <input type="text" class="form-value" id="estado" name="estado"> <br>
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

    <div class="btns">
    <input type="reset" value="Limpar" class="btn1"> <br>
    <input type="submit" value="Cadastrar" class="btn2"> <br>
    <a href="#"><input type="button" value="Voltar" class="btn3"></a>
    </div>
   </form>
    
  </div>
</section>
    


<?php echo '<p>Hello World</p>'; 

?> 

  </body>
</html>