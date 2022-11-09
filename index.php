<?php
include "controller/SiteController.php";

$siteController = new SiteController();
$action = "index";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if (method_exists($siteController, $action)) {
    $siteController->$action();
} else {
    $siteController->index();;
}

?>
