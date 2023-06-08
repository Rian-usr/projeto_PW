<?php 
session_start();

if(isset($_SESSION['usuario'])) {

} else {
  echo " 
  <script> 
  window.alert('Não permitido');
  window.location.href='login.php';
  </script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/menu.css">
    <title>Menu</title>
</head>
<body>

    <header>
        <div class="logo">
          <img src="" alt="" srcset="">
        </div>
    
        <nav class="nav" id="nav_menu">
    
          <ion-icon name="close-outline" class="close" id="close-menu"></ion-icon>
    
          <ul class="nav_list">
            <li class="nav_item"> <a href="index.html" class="link">Home</a> </li>

            <li class="nav_item"> <a href="./php/cadCliente.php" class="link">Clientes</a> </li>
            <li class="nav_item"> <a href="./php/cadUsuario.php" class="link">Usuários</a> </li>
            <li class="nav_item"> <a href="./php/cadFuncionario.php" class="link">Funcionários</a> </li>
            <li class="nav_item"> <a href="./php/cadFornecedor.php" class="link">Forncedores</a> </li>  
            <li class="nav_item"> <a href="./php/cadProduto.php" class="link">Produtos</a> </li> 
            <li class="nav_item"> <a href="./php/sair.php" class="link">Sair</a> </li>           
          </ul>
        </nav>
    
        <ion-icon name="menu-outline" class="toggle" id="toggle-menu"> </ion-icon>
    
      </header>
    
<script src="./js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>