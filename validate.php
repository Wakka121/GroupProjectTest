<?php
    session_start();

    if(!isset($_POST) or !isset($_POST["username"]) or !isset($_POST["password"])) {
        session_unset();
        session_destroy();
        header("location: test.php");
        exit();
    }

    require_once "accounts.php";

    function login($username, $password) {
        global $accounts;
        if(!isset($accounts[$username])) {
            return(false);
        } else {
            return($password==$acounts[$username]);
        }
    }

    $username=$_POST["username"];
    $password=$_POST["password"];

    if(login($username,$password)) {
        $_SESSION["username"]=$username;
        header("location: home.php");
        exit();
    }

    session_unset();
    session_destroy();
    header("location: login.php");
?>