<?php
session_start();
?>

<!DOCTYPE html>
<html lang="PT-BR">


<?php include 'includes/head.php'; ?>


<body>
  <div class="container">
    <center>
      <div class="middle">
        <div id="login">

          <form action="login.php" method="POST">

            <?php

            if (array_key_exists('nao_autenticado', $_SESSION) && $_SESSION['nao_autenticado']) {

            ?>
              <div id="alerta_login" class="alert alert-danger" role="alert">
                Usuário ou senha inválidos
              </div>
            <?php
            }

            ?>
            <fieldset class="clearfix">

              <p><span class="fa fa-user"></span><input name="usuario" type="text" Placeholder="Usuário" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
              <p><span class="fa fa-lock"></span><input name="senha" type="password" Placeholder="Senha" required></p> <!-- JS because of IE support; better: placeholder="Password" -->

              <div>
                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Esqueceu sua senha?</a></span>
                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Entrar"></span>
              </div>

            </fieldset>
            <div class="clearfix"></div>
          </form>

          <div class="clearfix"></div>

        </div> <!-- end login -->
        <div class="logo">
        
            <img src="img/logo-250px-expandido.png">
            
        </div>   

          <div class="clearfix"></div>
        </div>

      </div>
    </center>
  </div>

  </div>

  <script>
    var alertLoginEl = document.querySelector('#alerta_login');

    setTimeout(() => {
      alertLoginEl.style.display = 'none';
      alertLoginEl.style.transition = '1s';
    }, "8000");
  </script>
</body>

</html>