<?php

// For
for ($i = 0; $i < 5; $i++) {
    echo "Ini Angka Ke-" . $i + 1 . "\n";
}

// While
$i = 0;
while ($i <= 5) {
    echo "Ini Angka Ke-" . $i + 1 . "\n";
    $i++;
}

// Inputan user
$nama = readline("Masukan Nama : ");
echo "Hallo " . $nama;
