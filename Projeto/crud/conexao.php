<?php
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $db_name = "deezefy";

    $connect = mysqli_connect($servername,$username,$password,$db_name);
    mysqli_set_charset($connect,"utf8");

    if(mysqli_connect_error()):
        echo "Erro na conexão: ".mysqli_connect_error();
    endif;
?>