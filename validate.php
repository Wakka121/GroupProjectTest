<?php
if (isset($_POST["username"]) and isset($_POST["password"]) {   //Checks if username and password have been passed from login.php
    $username = $_POST["username"];                             //Sets $username variable to the username passed from login.php
    $password = $_POST["password"];                             //Sets $password variable to the password passed from login.php
} else {
    header("location: login.php");                              //Else it kicks the user back to login.php
}

function validateLogin($username, $password) {
    
}
?>