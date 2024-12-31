<?php
    $servername = 'xpertlabdb.mysql.database.azure.com';
    $username = 'dbadm';
    $password = 'dB@dm!n1243.';
    $dbname = 'blog';

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if(!$con){
        header("Location: ../index.php?ERROR=connection_error");
        exit();
    }
