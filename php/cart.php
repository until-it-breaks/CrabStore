<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore - Cart";
$templateParams["main-content"] = "customer-cart.php";
$email="jane.smith@example.com";
if (isset($_GET["email"])) {
    $email = $_GET["email"];
}
$cartProducts = $dbh->getCartProductsOfCustomer($email);

foreach ($cartProducts as &$product) {
    $productId = $product['productId'];
    $product['image'] = $dbh->getProductImages($productId);
}

$templateParams["products-cart"] = $cartProducts;

require_once("template/base.php");
?>