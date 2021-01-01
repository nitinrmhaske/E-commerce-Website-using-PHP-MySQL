<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="ecom";

    $conn = mysqli_connect($server,$username,$password,$db);
    //mysqli_select_db($conn,$db);

    if(!$conn)
    {
        die("connection to this database failed");
    }
    
?>
