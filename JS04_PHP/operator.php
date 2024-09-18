<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
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

echo "<br>";

echo "Hasil Perbandingan $a == $b : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil Perbandingan $a != $b : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil Perbandingan $a < $b : " . ($hasilLebihkecil ? 'true' : 'false') . "<br>";
echo "Hasil Perbandingan $a > $b : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil Perbandingan $a <= $b : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil Perbandingan $a >= $b : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Hasil Logika AND ($a && $b) = " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil Logika OR ($a || $b) = " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil Logika NOTA (!$a) = " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil Logika NOTB (!$b) = " . ($hasilNotB ? 'true' : 'false') . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br>";
$a += $b; 
echo "Setelah $a += $b : $a = {$a} <br>";

$a -= $b; 
echo "Setelah $a -= $b : $a = {$a} <br>";

$a *= $b;
echo "Setelah $a *= $b : $a = {$a} <br>";

$a /= $b; 
echo "Setelah $a /= $b : $a = {$a} <br>";

$a %= $b; 
echo "Setelah $a %= $b : $a = {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil Identik ($a === $b) : " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Identik ($a !== $b) : " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>