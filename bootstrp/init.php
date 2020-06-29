<?php


if(!isset($_SESSION))session_start();
define("APP_ROOT",realpath(__DIR__ . "/../")); 
define("URL_ROOT","http://localhost/E-Commerce/public/");
require_once(APP_ROOT . "/vendor/autoload.php");
require_once("../app/config/_env.php");
require_once("../app/routing/route.php");
