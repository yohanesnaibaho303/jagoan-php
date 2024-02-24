<?php

$namaHero = "Zhask";
$level = 1;

$skill = $level <= 4 ? $namaHero . " Ulti Siap" : $namaHero . " Ulti Belum Siap";
echo $skill;

// switch ($level) {
//     case 2:
//         echo $namaHero . " sudah memiliki ulti, hanya skil 1";
//         break;
//     case 3:
//         echo $namaHero . " sudah memiliki ulti, hanya skil 2";
//         break;
//     case 4:
//         echo $namaHero . " sudah memiliki ulti";
//         break;

//     default:
//         echo $namaHero . " tidak main";
//         break;
// }

// if ($level < 4) {
//     echo $namaHero . " belum memiliki ulti";
// } else if ($level >= 4) {
//     echo $namaHero . " sudah memiliki ulti";
// } else {
//     echo $namaHero . " tidak ditemukan";
// }
