<?php
require('class/product.php');

class DeleteItem extends Product
{
    public $skuArray;

    public function __construct($skuArray)
    {
        $this->skuArray = $skuArray;
    }


    public function deleteItem()
    {
        foreach ($this->skuArray as $sku) {
            $sql = 'DELETE FROM `products` WHERE `products`.`sku` = "' . $sku . '"';
            self::queryDatabase($sql);
        }
    }

    function addItem()
    {
        // Ignore This
    }
}
