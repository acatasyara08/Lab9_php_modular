# LAB 9 — PHP Modular
Tasyah Ramadani
312510223
I251B
## Deskripsi
Project ini merupakan hasil praktikum Pemrograman Web tentang pengembangan aplikasi menggunakan konsep PHP Modular. Aplikasi dibuat dengan memisahkan kode berdasarkan fungsi dan direktori agar lebih terstruktur, mudah dikelola, dan dikembangkan.

Project ini menggunakan PHP dan MySQL dengan sistem routing untuk mengakses halaman melalui satu file utama, yaitu `index.php`.

## Tujuan Praktikum
1. Memahami konsep pemrograman PHP modular.
2. Memisahkan kode program berdasarkan fungsi dan kegunaannya.
3. Menggunakan file konfigurasi database secara terpusat.
4. Menerapkan sistem routing untuk mengakses halaman.
5. Membuat fungsi bantuan (helper).
6. Mengembangkan fitur CRUD (Create, Read, Update, Delete).
7. Menerapkan template halaman bersama.
8. Menggunakan `.htaccess` untuk URL Rewrite.

## Teknologi yang Digunakan
- PHP
- MySQL
- HTML
- CSS
- Apache
- XAMPP
- Visual Studio Code

## Struktur Folder

```text
lab9_php_modular/
│
├── config/
│   └── database.php
│
├── helpers/
│   └── functions.php
│
├── modules/
│   ├── user/
│   │   ├── list.php
│   │   ├── add.php
│   │   └── edit.php
│   │
│   └── barang/
│       ├── list.php
│       ├── add.php
│       ├── edit.php
│       └── delete.php
│
├── views/
│   ├── header.php
│   ├── footer.php
│   ├── dashboard.php
│   ├── profil.php
│   ├── kontak.php
│   ├── 404.php
│   ├── login.php
│   └── logout.php
│
├── index.php
└── .htaccess
```

## Fitur Aplikasi

### 1. Routing
Menggunakan file `index.php` sebagai router utama untuk mengatur akses ke setiap halaman berdasarkan URL.

### 2. Helper Functions
Menggunakan file `helpers/functions.php` untuk menyimpan fungsi bantuan, seperti:
- `formatRupiah()` untuk format mata uang.
- `hitungDiskon()` untuk menghitung harga setelah diskon.
- `validasiEmail()` untuk validasi email.
- `ringkasTeks()` untuk membatasi panjang teks.
- `setFlash()` dan `tampilFlash()` untuk menampilkan notifikasi.

### 3. Database Configuration
