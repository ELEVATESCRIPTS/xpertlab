<<<<<<< HEAD

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
=======
<?php


$host       = getenv('xpertlabdb.mysql.database.azure.com');
$username   = getenv('pdbadm');
$password   = getenv('Asdf123456789');
$db_name     = getenv('blog');
$sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";
>>>>>>> parent of 0e9c1dc (Update connect.inc.php)
