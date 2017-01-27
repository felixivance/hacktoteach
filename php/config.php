<?php
    $localhost = "localhost";
    $username = "root";
    $password="";
    $database="hack_to_teach";

    $conn = mysqli_connect($localhost, $username, $password, $database) or die("Could not connect ".mysqli_connect_error());
?>