<?php
require_once __DIR__ . '/../../Db.php';
require_once __DIR__ . '/../../Model.php';
require_once __DIR__ . '/../../Models/Product.php';

use Models\Product;

$data = Product::findAll();
// ожидаем коллекцию Product
echo '<pre>';
var_dump($data);
echo '</pre>';

// ожидаем Product
$data = Product::findById(1);
echo '<pre>';
var_dump($data);
echo '</pre>';

// ожидаем false
$data = Product::findById(111111);
echo '<pre>';
var_dump($data);
echo '</pre>';