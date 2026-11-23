
<?php

function formatRupiah(float $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function e(string $nilai): string {
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}

function konversiCelciusKeFahrenheit($c) {
    return ($c * 9/5) + 32;
}

function tentukanStatusNilai($nilai) {
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } else {
        return "D";
    }
}

function hitungTotal($harga, $jumlah) {
    return $harga * $jumlah;
}
