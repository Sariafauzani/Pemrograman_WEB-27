<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowedExtensions = array("png", "jpeg", "jpg", "gif");
    $maxSize = 2 * 1024 * 1024; // Maksimal 2 MB per file
    $targetDirectory = "document/";
    $fileCount = count($_FILES['file']['name']);

    // Loop dengan for
    for ($i = 0; $i < $fileCount; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi tipe file dan ukuran
        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "File $file_name memiliki ekstensi tidak valid.";
        }

        if ($file_size > $maxSize) {
            $errors[] = "File $file_name melebihi ukuran maksimal 2 MB.";
        }

        // Jika tidak ada error, upload file
        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, $targetDirectory . $file_name)) {
                echo "File $file_name berhasil diunggah.<br>";
                // Menampilkan thumbnail gambar
                //echo "<img src='documents/{$file_name}' width='200' style='height: auto;' alt='Thumbnail'><br>";
            } else {
                $errors[] = "Gagal mengunggah file $file_name.";
            }
        }else {
            echo implode("<br>", $errors);
        }
    } 
}
?>