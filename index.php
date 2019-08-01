<?php
    session_start();
    require "config/config.php";

    use \Core\Core;
    
    $core = new Core();
    $core->run();
?>

