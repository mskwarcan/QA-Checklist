<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require 'classes/app.php';
$app = new App;
var_dump($app->config->appName);
$app->getProjects();

?>