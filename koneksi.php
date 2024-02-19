<?php 
    $con = mysqli_connect("172.17.0.3", "root", "alba", "toko_online");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>