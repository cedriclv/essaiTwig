<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
$products1 = ['guitare', 'bass', 'bonjo', 'piano', 'lyre', 'harpe'];
$products = 'toto';

echo $twig->render('products.html.twig', ['products' => $products1]);
