<?php
require_once('config/database.php');

class ReadList
{
    public function readList()
    {
        global $conn;
        return $conn->query("SELECT * FROM `products`");
    }
}
