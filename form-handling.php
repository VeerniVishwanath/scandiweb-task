<?php
require 'class/add-Item.php';
require 'class/addItem-sub-class/addItemDVD.php';
require 'class/addItem-sub-class/addItemFurniture.php';
require 'class/addItem-sub-class/addItemBook.php';
session_start();

if (isset($_POST)) {
    $obj = new AddItem();
    $obj->validateType($_POST);

    //change Location to '/' in production
    header('Location: /scandiweb-task/') . die();
}
