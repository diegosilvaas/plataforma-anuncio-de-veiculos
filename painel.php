<?php
session_start();


?>

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




    <tbody class="table-border-bottom-0">
        <?php
        $db = new PDO("mysql:dbname=login;host=localhost", 'root', '');
        $sql = 'select * from cadastrodeveiculo';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $item) {

        ?>
            <tr>

                

            <?php
        }
            ?>



            <div class="container">
                <h1> </h1>



                <div class="row">

                    <div class="col-2">
                        <div class="card">
                            <img src="img/ferrari.jpg" class="card-img-top" alt="...">
                            <div class="card-body">

                                <h5 class="card-title">


                                <div class="p-3 mb-2 bg-secondary text-white">
                                <center>
                                    <td> <b>TITULO </b>
                                        <p><?php echo $item['titulo'] ?></td>
                                </div></center>

                                <div class="p-3 mb-2 bg-secondary text-white">
                                <center>
                                    <td> <b>KM</b></center>
                                    <center>  <?php echo $item['km'] ?></td>
                                    </div></center>

                                 

                                 <div class="p-3 mb-2 bg-secondary text-white">
                                    <center>
                                    <td> <b> MARCA </b></center>
                                    <center><?php echo $item['marca'] ?></td>
                                    </div></center>

                        

                                <div class="p-3 mb-2 bg-secondary text-white">
                                <center>
                                    <td> <b> ANO </b></center>
                                    <center>    <?php echo $item['anomodelo'] ?></td>
                                    </div></center>

                               


                                <div class="p-3 mb-2 bg-secondary text-white">
                                    <center>
                                    <td><b> COR </b> </center>
                                    <center>  <?php echo $item['cor'] ?></td>
                                   </div></center>


                                   <div class="p-3 mb-2 bg-secondary text-white">
                                    <center>
                                    <td> <b> VALOR R$ </b></center>
                                    <center> <?php echo $item['veiculopor'] ?></td> 
                                    </div></center>



                                <p class="card-text"></p> <center>
                                <a href="#" class="btn btn-primary">Ver anuncio</a></center>
                            </div>
                        </div>
                    </div>








                </div>
            </div>





</body>


</html>