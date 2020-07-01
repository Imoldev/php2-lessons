<?php
require_once __DIR__ . '/../../Db.php';
require_once __DIR__ . '/../../App/Config.php';
require_once __DIR__ . '/../../Model.php';
require_once __DIR__ . '/../../Models/Author.php';

use Models\Author;

// ожидаем коллекцию Author
$data = Author::findAll();
echo '<pre>';
var_dump($data);
echo '</pre>';
