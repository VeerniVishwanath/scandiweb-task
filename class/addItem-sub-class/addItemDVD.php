<?php
require_once 'class/product.php';

class AddItemDVD extends Product
{

    public $size;

    public function __construct($sku, $name, $price, $size, $productType)
    {
        parent::__construct($sku, $name, $price, $productType);
        $this->size = $size;
    }

    public function addItem()
    {

        $sql = "INSERT INTO `products` (`sku`, `name`, `price`, `size`, `ProductType`) VALUES ('$this->sku', '$this->name', '$this->price', '$this->size', '$this->productType')";
        self::queryDatabase($sql);
    }
}
