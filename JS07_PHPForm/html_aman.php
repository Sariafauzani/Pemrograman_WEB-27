<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Input Aman</h2>
    <form action="html_aman.php" method="post">
        <label for="input">Masukkan data :</label><br>
        <input type="text" id="input" name="input"><br><br>
        <label for="email">Masukkan email :</label><br>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];

        // Sanitasi input untuk mencegah XSS
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Validasi sederhana: pastikan input tidak kosong
        if (!empty($input)) {
            echo "<p>Data yang dimasukkan: " . $input . "</p>";
        } else {
            echo "<p>Input tidak boleh kosong!</p>";
        }

        $email = $_POST['email'];

        // Validasi email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email yang dimasukkan: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            echo "<p>Email tidak valid!</p>";
        }
    }
    ?>
</body>
</html>