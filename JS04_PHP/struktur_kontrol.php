<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "<br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
$jumlahSkor = count($skorUjian);

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

$rataRata = $totalSkor / $jumlahSkor;

echo "<br>Total skor ujian adalah: $totalSkor";
echo "<br>Jumlah ujian: $jumlahSkor";
echo "<br>Rata-rata skor ujian: " . number_format($rataRata, 2);

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "<br>Daftar Nilai Siswa dan Status Kelulusan:<br><br>";

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

// Soal Cerita no 21
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$nilaiSiswa = array_slice($nilaiSiswa, 2, -2);

$totalNilai = array_sum($nilaiSiswa);

$jumlahNilai = count($nilaiSiswa);

$rataRata = $jumlahNilai > 0 ? $totalNilai / $jumlahNilai : 0;

echo "Daftar nilai setelah menghapus dua nilai tertinggi dan dua nilai terendah: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai yang digunakan: $totalNilai<br>";
echo "Rata-rata nilai setelah menghapus nilai tertinggi dan terendah: " . number_format($rataRata, 2) . "<br>";

// Soal Cerita no 23
$hargaAwal = 120000;
$diskonPersen = 20;

$diskon = ($hargaAwal * $diskonPersen) / 100;

$hargaSetelahDiskon = $hargaAwal - $diskon;

echo "Harga awal produk: Rp " . number_format($hargaAwal, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";

// Soal Cerita no 25
$poin = readline("Masukkan total poin pemain: ");

echo "Total skor pemain adalah: $poin\n";

if ($poin > 500) {
    echo "<br>Apakah pemain mendapatkan hadiah tambahan? YA\n";
} else {
    echo "<br>Apakah pemain mendapatkan hadiah tambahan? TIDAK\n";
}

?>