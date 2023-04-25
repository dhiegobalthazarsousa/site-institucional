<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
function getLoginData(){
    return file_get_contents('./data/login_data.txt');
}

function getUserNameData(){
    $user_data = explode(";", getLoginData());
    $username_data = explode("=", $user_data[0])[1];
    return $username_data;
}

function getPasswordData(){
    $user_data = explode(";", getLoginData());
    $password_data = explode("=", $user_data[1])[1];    //$password_data = explode("=", $user_data[1]);
    return $password_data;
}

function matches($username_input, $password_input){
    $username_data = getUserNameData();
    $password_data = getPasswordData();
    return $username_data === $username_input && $password_data === $password_input;
}