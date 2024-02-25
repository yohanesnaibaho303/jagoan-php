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
$sql = "UPDATE `latihan-php-01`.`table_hero_mage` SET `damage` = 190 WHERE `id` = 1";

// eksekusi SQL string update ke database
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
