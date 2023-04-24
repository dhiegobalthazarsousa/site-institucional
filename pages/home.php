<?php
session_start();
if(!isset($_SESSION["isLogged"])){
    header("Location: http://localhost/site-institucional/");exit;
}
echo var_dump($_SERVER['SCRIPT_URI'].dirname(dirname($_SERVER["REQUEST_URI"])));
?>
<?php header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/site-institucional/pages/fragments/imports.php")?>
    <title>Document</title>
</head>
<body>
    <?php
        require_once($_SERVER["SERVER_NAME"]."/site-institucional/pages/fragments/header.php");
    ?>
    <p>Home</p>
</body>
</html>