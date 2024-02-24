<?php

// if (isset($_GET["nama"])) {
//     $namaHero = $_GET["nama"];
//     echo "Nama hero saya: " . $namaHero;
// }

if (isset($_POST["nama"])) {
    $namaHero = $_POST["nama"];
    echo "Nama hero saya: " . $namaHero;
}


?>

<form action="data.php" method="POST">
    Nama hero: <input type="text" name="nama" />
    <input type="submit" />

</form>