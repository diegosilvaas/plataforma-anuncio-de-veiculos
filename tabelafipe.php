<!DOCTYPE html>
<html lang="PT-BR">


<?php include 'includes/head.php'; ?>


<body>





  <ul class="nav nav-pills nav-fill">
    <li class="nav-item">
      <a class="nav-link" href="painel.php">Inicio</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="formulariodecadastro.php">Cadastrar veiculo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tabelafipe.php">Tabela Fipe</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php" disabled>Sair</a>
    </li>
  </ul>

  <div style='width: 500px;'  class="tfb-query" data-style="2" fipeid=""></div>

  <head>
    <script src="https://www.tabelafipebrasil.com/api/js/tabelafipe-widget.min.js"></script>
  </head>

</body>

</html>