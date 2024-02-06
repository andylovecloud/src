<?php
define('productTable', 'products');

$servername = "php24-db-1"; //should be shell.hamk.fi
$username = "crud_app";
$password = "123456";
$dbname = "crud_app";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>
