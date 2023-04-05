<?php
session_start();
?>

<!DOCTYPE html>
<html lang="PT-BR">


<?php include 'includes/head.php'; ?>


<div class="container">
  <center>
    <div class="middle">
      <div id="login">

        <form action="login.php" method="POST">

         
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
      <div class="logo">LOGO

        <div class="clearfix"></div>
      </div>

    </div>
  </center>
</div>

</div>