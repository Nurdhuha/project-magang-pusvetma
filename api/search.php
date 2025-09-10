<?php
// Mengatur header agar outputnya adalah JSON
header('Content-Type: application/json');

// Sertakan file koneksi database Anda
// PERBAIKAN: Path diubah dari 'assets/config.php' menjadi '../assets/config.php'
require_once '../assets/config.php';

// Untuk sekarang, kita ambil data 'sejarah' secara spesifik
$slug_to_find = 'sejarah';

try {
    $stmt = $pdo->prepare("SELECT title, content FROM pages WHERE slug = ?");
    $stmt->execute([$slug_to_find]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Jika data ditemukan, kembalikan sebagai JSON
        echo json_encode($result);
    } else {
        // Jika tidak ditemukan, kembalikan pesan error
        echo json_encode(['error' => 'Data tidak ditemukan.']);
    }

} catch (PDOException $e) {
    // Jika ada error database, kembalikan pesan error
    // Menambahkan pesan error dari PDO untuk debugging yang lebih mudah
    echo json_encode(['error' => 'Query database gagal: ' . $e->getMessage()]);
}
?>
