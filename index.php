<?php
require_once '/var/www/starter-kit/config.php';
require_once LIB_PATH . "/functions.php";
require_once HEADER;
?>

<h1>Home Page</h1>
<p>
    Main content of page!!!
    <?php testPhpFunction('Hello'); ?>
</p>

<?php
require_once FOOTER;
?>
