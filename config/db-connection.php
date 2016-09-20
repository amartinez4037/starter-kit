<?php

// Configuration file for connecting to a MySQL Database
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PW", "password");
define("DB_DRIVER", "mysql");

// Define table or tables if using more than one
define("DB_DB1", "db_1");
define("DB_DB2", "db_2");
define("DB_DB3", "db_3");

// Connect to database
// Procedurual method
$db_conn_1 = mysqli_connect(DB_SERVER, DB_USER, DB_PW, DB_DB1) or die("DB1 connection failed: " . mysqli_error($db_conn_1));
if(mysqli_connect_errno($db_conn_1)) {
    trigger_error('DB1 connection failed: ' . mysqli_error($db_conn_1), E_USER_ERROR);
}
// OOP method
$db_conn_2 = new mysqli(DB_SERVER, DB_USER, DB_PW, DB_DB2);
if($db_conn_2->connect_error) {
    trigger_error('DB2 connection failed: ' . $db_conn_2->connect_error, E_USER_ERROR);
}
// PDO
try {
    $db = new PDO(DB_DRIVER . ":dbname=" . DB_DB3 . ";host=" . DB_SERVER, DB_USER, DB_PW);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMDE_EXCEPTION);

} catch(PDOException $e) {
    trigger_error('Error: ' . $e->getMessage(), E_USER_ERROR);
}

// Define tables if desired
define("TBL_1", "tbl_1");
define("TBL_2", "tbl_2");

?>
