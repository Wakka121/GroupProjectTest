<?php
    session_start();

    if(empty($_POST) or empty($_POST["username"]) or empty($_POST["password"])) {
        session_unset();
        session_destroy();
        header("location: login.php");
        exit();
    }

    require_once "accounts.php";

    function login($username, $password) {
        global $accounts;
        if(!isset($accounts[$username])) {
            return (false);
        }
        return($password==$accounts[$username]);
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