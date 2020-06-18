<?php

use Models\Product;
use Models\User;

spl_autoload_register(function ($class) {
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});





