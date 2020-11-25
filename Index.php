<?php
session_start();

define('WEBROOT', str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Index.php", "", $_SERVER["SCRIPT_FILENAME"]));
//require(ROOT . 'Config/core.php');
//require(ROOT . 'Router.php');
//require(ROOT . 'Request.php');
require(ROOT . 'Dispatcher.php');
$dispatch = new Dispatcher();
$dispatch->dispatch();
?>