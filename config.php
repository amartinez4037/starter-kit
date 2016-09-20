<?php
	// Configuration file for starter kit

	// Set level of PHP error reporting
	error_reporting(E_ALL);

	// Create connections to Database
	// require_once "/path/to/file/db-connection.php";

	// Set the time zone for PHP
	// date_default_timezone_set('America/Phoenix');

	// Define home page
	defined("HOME") or define("HOME", "http://sonerd.com/");

	//	Folder paths
	// realpath(dirname(__FILE__)) => gets path to this specific file
	defined("LIB_PATH") or define("LIB_PATH", realpath(dirname(__FILE__) . '/assets/lib'));
    defined("HEADER") or define("HEADER", realpath(dirname(__FILE__) . '/assets/templates/header.php'));
	defined("FOOTER") or define("FOOTER", realpath(dirname(__FILE__) . '/assets/templates/footer.php'));
	defined("CSS") or define("CSS", realpath(dirname(__FILE__) . '/assets/css/main.css'));
?>
