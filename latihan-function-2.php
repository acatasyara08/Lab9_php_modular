
<?php
require_once __DIR__ . '/helpers.php';

echo "<h2>Latihan Function 2</h2>";

$total = hitungTotal(15000, 3);
echo "Total Belanja: " . formatRupiah($total);
?>
