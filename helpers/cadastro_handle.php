<?php
require_once('functions.php');
if(isset($_POST["username"]) && isset($_POST["password"])){
    if(matches($_POST["username"], $_POST["password"])){
        $username_data = getUserNameData();
        session_start();
        $_SESSION["username"] = $username_data;
        $_SESSION["isLogged"] = true;
        header("Location: http://localhost/site-institucional/");exit;
    } else {
        session_start();
        $_SESSION["error"] = "Login Inválido!";
        header("Location: http://localhost/site-institucional/pages/login.php");exit;
    }
}