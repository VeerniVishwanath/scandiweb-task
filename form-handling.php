<?php
require 'class/add-Item.php';
require 'class/addItem-sub-class/addItemDVD.php';
require 'class/addItem-sub-class/addItemFurniture.php';
require 'class/addItem-sub-class/addItemBook.php';
session_start();

if (isset($_POST)) {
    $obj = new AddItem();

    $productType = $_POST["productType"];
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];

    if ($productType == 'DVD')
        $obj->handleAddItem(new AddItemDVD($sku, $name, $price, $_POST["size"], $productType));
    elseif ($productType == 'Book')
        $obj->handleAddItem(new AddItemBook($sku, $name, $price, $_POST["weight"], $productType));
    elseif ($productType == 'Furniture')
        $obj->handleAddItem(new AddItemfurniture($sku, $name, $price, $_POST["height"], $_POST["width"], $_POST["length"], $productType));

    sleep(5);
    //change Location to '/' in production
    header('Location: /scandiweb-task/') . die();
}
