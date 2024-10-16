<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = array("png", "jpeg", "jpg", "gif");
    $maxSize = 2 * 1024 * 1024; // Max 2MB
    $targetDirectory = "uploads/";

    $fileCount = count($_FILES['files']['name']);

    for ($i = 0; $i < $fileCount; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "Ekstensi $file_name tidak diizinkan.";
        }

        if ($file_size > $maxSize) {
            $errors[] = "Ukuran $file_name tidak boleh lebih dari 2 MB.<br>";
        }

        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, $targetDirectory . $file_name)) {
                echo "<img src='uploads/{$file_name}' width='200' style='height: auto' alt='Thumbnail'><br>";
                echo "File $file_name berhasil diunggah.";
            } else {
                $errors[] = "Gagal mengunggah file $file_name.";
            }
        } else {
            echo implode("<br>", $errors);
        }
    }
}
?>