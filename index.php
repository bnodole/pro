<?php
    session_start(); 
    require('connection.php');
    $inadd="login.php";
    $out="logout.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
    <ul type="none">
        <li style="float:left;"><a href="#">PROJECT</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="float:right;">
        <?php
            if(isset($_SESSION['uname'])){
                echo '<a href="'.$out.'">Logout</a>';
            }
        ?></li>
        <li style="float:right;">
        <?php
            if(isset($_SESSION['uname'])){
                echo $_SESSION['uname'];
            }else{
                echo '<a href="'.$inadd.'">Login/Regisster</a>';
            }
        ?></li>
        <li style="float:right;"><a href="#">Book Now!</a></li>
    </ul>
    </nav>
</body>
</html>