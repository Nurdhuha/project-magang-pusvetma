<?php
// 1. Sertakan file koneksi database kita
require_once 'assets/config.php';
require_once 'partial/header.html'; // atau include 'partial/header.html'

// 2. Siapkan dan jalankan query untuk mengambil data 'sejarah'
$slug = 'sejarah'; // Pengenal untuk halaman yang ingin kita ambil
$stmt = $pdo->prepare("SELECT * FROM pages WHERE slug = ?");
$stmt->execute([$slug]);

// 3. Ambil datanya
$page = $stmt->fetch(PDO::FETCH_ASSOC);

// Jika halaman tidak ditemukan, tampilkan pesan
if (!$page) {
    die("Halaman tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Balai Besar Veteriner Farma (Pusvetma) - Kementerian Pertanian</title>
    <link rel="icon" type="image/png" href="assets\images\logo pusvetma.png">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Poppins & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="antialiased">



<main>
        <!-- ===== HERO SECTION ===== -->
        <section class="relative gradient-secondary text-white section-padding overflow-hidden shadow-lg">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="assets\images\Hero section.png" alt="Hero Background" class="w-full h-full object-cover opacity-20">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/80"></div>
            </div>
            
            <div class="container mx-auto container-padding relative z-10">
                <div class="text-left space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-white">
                        Sejarah <span class="text-white">BBVF Pusvetma</span>
                    </h1>
                </div>
            </div>
        </section>
        <section id="sejarah" class="bg-surface section-padding">
            <div class="container mx-auto container-padding">
                <div class="text-center space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold">Sejarah Singkat</h2>
                    <p class="text-lg md:text-xl text-gray-700 text-justify">
                        Institusi ini  pada mulanya bernama Balai Penyelidikan Penyakit Mulut dan Kuku (BPPMK ) yang rencana didirikan pada tahun 1952  bertempat di Jakarta, akan tetapi berbagai kesulitan dan pertimbangan yang dialami pada waktu itu maka BPPMK didirikan di Wonocolo Surabaya berdasar kepada surat keputusan Menteri Pertanian Tanggal 12 September 1952 No. 92/Um/52. BPPMK ini mempunyai tugas utama memproduksi Vaksin Penyakit Mulut dan Kuku (PMK) untuk keperluan Indonesia dan Asia Tenggara.  Selain itu BPPMK dijadikan sebagai Regional Refference Laboratory untuk penelitian dan diagnostik PMK di Asia Tenggara.
                        Nama BPPMK mengalami perubahan nama pada tahun 1955 menjadi Lembaga Penyidikan Penyakit Mulut dan Kuku (LPPMK). Pada tanggal 24 Juni 1959 kemudian berubah lagi menjadi Lembaga Penyakit Mulut Kuku yang diresmikan oleh Menteri Pertanian Mr. Sadjarwo dengan didampingi Direktur LPMK Dr. FK. Waworoentoe.
                        Pada tanggal 10 April 1967 Lembaga ini berubah nama lagi menjadi Lembaga Virologi Kehewanan (LVK) yang diresmikan oleh Menteri Pertanian Kabinet Ampera Major Djenderal TNI Sutjipto SH dengan didampingi  Direktur Lembaga Prof. Dr. R. Tanjung Adiwinata. Lembaga ini bertugas tidak hanya menangani Penyakit virus PMK tetapi juga menangani penyakit-penyakit hewan lainnya seperti New Castle Disease (Tetelo) dan Rabies (Anjing Gila).
                        Pada tanggal 22 September 1978  LVK berubah menjadi Pusat Veterinaria Farma (PUSVETMA) berdasarkan  SK. 
                    </p>
                </div>
            </div>
        </section>

</main>

<?php include 'partial/footer.html'; ?>
<script src="assets/main.js"></script>
</body>


