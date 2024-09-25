<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
        $count = count($Listdosen); // Menghitung jumlah elemen dalam array

        // Menggunakan loop for untuk menampilkan elemen array
        for ($i = 0; $i < $count; $i++) {
            echo $Listdosen[$i] . "<br>";
        }
        ?>
    </body>
</html>