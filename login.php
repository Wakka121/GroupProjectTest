<?php
    session_start();
    if(isset($_SESSION["username"])) {
        header("location: home.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="validate.php" method="post">
    <div class="container">
        <h2>Welcome to TextBookExchange!</h2>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        <input type="checkbox" checked="checked"> Keep me logged in
    </div>

    <div class="container">
        <button type="button" class="cancelbutton">Cancel</button><br>
        <span>Have you forgotten your <a href="#">password?</a></span>
    </div>
</form>

</body>
</html>