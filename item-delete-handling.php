<?php
include('class/delete-Item.php');

session_start();

if (isset($_POST["delete-checkbox"])) {
    $obj = new DeleteItem($_POST["delete-checkbox"]);
    $obj->deleteItem();
    // sleep(2);
    header("Location: /scandiweb-task/") . die();
} else {
    // sleep(2);
    header("Location: /scandiweb-task/") . die();
}
