<?php
// 1. Sertakan file koneksi database kita
require_once 'assets/config.php';
// atau include 'partial/header.html'
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
<body class="antialiased">
    <?php include 'partial/header.html'; ?>




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
                    <h2 class="text-3xl md:text-4xl font-bold"><?php echo htmlspecialchars($page['title']); ?></h2>
                    <p class="text-lg md:text-xl text-gray-700 text-justify">
                    <?php echo nl2br(htmlspecialchars($page['content'])); ?>
                    </p>
                </div>
            </div>
        </section>

</main>

<?php include 'partial/footer.html'; ?>
<script src="assets/main.js"></script>
</body>


