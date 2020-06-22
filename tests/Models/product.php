<?php
require_once __DIR__ . '/../../Db.php';
require_once __DIR__ . '/../../Model.php';
require_once __DIR__ . '/../../Models/Product.php';
require_once __DIR__ . '/../../App/Config.php';

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

// ожидаем вставку в таблицу продукта
$testProduct = new Product();
$testProduct->title = 'тестовый продукт';
$testProduct->price = 77777;
$testProduct->save();

echo '<pre>';
var_dump($testProduct);
echo '</pre>';


$testProduct->title = 'тестовый продукт mod';
$testProduct->price = 88888;
$testProduct->save();

echo '<pre>';
var_dump($testProduct);
echo '</pre>';

$prodDel = Product::findById(8);
var_dump($prodDel);
$prodDel->delete();