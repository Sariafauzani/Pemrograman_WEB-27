<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "document/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if(!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Ekstensi file gambar yang diperbolehkan
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxFileSize = 5 * 1024 * 1024; // Maksimal ukuran file 5MB

if($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;

        // Pengecekan ekstensi file dan ukuran file
        if (in_array($fileExtension, $allowedExtensions) && $fileSize <= $maxFileSize) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName tidak diizinkan atau melebihi batas ukuran yang diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
