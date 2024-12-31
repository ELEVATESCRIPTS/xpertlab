
<?php

$host       = "xpertlabdb.mysql.database.azure.com";
$username   = "pdbadm";
$password   = "Asdf123456789";
$db_name     = "blog";
$sslcert    = "./DigiCertGlobalRootCA.crt.pem";
$conn = new mysqli($host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

        ?>
