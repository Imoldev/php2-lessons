<?php

$actionName = $_REQUEST['action'] ?? 'index';
$id = $_REQUEST['id'] ?? null;

$action = __DIR__ . '/actions/action_' . $actionName . '.php';

if (!file_exists($action)) {
    $action =  __DIR__ . '/actions/action_404.php';
}
include $action;