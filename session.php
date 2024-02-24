<?php

session_start();

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];


if (isset($_SESSION["username"]) and isset($_SESSION["password"])) {
    $namaUser = $_POST["username"];
    echo "Selamat datang kembali " . $namaUser . " !!";
    echo "<a href='/logout.php'>Log Out</a>";
} else {
    echo "anda belum login";
}
