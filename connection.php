<?php
    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
        echo "Error connection" . mysqli_connect_error();
    }
?>