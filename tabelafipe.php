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

<select class="custom-select custom-select-lg mb-3">
  <option selected>Selecione a marca do veiculo</option>
  <option value="1">Volkswagen</option>
  <option value="2">Chevrolet</option>
  <option value="3">Fiat</option>
</select>

<select class="custom-select custom-select-lg mb-3">
  <option selected>Selecione o modelo do veiculo</option>
  <option value="1">API</option>
  <option value="2"></option>
  <option value="3"></option>
</select>

<select class="custom-select custom-select-lg mb-3">
  <option selected>Digite o ano modelo do veiculo</option>
  <option value="1">API</option>
  <option value="2"></option>
  <option value="3"></option>
</select>

<button type="button" class="btn btn-primary btn-lg">Pesquisar</button>

</body>

</html>