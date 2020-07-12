<?php
require_once __DIR__ . '/autoload.php';

$resolver = new ControllerNameResolver('Article\All', '/admin', '\\Controllers\\Admin');
$controllerClassName = $resolver();


if (!class_exists($controllerClassName)) {
    header('HTTP/1.0 404 Not Found');
    include __DIR__ . '/../App/templates/admin/404.tpl.php';
    exit();
}

$controller = new $controllerClassName();
$controller();

