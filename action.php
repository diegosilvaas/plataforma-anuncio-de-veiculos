 <?php include 'includes/head.php'; ?>

 <div class="container">
      <div class="text-center">
         <form id="voltar">



            <button type="button" onClick="JavaScript: window.history.back();" class="btn btn-primary btn-lg btn-block">Voltar</button>

      </div>



<?php
if (isset($_POST['btncadastrar'])) {
    $titulo = $_POST['titulo'];
    $veiculopor = $_POST['veiculopor'];
    $tipodeveiculo = $_POST['tipodeveiculo'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $modelo = $_POST['modelo'];
    $versao = $_POST['versao'];
    $anofabricacao = $_POST['anofabricacao'];
    $anomodelo = $_POST['anomodelo'];
    $cambio = $_POST['cambio'];
    $km = $_POST['km'];
    $portas = $_POST['portas'];
    $placa = $_POST['placa'];
    $cor = $_POST['cor'];
    $combustivel = $_POST['combustivel'];




    $db = new PDO("mysql:dbname=login;host=localhost", 'root', '');
    $sql = "insert into cadastrodeveiculo (titulo, veiculopor, tipodeveiculo, marca, categoria, modelo, 
    versao, anofabricacao, anomodelo, cambio, km, portas, placa, cor, combustivel) values ('$titulo', 
        '$veiculopor', $tipodeveiculo, $marca, $categoria, $modelo, $versao, $anofabricacao, $anomodelo, 
        $cambio, $km, $portas, $placa, $cor, $combustivel)";
    $stmt = $db->prepare($sql);


    if ($stmt->execute()) {
        'Formulario enviado com sucesso';
    } else {
        'Erro ao cadastrar Formulário';
    }
   }


?>