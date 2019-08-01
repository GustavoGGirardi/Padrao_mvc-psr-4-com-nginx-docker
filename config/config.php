<?php
require "environment.php";
require 'vendor/autoload.php';
/*
spl_autoload_register(function($class) {
    if (file_exists('controllers/'.$class.'.php')) {
        require 'controllers/'.$class.'.php';

    } else if ((file_exists('models/'.$class.'.php'))) {
        require 'models/'.$class.'.php';

    } else if (file_exists('core/'.$class.'.php')) {
        require 'core/'.$class.'.php';
    }
}); 
*/

    $config = array();
    if (ENVIRONMENT == 'development') {
        define("BASE_URL", "http://localhost/");
        $config['dbname'] = "mvc_model";
        $config['dbhost'] = "mysql";
        $config['dbuser'] = "root";
        $config['dbpass'] = "root";
    } else {
        $config['dbname'] = "mvc_model";
        $config['host']   = "mysql";
        $config['dbuser'] = "root";
        $config['dbpass'] = "root";
    }

    global $db;
    try {
        $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['dbhost'], 
        $config['dbuser'], 
        $config['dbpass']);

    } catch(PDOException $e) {
        echo "erro: ".$e->getMessage();
    }