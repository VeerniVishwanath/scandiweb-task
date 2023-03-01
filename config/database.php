<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'user');
define('DB_PASSWORD', '123123');
define('DB_NAME', 'scandiweb');

$conn = new mysqli(DB_HOST,  DB_USER,  DB_PASSWORD,  DB_NAME);

if ($conn->connect_error) {
    echo 'Connection Failed' .  $conn->connect_error;
}
