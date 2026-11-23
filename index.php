<?php
session_start();

require_once __DIR__ . '/helpers/functions.php';

// Mengambil nama halaman dari URL
$page = $_GET['page'] ?? 'dashboard';

// Daftar rute yang diizinkan
$routes = [
    'dashboard' => __DIR__ . '/views/dashboard.php',
    'profil' => __DIR__ . '/views/profil.php',
    'kontak' => __DIR__ . '/views/kontak.php',
    // Login
    'login' => __DIR__ . '/views/login.php',
    // Logout
    'logout' => __DIR__ . '/views/logout.php',

    // CRUD Pengguna
    'user/list' => __DIR__ . '/modules/user/list.php',
    'user/add' => __DIR__ . '/modules/user/add.php',
    'user/edit' => __DIR__ . '/modules/user/edit.php',

    // CRUD Barang
    'barang/list' => __DIR__ . '/modules/barang/list.php',
    'barang/add' => __DIR__ . '/modules/barang/add.php',
    'barang/edit' => __DIR__ . '/modules/barang/edit.php',
    'barang/delete' => __DIR__ . '/modules/barang/delete.php',
];

// Halaman yang hanya bisa diakses setelah login
$halaman_protected = [
    'barang/list',
    'barang/add',
    'barang/edit',
    'barang/delete'
];

// Periksa status login
if (in_array($page, $halaman_protected) && !isset($_SESSION['login'])) {
    setFlash("Silakan login terlebih dahulu!", "error");
    header("Location: index.php?page=login");
    exit;
}

// Menjalankan halaman melalui router
ob_start();

if (isset($routes[$page])) {
    http_response_code(200);
    require $routes[$page];
} else {
    http_response_code(404);
    require __DIR__ . '/views/404.php';
}

$content = ob_get_clean();

// Menggunakan template bersama
require_once __DIR__ . '/views/header.php';

tampilFlash();

echo $content;

require_once __DIR__ . '/views/footer.php';
?>
