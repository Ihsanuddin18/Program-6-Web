<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo $punakawan[0]; //Hasilnya Semar
echo "<br>";

<?php
$punakawan = array("Semar", "Gareng", "Petruk", "Bagong");
echo $punakawan[0]; // Hasilnya Semar
echo "<br>";        // Baris baru
echo $punakawan[3]; // Hasilnya Bagong

$punakawan[1] = "Semar";
$punakawan[2] = "Gareng";
$punakawan[3] = "Petruk";
$punakawan[4] = "Bagong"; // Perbaiki tanda kutip di sini

echo "<br>";        // Baris baru
echo $punakawan[3]; // Hasilnya Petruk
?>

</head>
<body>
</body>
</html>