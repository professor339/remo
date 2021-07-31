<?php      
    $host = "remotemysql.com:3306";  
    $user = "hX2eX5qsaQ";  
    $password = 'ACbNtylG60';  
    $db_name = "hX2eX5qsaQ";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  