<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ql_mypham_lacome";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn) {
        mysqli_query($conn, "SET NAMES 'utf8'");
   
    } else {
        echo 'Kết nối thất bại';    
    }

    

   
?>