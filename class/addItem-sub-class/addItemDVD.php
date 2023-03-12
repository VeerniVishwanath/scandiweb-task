<?php
require_once 'class/product.php';

class AddItemDVD extends Product
{

    public $size;

    public function __construct($arr)
    {
        parent::__construct(...$arr);
        $this->size = $arr[4];
    }

    public function addItem()
    {
        $sql = "INSERT INTO `products` (`sku`, `name`, `price`, `size`, `ProductType`) VALUES ('$this->sku', '$this->name', '$this->price', '$this->size', '$this->productType')";
        self::queryDatabase($sql);
    }

    // This shall be called when adding to database
    static function display($row)
    {
        echo 'Size: ' . $row['size'] . 'MB';
    }

    // This shall be called when displaying on product Page
    static function extras($posts)
    {
        return [$posts["size"]];
    }
}
