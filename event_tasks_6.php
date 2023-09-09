<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Matriks A
$matrixA = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks B
$matrixB = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Inisialisasi matriks hasil penjumlahan
$resultMatrix = array();

// Penjumlahan matriks A dan B
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $resultMatrix[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
    }
}

// Menampilkan matriks hasil penjumlahan
echo "Matriks A:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrixA[$i][$j] . " ";
    }
    echo "\n";
}

echo "Matriks B:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrixB[$i][$j] . " ";
    }
    echo "\n";
}

echo "Hasil Penjumlahan Matriks:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $resultMatrix[$i][$j] . " ";
    }
    echo "\n";
}
?>

</body>
</html>