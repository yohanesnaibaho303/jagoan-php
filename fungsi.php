<?php

// contoh 1
function luasSegitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

echo luasSegitiga(3, 4);

//contoh 2
function sum(...$input)
{
    $result = 0;
    foreach ($input as $value) {
        $result  += $value;
    }
    return $result;
}

echo "<br />" . sum(1, 2, 3, 4, 213123, 2313, 32);
