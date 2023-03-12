<?php
require('class/queries.php');

abstract class Product extends Queries
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

    abstract static function display($row);

    abstract static function extras($posts);
}
