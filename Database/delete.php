<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "latihan-php-01";

$connection = new mysqli($hostname, $user, $pass, $databaseName);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// membuat sql string ke database
$sql = "DELETE FROM `latihan-php-01`.`table_hero_mage` WHERE id = 7";

// eksekusi SQL string insert ke database
if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
