<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a = $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan ($a + $b) = $hasilTambah <br>";
echo "Hasil Pengurangan ($a - $b) = $hasilKurang <br>";
echo "Hasil Perkalian ($a * $b) = $hasilKali <br>";
echo "Hasil Pembagian ($a / $b) = $hasilBagi <br>";
echo "Sisa Bagi ($a % $b) = $sisaBagi <br>";
echo "Hasil Pangkat ($a ** $b) = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihkecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;