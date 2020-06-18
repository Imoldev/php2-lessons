<?php
require_once __DIR__ . '/../../Db.php';
require_once __DIR__ . '/../../Model.php';
require_once __DIR__ . '/../../Models/Product.php';

use Models\Product;

$data = Product::findAll();
var_dump($data);

$data = Product::findById(1);
var_dump($data);

$data = Product::findById(111111);
var_dump($data);