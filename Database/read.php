<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "latihan-php-01";

$connection = new mysqli($hostname, $user, $pass, $databaseName) or die("Gagal terkoneksi ke database");

$sql = "SELECT `id`, `nama_hero`, `tipe_hero`, `damage` FROM `latihan-php-01`.`table_hero_mage` WHERE  `id`=1";

$query = $connection->query($sql);

if ($query->num_rows != 0) {
    //iterasi data
    while ($row = $query->fetch_assoc()) {
        // var_dump($row);
        echo $row["nama_hero"];
    }
    var_dump($query);
} else {
    var_dump($query);
}
