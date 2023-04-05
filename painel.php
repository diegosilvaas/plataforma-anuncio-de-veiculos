<?php
session_start();
?>

<h2> Olá <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logout.php">Sair,/a></h2>