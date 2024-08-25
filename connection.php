<?php 

    $servername = "localhost";
    $username = "bargajeg_vishwas";
    $password = "vishwas726";
    $dbname = "bargajeg_info";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   
    

    ?>