<?php
require_once("config/database.php");

abstract class Product
{
    public $sku;
    public $name;
    public $price;
    public $productType;


    public function __construct($sku, $name, $price, $productType)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->productType = $productType;
    }

    abstract function addItem();

    protected function queryDatabase($sql)
    {
        global $conn;
        $conn->query($sql);
    }
}
