<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
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
    <section class="nav-header">
    <?php
        require_once($_SERVER['DOCUMENT_ROOT']."/site-institucional/pages/fragments/header.php");
    ?>
    </section>
    <h2>Sugestões</h2>
    <form class="flex-column" action=".helpers/sugestao_handle.php">
        <label for="" class="label flex-column">
            Nome:
        <input type="text" name="name" />
        </label>
        <label class="label flex-column">Sugestão
        <textarea name="sugestao" rows="5" cols="33">Insira seu texto aqui</textarea>
        </label>
        <button type="submit">Enviar Sugestão</button>
    </form>
</body>
</html>