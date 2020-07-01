<?php
require __DIR__ . '/autoload.php';

$view = new View();

header("HTTP/1.0 404 Not Found");
$view->display(__DIR__ . '/../templates/404.tpl.php');
