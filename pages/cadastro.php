<?php
ob_start();
header("Content-Type: text/html; charset=utf-8");
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
// COMPONENTS
define("HEAD", $_SERVER['DOCUMENT_ROOT'].'/site-institucional/pages/fragments/head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=][, initial-scale=1.0">
      <title>Movies Cinema Salazar</title>
      <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
      <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="../assets/style.css" / >
  </head>
  <body>
  <?php
        require_once($_SERVER['DOCUMENT_ROOT']."/site-institucional/pages/fragments/header.php");
    ?>
    <section id="section-form" class="flex-column item-center">
      <h1 class="item-center">Cadastro</h1>
    <form action="/site-institucional/helpers/login_handle.php" method="POST" class="flex-column item-center">
    <label class="flex-column">Nome Completo
        <input type="text" name="nome" placeholder="Seu nome" />
      </label>
      <label class="flex-column">Email
        <input type="text" name="email" placeholder="Seu email -> prefixo@email.com" />
      </label>
      <label class="flex-column">Password
        <input type="password" name="password" placeholder="Your password here" />
      </label>
      <label class="flex-column">Email
        <input type="file" name="image" accept="image/*" />
      </label>
      <button type="submit">Cadastrar</button>
    </form>
    <p class="item-center">Já tem cadastro?<a href="login.php">Faça Login</a></p>
    </section>
  </body>
</html>