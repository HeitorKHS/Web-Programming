<?php
    require 'Cart.php';
    require 'Product.php';  
    session_start();

    $products = [
        1 => ['id' => 1, 'name' => 'geladeira', 'price' => 1000, 'qtd' => 1],
        2 => ['id' => 2, 'name' => 'mouse', 'price' => 2000, 'qtd' => 1],
        3 => ['id' => 3, 'name' => 'teclado', 'price' => 100, 'qtd' => 1],
        4 => ['id' => 4, 'name' => 'monitor', 'price' => 50, 'qtd' => 1],
    ];

    if(isset($_GET['id'])){
        $id = strip_tags($_GET['id']);
        $productInfo = $products[$id];
        $product = new Product;
        $product->setId($productInfo['id']);
        $product->setName($productInfo['name']);
        $product->setPrice($productInfo['price']);
        $product->setQtd($productInfo['qtd']);

        $cart = new Cart;
        $cart->add($product);
    }

    var_dump($_SESSION['cart'] ?? []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
    <a href="myCart.php">Go to cart </a>
    <ul>
        <li>Geladeira <a href="?id=1">Add</a> $1000 </li>
        <li>Mouse <a href="?id=2">Add</a> $2000 </li>
        <li>Teclado <a href="?id=3">Add</a> $100 </li>
        <li>Monitor <a href="?id=4">Add</a> $50 </li>
    </ul>
</body>
</html>