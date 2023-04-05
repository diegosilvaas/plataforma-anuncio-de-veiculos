<?php
session_start();
include('conection.php');

$conection =  Conection::getDb();

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "select * from usuario where senha = '$senha' and usuario = '$usuario'";
$stmt = $conection->prepare($query);
$stmt->execute();
$result = $stmt->fetch();


if(!empty($result)) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
    
} else {
    $SESSION['nao_autenticado'] = true;
    header('Location: index.php' );
    exit();
}