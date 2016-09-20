<?php
	// Configuration file for starter kit

	// Set level of PHP error reporting
	error_reporting(E_ALL);

	// Create connections to Database
	// require_once "/path/to/file/db-connection.php";

	// Set the time zone for PHP
	// date_default_timezone_set('America/Phoenix');

	// Define links
	defined("HOME") or define("HOME", "https://10.13.1.51/starter-kit/");
	defined("CSS") or define("CSS", HOME . "assets/css/main.css");
	defined("JS") or define("JS", HOME . "assets/js/functions.js");

	//	Folder paths
	// realpath(dirname(__FILE__)) => gets path to this specific file
	defined("LIB_PATH") or define("LIB_PATH", realpath(dirname(__FILE__) . '/assets/lib'));
    defined("HEADER") or define("HEADER", realpath(dirname(__FILE__) . '/assets/templates/header.php'));
	defined("FOOTER") or define("FOOTER", realpath(dirname(__FILE__) . '/assets/templates/footer.php'));
?>
