<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset='UTF-8' />
    	<meta name='description' content='Starter Kit for a new application' />
    	<meta name='author' content='Aron Martinez' />
    	<meta name='viewport' content='width=device-width, initial-scale=1' />
        <title>Starter Kit</title>

        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel='stylesheet' type='text/css' href='<?php echo CSS; ?>' />

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script type='text/javascript' src='<?php echo JS_PATH . "/functions.js"; ?>'></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>


    <body>
    	<header>
            <nav class='navbar navbar-inverse'>
                <div class='container-fluid'>
                    <div class='navbar-header'>
                        <button type="button" class='navbar-toggle' data-toggle='collapse' data-target='#mainNavBar'>
                            <span class='icon-bar'></span> <span class='icon-bar'></span> <span class='icon-bar'></span>
                        </button>

                        <a href="/" class="navbar-brand"> Starter-Kit </a>
                    </div>

                    <div class='collapse navbar-collapse' id='mainNavBar'>
                        <ul class='nav navbar-nav navbar-right'>
                            <li><a href="<?php echo HOME; ?>">Home</a></li>
                            <li><a href="<?php echo HOME . 'about.php'; ?>">About</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
