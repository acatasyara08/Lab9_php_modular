
<?php
require_once __DIR__ . '/helpers.php';

echo "<h2>Latihan Function 1</h2>";

$suhu = konversiCelciusKeFahrenheit(30);
echo "30 Celcius = " . $suhu . " Fahrenheit";
echo "<br><br>";

$nilai = tentukanStatusNilai(90);
echo "Nilai 90 mendapatkan predikat: " . $nilai;
?>
