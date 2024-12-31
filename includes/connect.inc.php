
<?php

$host       = "xpertlabdb.mysql.database.azure.com";
$username   = "pdbadm";
$password   = "Asdf123456789";
$db_name     = "blog";
$sslcert    = "./DigiCertGlobalRootCA.crt.pem";

  $conn = mysqli_init();
        mysqli_ssl_set($conn,NULL,NULL,$sslcert,NULL,NULL);
        if(!mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL)){
                die('Failed to connect to MySQL: '.mysqli_connect_error());

        }

        ?>
