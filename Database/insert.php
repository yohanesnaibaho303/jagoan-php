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

//membuat sql string untuk insert new data ke table database
$sql = "INSERT INTO `latihan-php-01`.`table_hero_mage`(`nama_hero`, `tipe_hero`, `damage`) 
VALUES
('Hellcurt', 'Push', 280),
('Karrie', 'MM', 180),
('Layla', 'MM', 90)";

// eksekusi SQL string insert ke database
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
