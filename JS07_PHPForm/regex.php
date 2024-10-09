<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.'; 

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "<br>Tidak ada huruf kecil!";
}

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = '<br>I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: "I like banana pie.

$pattern = '/go*d/';
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}

$text = 'god is good.';
// Menentukan pola untuk mencocokkan kata "good"
$pattern = '/go?d/'; 

if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}

$text = 'god is good.';
// Menentukan pola untuk mencocokkan kata "good"
$pattern = '/g[o]{1,2}d/'; 

if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}
?>