<?php?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> Balai Besar Veteriner Farma (Pusvetma) - Kementerian Pertanian</title>
    <link rel="icon" type="image/png" href="assets/images/logo pusvetma.png">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Poppins & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">

</head>
<body class="antialiased">

   <?php include 'partial/header.html'; ?>

    <main>
        <!-- ===== HERO SECTION ===== -->
        <section class="relative gradient-primary text-white section-padding overflow-hidden shadow-lg">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="assets\images\Hero section.png" alt="Hero Background" class="w-full h-full object-cover opacity-20">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-secondary/80"></div>
            </div>
            
            <div class="container mx-auto container-padding relative z-10">
                <div class="text-center space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                        Layanan <span class="text-accent">BBVF Pusvetma</span>
                    </h1>
                    <p class="text-lg md:text-xl text-white-90 leading-relaxed max-w-3xl mx-auto">
                        Informasi lengkap tentang layanan dan aplikasi penunjang yang disediakan oleh Balai Besar Veteriner Farma Pusvetma
                    </p>
                </div>
            </div>
        </section>

        <!-- ===== INFORMASI LENGKAP SECTION ===== -->
        <section id="layanan" class="bg-surface section-padding">
            <div class="container mx-auto container-padding">
                <div class="text-center space-y-6 mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary">Informasi Lengkap BBVF Pusvetma</h2>
                    <p class="text-dark text-lg max-w-3xl mx-auto leading-relaxed">
                        Berbagai informasi dan layanan yang disediakan untuk mendukung kesehatan hewan dan ketahanan pangan nasional.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Informasi 1 -->
                    <a href="homepage.php" class="card overflow-hidden group block transition-all hover:shadow-large focus:ring-2 focus:ring-accent">
                        <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                            <img src="Gambar/Hero section.png" alt="Informasi 1" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="info" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-3">Tentang Kami</h3>
                            <p class="text-dark leading-relaxed text-sm">Website Profil Balai Besar Veteriner Farma Pusvetma</p>
                        </div>
                    </a>
                    
                    <!-- Informasi 2 -->
                    <div class="card overflow-hidden group">
                        <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                            <img src="Gambar/Hero section.png" alt="Informasi 2" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="users" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-3">Layanan</h3>
                            <p class="text-dark leading-relaxed text-sm">Layanan yang disediakan oleh Balai Besar Veteriner Farma Pusvetma</p>
                        </div>
                    </div>
                    
                    <!-- Informasi 3 -->
                    <div class="card overflow-hidden group">
                        <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                            <img src="Gambar/Hero section.png" alt="Informasi 3" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="building" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-3">Informasi</h3>
                            <p class="text-dark leading-relaxed text-sm">Informasi yang disediakan oleh Balai Besar Veteriner Farma Pusvetma</p>
                        </div>
                    </div>
                    
                    <!-- Informasi 4 -->
                    <div class="card overflow-hidden group">
                        <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                            <img src="Gambar/Hero section.png" alt="Informasi 4" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="award" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-3">Publikasi</h3>
                            <p class="text-dark leading-relaxed text-sm">Berita, Foto, dan Video Dokumentasi Kegiatan BBVF Pusvetma</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== APLIKASI PENUNJANG SECTION ===== -->
        <section class="bg-surface-light section-padding">
            <div class="container mx-auto container-padding">
                <div class="text-center space-y-6 mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary">Aplikasi Penunjang</h2>
                    <p class="text-dark text-lg max-w-3xl mx-auto leading-relaxed">
                        Aplikasi dengan memanfaatkan teknologi informasi untuk menunjang kinerja BBVF Pusvetma.
                    </p>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
                    <!-- 30 aplikasi utama (5 kolom x 6 baris) -->
                    <?php
                    $apps = [
                        ["DASIKU", "database", "Dashboard Sistem Informasi Kinerja Utama"],
                        ["VETMALANCE", "clipboard-list", "Penjualan Online Produk Pusvetma"],
                        ["SIMANTUL", "shopping-cart", "Sistem Manajemen Kepuasan Pelanggan"],
                        ["i-PROVET", "calendar-check", "Informasi Produk Pusvetma"],
                        ["PORTAL PPID KEMNTAN", "users", "Aplikasi pengelolaan sumber daya manusia dan administrasi kepegawaian."],
                        ["SURVEI IKM", "dollar-sign", "Survey untuk mengukur kualitas layanan Pusvetma"],
                        ["E-PERSONAL", "warehouse", "Aplikasi untuk mencatat setiap aktivitas kegiatan kedinasan"],
                        ["E-PERJADIN", "shield", "Aplikasi untuk menyampaikan laporan perjalanan dinas"],
                        ["SIM ASN", "monitor", "Sistem Informasi Manajemen Aparatur Sipil Negara"],
                        ["SIASN BADAN KEPEGAWAIAN NEGARA", "file-text", ""],
                        ["PERPUSTAKAAN", "bar-chart", "Katalog Online Perpustakaan BBVF Pusvetma"],
                        ["SRIKANDI", "message-circle", "Sistem Informasi Kearsipan Dinamis Terintegrasi"],
                        ["SIDADI", "settings", "Sistem Informasi Data Digital"],
                        ["SIPPN", "bell", "Sistem Informasi Pelayanan Publik Nasional"],
                        ["LAPOR!", "map-pin", "Layanan Aspirasi dan Pengaduan Online Rakyat"],
                        ["Kaldu Emas", "smartphone", "Kanal Pengaduan elektronik Bagi Masyarakat"],
                        ["WBS", "globe", "Whistleblower's System untuk melaporkan indikasi tipikor"],
                        ["DU-LINE", "mail", "Pengaduan Online Layanan Pusat Veteriner Farma"],
                        ["SIGAP", "video", "Sistem Informasi Gratifikasi Pertanian"],
                        ["Si-RUP", "book-open", ""],
                        ["LPSE KEMENTAN", "help-circle", "layanan Pengadaaan Secara Eletronik Kementrian Pertanian"],
                        ["VISTMA", "search", "Visitasi Tamu Pusvetma."],
                        ["e-PMZI", "lock", "Eviden Digital PMZI"],
                        ["WEBSEVICE BLU PUSVETMA", "refresh-cw", ""],
                        ["STOCK ON YOU", "activity", "Stock Online yang Unggul"],
                        ["CEKCOA", "alert-triangle", ""],
                        ["REPOSITORI PUBLIKASI KEMENTERIAN PERTANIAN", "calendar", ""],
                        ["iSIKHNAS", "file-check", "Sistem Informasi Kesehatan Hewan Indonesia yang Mutakhir"],
                        ["IVLAB", "truck", "Indonesian Veteriner Labs Information System"],
                        ["Agenda Surat", "thermometer", ""],
                    ];
                    foreach ($apps as $app) {
                        ?>
                        <div class="card overflow-hidden group aspect-square flex flex-col">
                            <div class="relative flex-1 flex items-center justify-center bg-gradient-to-br from-primary to-secondary">
                                <img src="Gambar/Hero section.png" alt="<?= htmlspecialchars($app[0]) ?>" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300"/>
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                                <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center z-10">
                                    <i data-lucide="<?= htmlspecialchars($app[1]) ?>" class="w-6 h-6 text-white"></i>
                                </div>
                            </div>
                            <div class="p-4 flex flex-col justify-center items-center flex-none">
                                <h3 class="text-base font-bold text-primary mb-2 text-center"><?= htmlspecialchars($app[0]) ?></h3>
                                <p class="text-dark leading-relaxed text-xs text-center"><?= htmlspecialchars($app[2]) ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <!-- 2 aplikasi tambahan di bawah -->
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8 max-w-2xl mx-auto">
                    <div class="card overflow-hidden group aspect-square flex flex-col">
                        <div class="relative flex-1 flex items-center justify-center bg-gradient-to-br from-primary to-secondary">
                            <img src="Gambar/Hero section.png" alt="Internal Link & Direktori" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center z-10">
                                <i data-lucide="zap" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col justify-center items-center flex-none">
                            <h3 class="text-base font-bold text-primary mb-2 text-center">Internal Link & Direktori</h3>
                            <p class="text-dark leading-relaxed text-xs text-center"></p>
                        </div>
                    </div>
                    <div class="card overflow-hidden group aspect-square flex flex-col">
                        <div class="relative flex-1 flex items-center justify-center bg-gradient-to-br from-primary to-secondary">
                            <img src="Gambar/Hero section.png" alt="External Link" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center z-10">
                                <i data-lucide="wifi" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col justify-center items-center flex-none">
                            <h3 class="text-base font-bold text-primary mb-2 text-center">External Link</h3>
                            <p class="text-dark leading-relaxed text-xs text-center"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA SECTION ===== -->
        <section class="gradient-primary text-white section-padding">
            <div class="container mx-auto container-padding">
                <div class="text-center space-y-8">
                    <h2 class="text-3xl md:text-4xl font-bold">Butuh Bantuan?</h2>
                    <p class="text-white-90 text-lg max-w-2xl mx-auto">
                        Tim kami siap membantu Anda mendapatkan informasi lengkap tentang layanan dan aplikasi BBVF Pusvetma.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="btn-accent">
                            Hubungi Kami
                        </button>
                        <button class="bg-white/10 hover:bg-white/20 text-white px-6 py-3 rounded-12px font-medium transition-all">
                            Lihat Dokumentasi
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

<!-- Footer -->
<?php include 'partial/footer.html'; ?>
<!-- Script JS -->
<script src="assets/main.js"></script>
</body>
</html>
