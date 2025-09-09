<?php
// File: config.php

// --- Pengaturan Database ---
$db_host = 'localhost'; // Biasanya 'localhost'
$db_name = 'pusvetma_db'; // Nama database yang kita buat
$db_user = 'root';      // Username database Anda (default XAMPP biasanya 'root')
$db_pass = '';          // Password database Anda (default XAMPP biasanya kosong)

// --- Membuat Koneksi (Jangan diubah) ---
try {
    // Membuat objek PDO baru untuk koneksi
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    
    // Mengatur mode error agar menampilkan exception jika terjadi masalah
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Jika koneksi gagal, hentikan skrip dan tampilkan pesan error
    die("Koneksi ke database gagal: " . $e->getMessage());
}
?>