<?php

require_once __DIR__ . '/../vendor/autoload.php';


use App\controllers\ProductController;


$controller = new ProductController();
$controller->index();
