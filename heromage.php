<?php

// $heroMage = [
//     "Zhask",
//     "Kadita",
//     "Valir",
//     "Vale"
// ];

// var_dump($heroMage[0]);

$heroMage = [
    "name" => ["Zhask", "Kadita"],
    "tipe" => ["Offlaner", "Burst"],
    "damage" => [87, 102]
];

// var_dump($heroMage);
// echo $heroMage["tipe"][0];

// iterasi
// foreach ($heroMage as $key => $value) {
//     echo $value[0];
//     echo "<br>";
// }

// iterasi bertingkat
foreach ($heroMage as $key => $value) {
    foreach ($value as $val) {
        echo $val;
        echo "<br>";
    }
    echo "<br>";
}
