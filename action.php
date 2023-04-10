 <?php include 'includes/head.php'; ?>





            <button type="button" onClick="JavaScript: window.history.back();" class="btn btn-primary btn-lg btn-block">Voltar</button>

      </div>



<?php
if (isset($_POST['btncadastrar'])) {
    $title = $_POST['titulo'];
    $vehicle = $_POST['veiculopor'];
    $typevehicle = $_POST['tipodeveiculo'];
    $brand = $_POST['marca'];
    $category = $_POST['categoria'];
    $model = $_POST['modelo'];
    $version = $_POST['versao'];
    $yearmanufactured = $_POST['anofabricacao'];
    $modelyear = $_POST['anomodelo'];
    $exchange = $_POST['cambio'];
    $mileagedriven = $_POST['km'];
    $doors = $_POST['portas'];
    $plate = $_POST['placa'];
    $color= $_POST['cor'];
    $fuel = $_POST['combustivel'];




    $db = new PDO("mysql:dbname=login;host=localhost", 'root', '');
    $sql = "insert into cadastrodeveiculo (titulo, veiculopor, tipodeveiculo, marca, categoria, modelo, 
    versao, anofabricacao, anomodelo, cambio, km, portas, placa, cor, combustivel) values ('$title', 
        '$vehicle', '$typevehicle', '$brand', '$category', '$model', '$version', '$yearmanufactured', '$modelyear', 
        '$exchange', '$mileagedriven', '$doors', '$plate', '$color', '$fuel')";
    $stmt = $db->prepare($sql);


    if ($stmt->execute()) {
        'Formulario enviado com sucesso';
    } else {
        'Erro ao cadastrar Formulário';
    }
   }


?>

<div class="container">
      <div class="text-center">
         <form id="voltar">