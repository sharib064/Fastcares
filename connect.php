<?php 

    $hname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "hospital";

    $conn = mysqli_connect($hname,$uname,$pass,$db);

    if(!$conn)
    {
        echo "CONNECTION ERROR";
        die();
    }
?>