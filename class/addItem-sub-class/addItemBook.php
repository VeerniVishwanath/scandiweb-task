<?php
require_once "class/product.php";

class AddItemBook extends Product
{

    public $weight;

    public function __construct($sku, $name, $price, $weight, $productType)
    {
        parent::__construct($sku, $name, $price, $productType);
        $this->weight = $weight;
    }

    public function addItem()
    {

        $sql = "INSERT INTO `products` (`sku`, `name`, `price`, `weight`, `ProductType`) VALUES ('$this->sku', '$this->name', '$this->price', '$this->weight', '$this->productType')";
        self::queryDatabase($sql);
    }
}
