<?php
require_once("bootstrap.php");

if (!isUserLoggedIn()) {
    setFlashMessage("Please login to view your account details.");
    header("Location: login.php");
    exit();
}

$templateParams["title"] = "Crabstore - Account Details";
$templateParams["main-content"] = "template/account-details.php";
$templateParams["account-details"] = $dbh->getCustomerDetails($_SESSION[SessionKey::CUSTOMER_EMAIL]);
$templateParams["total-orders"] = $dbh->getTotalCustomerOrders($_SESSION[SessionKey::CUSTOMER_EMAIL]);

require_once("template/base.php");
?>