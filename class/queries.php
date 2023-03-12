<?php
require_once("config/database.php");


abstract class Queries
{
    protected function queryDatabase($sql)
    {
        global $conn;
        return $conn->query($sql);
    }
}
