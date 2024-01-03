<?php
    require ('connection.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        $unam = $_POST['username'];
        $pass = $_POST['password'];
        
        $sql = "SELECT * FROM list WHERE username = '$unam' AND password = '$pass'";      
        $result = mysqli_query($conn,$sql);
        $check = mysqli_fetch_array($result);
        
        if (!isset($check)){
            echo "<script>alert('Invalid usernae or passwomrd')</script>";
        }
        else{
            $_SESSION['uname'] = $unam;
            header("Location:index.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
</body>
</html>