<?php
require_once "class/product.php";

class AddItemFurniture extends Product
{

    public $height;
    public $width;
    public $length;

    public function __construct(
        $arr
    ) {
        parent::__construct(...$arr);
        $this->height = $arr[4];
        $this->width = $arr[5];
        $this->length = $arr[6];
    }

    public function addItem()
    {
        $sql = "INSERT INTO `products` (`sku`, `name`, `price`, `height`,`width`,`length`,`ProductType`) VALUES ('$this->sku', '$this->name', '$this->price', '$this->height' ,'$this->width' ,'$this->length', '$this->productType')";
        self::queryDatabase($sql);
    }

    // This shall be called when adding to database
    static function display($row)
    {
        echo 'Dimension: ' . $row['height'] . 'x' . $row["width"] . 'x' . $row["length"];
    }

    // This shall be called when displaying on product Page
    static function extras($posts)
    {
        return [$posts['height'], $posts['width'], $posts['length']];
    }
}
