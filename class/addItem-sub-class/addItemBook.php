<?php
require_once "class/product.php";

class AddItemBook extends Product
{

    public $weight;

    public function __construct($arr)
    {
        parent::__construct(...$arr);
        $this->weight = $arr[4];
    }

    public function addItem()
    {
        $sql = "INSERT INTO `products` (`sku`, `name`, `price`, `weight`, `ProductType`) VALUES ('$this->sku', '$this->name', '$this->price', '$this->weight', '$this->productType')";
        self::queryDatabase($sql);
    }

    // This shall be called when adding to database
    static function extras($posts)
    {
        return [$posts['weight']];
    }

    // This shall be called when displaying on product Page
    static function display($row)
    {
        echo 'Weight: ' . $row['weight'] . 'KG';
    }
}
