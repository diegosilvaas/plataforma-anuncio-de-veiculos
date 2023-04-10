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


    <form action="action.php" method="post" id="form">


        <form>
            <div class="col-md-3 mb-3">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" class="form-control is-invalid" id="titulo" placeholder="Titulo do anuncio" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="veiculopor">Veiculo por</label>
                <input type="number" name="veiculopor" class="form-control is-invalid" id="veiculopor" placeholder="Preço do veiculo" required>

            </div>


            <div class="col-md-3 mb-3">
                <label for="tipodeveiculo">Tipo de veiculo</label>
                <input name="tipodeveiculo" type="text" class="form-control is-invalid" id="tipodeveiculo" placeholder="Carro, moto, camnihao..." required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="marca">Marca</label>
                <input name="marca" type="text" class="form-control is-invalid" id="marca" placeholder="Marca" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="categoria">Categoria</label>
                <input name="categoria" type="text" class="form-control is-invalid" id="categoria" placeholder="Sedan, hatch ..." required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="modelo">Modelo</label>
                <input name="modelo" type="text" class="form-control is-invalid" id="modelo" placeholder="Dica: Palio, Renegade" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="versao">Versão</label>
                <input name="versao" type="text" class="form-control is-invalid" id="versao" placeholder="Exemplo: 1.0 ECONOMY, Longitude 1.8 Flex Automático" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="anofabricacao">Ano de fabricação</label>
                <input name="anofabricacao" type="number" class="form-control is-invalid" id="anofabricacao" placeholder="" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="anomodelo">Ano do modelo</label>
                <input name="anomodelo" type="number" class="form-control is-invalid" id="anomodelo" placeholder="" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="cambio">Câmbio</label>
                <input name="cambio" type="text" class="form-control is-invalid" id="cambio" placeholder="" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="km">Km Rodados</label>
                <input name="km" type="number" class="form-control is-invalid" id="km" placeholder="0 km" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="portas">Portas</label>
                <input name="portas" type="number" class="form-control is-invalid" id="portas" placeholder="" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="placa">Placa</label>
                <input name="placa" type="text" class="form-control is-invalid" id="placa" placeholder="Insira as letras da placa em maiusculo" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="cor">Cor</label>
                <input name="cor" type="text" class="form-control is-invalid" id="cor" placeholder="" required>

            </div>

            <div class="col-md-3 mb-3">
                <label for="combustivel">Combustivel</label>
                <input name="combustivel" type="text" class="form-control is-invalid" id="combustivel" placeholder="" required>

            </div>




            <span style="width:100%; text-align:center;  display: inline-block;">
                <button type="submit" name="btncadastrar"> Cadastrar </button>




        </form>

        </form>



      

</body>

</html>