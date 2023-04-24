<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=][, initial-scale=1.0">
      <title>Movies Cinema Salazar</title>
      <?php require_once("./pages/fragments/imports.php")?>
  </head>
  <body>
    <section id="section-form">
    <form action="./helpers/login_handle.php/" method="POST">
      <fieldset>
      <label>Username
        <input type="text" name="username" placeholder="Seu email -> prefixo@email.com" />
      </label>
      <label>Password
        <input type="password" name="password" placeholder="Your password here" />
      </label>
      </fieldset>
      <button type="submit">Login</button>
    </form>
    <?php
    session_start();
    if(isset($_SESSION["error"])){
      echo $_SESSION["error"];
      unset($_SESSION["error"]);
    }
    ?>
    </section>
  </body>
</html>