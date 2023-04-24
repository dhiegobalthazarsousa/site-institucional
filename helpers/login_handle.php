<?php

function getUserData(){
    return file_get_contents('./data/login_data.txt');
}

function getUserNameData(){
    $user_data = explode(";", getUserData());
    $username_data = explode("=", $user_data[0])[1];
    return $username_data;
}

function getPasswordData(){
    $user_data = explode(";", getUserData());
    $password_data = explode("=", $user_data[1])[1];    //$password_data = explode("=", $user_data[1]);
    return $password_data;
    //return $password_data[1];
}

function matches($post){
    $username_input = $post['username'];
    $password_input = $post['password'];
    $username_data = getUserNameData();
    $password_data = getPasswordData();
    return $username_data === $username_input && $password_data === $password_input;
}
if(matches($_POST)){
    $username_data = getUserNameData();
    session_start();
    $_SESSION["username"] = $username_data;
    $_SESSION["isLogged"] = true;
    header("Location: http://localhost/site-institucional/pages/home.php");exit;
} else {
    session_start();
    $_SESSION["error"] = "Login Inválido!";
    header("Location: http://localhost/site-institucional/");exit;
}
