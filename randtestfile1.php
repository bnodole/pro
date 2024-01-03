<?php
    // session_start();
    // $unam=$pass=NULL;
    // if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //     $GLOBALS['$unam'] = $_POST['username'];
    //     $GLOBALS['$pass'] = $_POST['password'];
    // }
    // $_SESSION['password'] = $pass;
    // $_SESSION['username'] = $unam;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="randfiletest2.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>