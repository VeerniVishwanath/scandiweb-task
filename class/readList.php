<?php
foreach (glob('class/addItem-sub-class/*.php') as $filename) {
    include_once $filename;
}
require_once('class/queries.php');

class ReadList extends Queries
{

    public function displayDetails($row)
    {
        $productClass = 'AddItem' . $row["ProductType"];
        $productClass::display($row);
    }

    public function readList()
    {
        $sql = "SELECT * FROM `products`";
        return self::queryDatabase("SELECT * FROM `products`");
    }
}
