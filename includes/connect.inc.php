$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "xpertlabdb.mysql.database.azure.com", "dbadm", "dB@dm!n1243.", "blog", 3306, MYSQLI_CLIENT_SSL);
