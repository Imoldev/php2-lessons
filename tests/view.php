<?php
require_once __DIR__ . '/../PropsAccessControlTrait.php';
require_once __DIR__ . '/../View.php';

$view = new View();

$view->test1 = 'datum1';
$view->test2 = 'datum2';
$view->test3 = 'datum3';

var_dump(count($view));

foreach ($view as $item=>$value) {
    echo $item . ': ' . $value;
    echo '<br>';
}
