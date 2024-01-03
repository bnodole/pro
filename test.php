<?php
    require ('connection.php');
    session_start();
    $unam = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = "SELECT * FROM list WHERE username = '$unam'";
    // AND password = '$pass'
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['password'] == $pass){
        $_SESSION['uname'] = $unam;
        header("Location:index.php");
    }else{
        echo "<script>alert('Invalid username or password')</script>";
        // header("Location:login.php");
    }
?>