<?php
require_once "class/product.php";

class AddItemFurniture extends Product
{

    public $height;
    public $width;
    public $length;

    public function __construct(
        $sku,
        $name,
        $price,
        $height,
        $width,
        $length,
        $productType
    ) {
        parent::__construct($sku, $name, $price, $productType);
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function addItem()
    {

        $sql = "INSERT INTO `products` (`sku`, `name`, `price`, `height`,`width`,`length`,`ProductType`) VALUES ('$this->sku', '$this->name', '$this->price', '$this->height' ,'$this->width' ,'$this->length', '$this->productType')";
        self::queryDatabase($sql);
    }
}
