<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>
<body>
<h1>Berlatih Function PHP</h1>

<?php
echo "<h3>Soal No 1 Greetings</h3>";

function greetings($name) {
    echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
}

// Test function
greetings("Bagas");
greetings("Wahyu");
greetings("nama peserta");

echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($str) {
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

// Test function
echo reverseString("nama peserta") . "<br>";
echo reverseString("Garuda Cyber Institute") . "<br>";
echo reverseString("We Are GC-Ins Developer") . "<br>";

echo "<h3>Soal No 3 Palindrome</h3>";

function palindrome($str) {
    $reversed = reverseString($str);
    return $reversed === $str ? "true" : "false";
}

// Test function
echo palindrome("civic") . "<br>"; // true
echo palindrome("nababan") . "<br>"; // true
echo palindrome("jambaban") . "<br>"; // false
echo palindrome("racecar") . "<br>"; // true

echo "<h3>Soal No 4 Tentukan Nilai</h3>";

function tentukan_nilai($number) {
    if ($number >= 85 && $number <= 100) {
        return "Sangat Baik<br>";
    } elseif ($number >= 70 && $number < 85) {
        return "Baik<br>";
    } elseif ($number >= 60 && $number < 70) {
        return "Cukup<br>";
    } else {
        return "Kurang<br>";
    }
}

// Test function
echo tentukan_nilai(98); // Sangat Baik
echo tentukan_nilai(76); // Baik
echo tentukan_nilai(67); // Cukup
echo tentukan_nilai(43); // Kurang
?>

</body>
</html>

