<?php
    session_start();
        $unam = $_POST['username'];
        $pass = $_POST['password'];
        $_SESSION['password'] = $pass;
        $_SESSION['username'] = $unam;
    echo $_SESSION['username'];
    echo $unam;
    echo "haha";
?>