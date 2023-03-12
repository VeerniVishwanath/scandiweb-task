<?php

class AddItem
{
    public function validateType($posts)
    {
        $productTypeClass = 'AddItem' . $posts["productType"];

        $commons = [$posts["sku"], $posts["name"], $posts["price"], $posts['productType']];

        $extraSelected = $productTypeClass::extras($posts);

        $params =  array_merge($commons, $extraSelected);

        self::handleAddItem(new $productTypeClass($params));
    }


    private function handleAddItem(Product $obj)
    {
        $obj->addItem();
    }
}
