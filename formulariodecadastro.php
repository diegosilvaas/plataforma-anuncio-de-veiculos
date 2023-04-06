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

    <form>
        <div class="col-md-3 mb-3">
            <label for="validationServer04">Titulo</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Titulo do anuncio" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Veiculo por</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Preço do veiculo" required>

        </div>

        <select class="custom-select custom-select-lg mb-3">
            <option selected>Tipo de veiculo</option>
            <option value="Carro">Carro</option>
            <option value="Moto">Moto</option>
            <option value="Ônibus e caminhões">Ônibus e caminhões</option>
        </select>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Marca</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Marca" required>

        </div>

        <select class="custom-select custom-select-lg mb-4">
            <option selected>Categoria</option>
            <option value="Hatch">Hatch</option>
            <option value="Pick up">Pick up</option>
            <option value="Sedan">Sedan</option>
            <option value="Motos">Motos</option>
            <option value="Caminhões leves">Caminhões leves</option>
            <option value="Caminhões pesados">Caminhões pesados</option>
            <option value="Ônibus">Ônibus</option>
        </select>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Modelo</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Dica: Palio, Renegade" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Versão</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Exemplo: 1.0 ECONOMY, Longitude 1.8 Flex Automático" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Ano de fabricação</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Ano do modelo</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Câmbio</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Km Rodados</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="0 km" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Portas</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Placa</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Insira as letras da placa em maiusculo" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Cor</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="" required>

        </div>

        <div class="col-md-3 mb-3">
            <label for="validationServer04">Combustivel</label>
            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="" required>

        </div>

        

        

        


    </form>

<div>
    
    <span style="width:100%; text-align:center;  display: inline-block;"><input type="submit" value="Cadastrar"></span>
    </div>

</body>

</html>