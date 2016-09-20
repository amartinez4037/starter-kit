<?php

// Configuration file for connecting to a MySQL Database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PW", "password");

// Define table or tables if using more than one
define("DB_1", "db_1");
define("DB_2", "db_2");

// Connect to database
// Procedurual method
$db_conn_1 = mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_1) or die("DB1 connection failed: " . mysqli_error($db_conn_1));
if(mysqli_connect_errno($db_conn_1)) {
    trigger_error('DB1 connection failed: ' . mysqli_error($db_conn_1), E_USER_ERROR);
}
// OOP method
$db_conn_2 = new mysqli(DB_HOST, DB_USER, DB_PW, DB_2);
if($db_conn_2->connect_error) {
    trigger_error('DB2 connection failed: ' . $db_conn_2->connect_error, E_USER_ERROR);
}

// Define tables if desired
define("TBL_1", "tbl_1");
define("TBL_2", "tbl_2");

?>
