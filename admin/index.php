<?php

$actionName = $_REQUEST['action'] ?? 'index';
$id = $_REQUEST['id'] ?? null;

$action = __DIR__ . '/actions/action_' . $actionName . '.php';

if (!file_exists($action)) {
    header("HTTP/1.0 404 Not Found");
    include __DIR__ . '/templates/404.tpl.php';
    exit();
}
include $action;