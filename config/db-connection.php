<?php

// Configuration file for connecting to a MySQL Database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PW", "password");

// Define table or tables if using more than one
define("DB_1", "db_1");
define("DB_2", "db_2");

// Connect to database
$db_conn_1 = mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_1) or die("Error DB1: " . mysqli_error($db_conn_1));
$db_conn_2 = mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_2) or die("Error DB2: " . mysqli_error($db_conn_2));

// Define tables if desired
define("TBL_1", "tbl_1");
define("TBL_2", "tbl_2");

?>
