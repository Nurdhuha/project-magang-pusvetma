<?php
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

    <!-- ===== HEADER ===== -->
    <?php include 'partial/header.html'; ?>

    <main>
                <!-- ===== HERO SECTION ===== -->
        <section class="relative gradient-primary text-white section-padding overflow-hidden">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="assets\images\Hero section.png" alt="Hero Background" class="w-full h-full object-cover opacity-20">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-secondary/80"></div>
            </div>
            
            <div class="container mx-auto container-padding relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Konten Kiri: Judul, deskripsi, tombol -->
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                                Selamat Datang di <span class="text-accent">Pusvetma</span>
                            </h1>
                            <p class="text-lg md:text-xl text-white-90 leading-relaxed max-w-2xl">
                                Unit Pelaksana Teknis Direktorat Jenderal Peternakan dan Kesehatan Hewan yang berdedikasi untuk kesehatan hewan dan ketahanan pangan nasional.
                            </p>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="layanan.php" class="btn-accent flex items-center justify-center">
                                Jelajahi Layanan
                            </a>
                            <a href="https://youtu.be/FptDYZEV7wo?si=hPtCwVo7Y008bLi_" class="bg-white/10 hover:bg-white/20 text-white text-center px-6 py-3 rounded-12px font-medium transition-all">
                                Video Profil
                            </a>
                        </div>
                    </div>
                    <!-- Konten Kanan: Berita -->
                    <div class="card p-8 bg-white/10 backdrop-blur-sm border border-white/20">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-accent rounded-full"></div>
                                <span class="text-accent font-semibold text-sm">BERITA TERKINI</span>
                            </div>
                            <h3 class="text-xl font-bold">Hasil Kolaborasi Kementan!</h3>
                            <p class="text-white-90">Kementan Luncurkan Tes Cepat Penyakit Kucing dan Anjing di Rumah untuk Meningkatkan Aksesibilitas Layanan Kesehatan Hewan.</p>
                            <button class="text-accent hover:text-white transition-all font-medium">
                                Baca Selengkapnya →
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== LAYANAN SECTION ===== -->
        <section id="layanan" class="bg-surface section-padding">
            <div class="container mx-auto container-padding">
            <div class="text-center space-y-6 mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary">Layanan Unggulan Kami</h2>
            <p class="text-dark text-lg max-w-3xl mx-auto leading-relaxed">
            BBVF Pusvetma sebagai Satuan Kerja Badan Layanan Umum memberikan layanan terbaik kepada masyarakat dengan standar kualitas tertinggi.
            </p>
            </div>
            
            <!-- Semua layanan dalam satu grid: 3 kolom di desktop -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Layanan 1 -->
                <div class="card overflow-hidden group">
                <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                    <img src="assets\images\Hero section.png" alt="Layanan Penjualan Produk" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <i data-lucide="flask-conical" class="w-6 h-6 text-white"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-3">Surveilans Penyakit Mulut dan Kuku</h3>
                    <p class="text-dark leading-relaxed text-sm">Layanan surveilans PMK bertujuan untuk mendeteksi secara dini dan memantau penyebaran penyakit mulut dan kuku pada hewan ternak. BBVF Pusvetma melakukan pengawasan dan pelaporan kasus PMK untuk mendukung pengendalian penyakit di Indonesia.</p>
                </div>
                </div>
                
                <!-- Layanan 2 -->
                <div class="card overflow-hidden group">
                <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                    <img src="assets\images\Hero section.png" alt="Layanan Pengujian Mutu Produk" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <i data-lucide="syringe" class="w-6 h-6 text-white"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-3">Penjualan Produk</h3>
                    <p class="text-dark leading-relaxed text-sm">BBVF Pusvetma menyediakan berbagai produk veteriner berkualitas, seperti vaksin dan bahan diagnostik, untuk mendukung kesehatan hewan di Indonesia.</p>
                </div>
                </div>
                
                <!-- Layanan 3 -->
                <div class="card overflow-hidden group">
                <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                    <img src="assets\images\Hero section.png" alt="Layanan Penunjang" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <i data-lucide="shield-check" class="w-6 h-6 text-white"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-3">Pengujian Veteriner Farma</h3>
                    <p class="text-dark leading-relaxed text-sm">Layanan pengujian veteriner farma meliputi pemeriksaan mutu dan keamanan produk veteriner untuk memastikan standar kualitas yang tinggi. BBVF Pusvetma siap mendukung kebutuhan pengujian laboratorium bagi produk dan bahan biologik veteriner.</p>
                </div>
                </div>
                
                <!-- Layanan 4 -->
                <div class="card overflow-hidden group">
                <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                    <img src="assets\images\Hero section.png" alt="Surveilans PMK" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <i data-lucide="graduation-cap" class="w-6 h-6 text-white"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-3">Pembinaan dan Bimbingan Teknis</h3>
                    <p class="text-dark leading-relaxed text-sm">Layanan pembinaan dan bimbingan teknis untuk mendukung peningkatan pengetahuan dan keterampilan di bidang kesehatan hewan.</p>
                </div>
                </div>
                
                <!-- Layanan 5 -->
                <div class="card overflow-hidden group">
                <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                    <img src="assets\images\Hero section.png" alt="Kontrol Mutu" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                    <i data-lucide="microscope" class="w-6 h-6 text-white"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-3">Layanan Pendukung</h3>
                    <p class="text-dark leading-relaxed text-sm">Layanan pendukung kami meliputi konsultasi teknis, pelatihan, serta bantuan administrasi untuk mendukung kelancaran operasional dan kebutuhan pelanggan. Kami siap membantu memastikan proses berjalan efisien dan optimal.</p>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- ===== VISI SECTION ===== -->
        <section id="visi-pusvetma" class="bg-surface-light section-padding">
            <div class="container mx-auto container-padding">
                <div class="max-w-4xl mx-auto text-center space-y-8">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary visi-animate opacity-0 translate-y-8 transition-all duration-700">Visi BBVF Pusvetma</h2>
                    <div class="card p-12 bg-white visi-animate opacity-0 translate-y-8 transition-all duration-700 delay-150">
                        <blockquote class="text-xl md:text-2xl font-medium leading-relaxed italic gradient-text">
                            "Menjadi Produsen vaksin dan bahan biologik veteriner yang berdaya saing global, proaktif mencegah terjadinya penyuapan dan menjamin keselamatan dan kesehatan pegawai"
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <script>
        // Animasi sederhana: fade in dan slide up saat masuk viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top < window.innerHeight - 100 // 100px before fully in view
            );
        }

        function animateVisiSection() {
            const visiSection = document.getElementById('visi-pusvetma');
            if (!visiSection) return;
            const animatables = visiSection.querySelectorAll('.visi-animate');
            if (isInViewport(visiSection)) {
                animatables.forEach((el, idx) => {
                    el.classList.remove('opacity-0', 'translate-y-8');
                    el.classList.add('opacity-100', 'translate-y-0');
                });
                window.removeEventListener('scroll', animateVisiSection);
            }
        }

        window.addEventListener('scroll', animateVisiSection);
        window.addEventListener('DOMContentLoaded', animateVisiSection);
        </script>

       
        <section id="produk" class="bg-surface section-padding">
            <div class="container mx-auto container-padding">
                <div class="text-center space-y-6 mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary">Produk Unggulan</h2>
                    <p class="text-dark text-lg max-w-3xl mx-auto leading-relaxed">
                        Produk-produk berkualitas tinggi yang telah memenuhi standar nasional dan internasional untuk kesehatan hewan.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Produk 1 -->
                    <div class="card overflow-hidden group">
                        <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                            <img src="assets\images\Hero section.png" alt="Produk Vaksin" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="package" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-3">Vaksin</h3>
                            <p class="text-dark text-sm leading-relaxed">Produk vaksin berkualitas untuk berbagai jenis hewan dengan standar keamanan tertinggi.</p>
                        </div>
                    </div>
                    
                    <!-- Produk 2 -->
                    <div class="card overflow-hidden group">
                        <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                            <img src="assets\images\Hero section.png" alt="Produk Antigen" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="test-tube" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-3">Antigen</h3>
                            <p class="text-dark text-sm leading-relaxed">Antigen berkualitas tinggi untuk deteksi penyakit hewan secara cepat dan akurat, mendukung kesehatan ternak Anda.</p>
                        </div>
                    </div>
                    
                    <!-- Produk 3 -->
                    <div class="card overflow-hidden group">
                        <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                            <img src="assets\images\Hero section.png" alt="Produk Antisera" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="pills" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-3">Antisera</h3>
                            <p class="text-dark text-sm leading-relaxed">Lindungi kesehatan ternak Anda dengan Antisera kami, solusi efektif dan terpercaya untuk pencegahan serta penanganan penyakit hewan.</p>
                        </div>
                    </div>
                    
                    <!-- Produk 4 -->
                    <div class="card overflow-hidden group">
                        <div class="relative h-48 bg-gradient-to-br from-primary to-secondary">
                            <img src="assets\images\Hero section.png" alt="Produk Kit Elisa" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                <i data-lucide="microscope" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-3">Kit Elisa</h3>
                            <p class="text-dark text-sm leading-relaxed">Dapatkan hasil deteksi penyakit hewan yang cepat dan akurat dengan Kit Elisa kami, solusi andal untuk laboratorium modern.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== STATISTIK SECTION ===== -->
        <section class="gradient-primary text-white section-padding">
            <div class="container mx-auto container-padding">
                <div class="grid md:grid-cols-4 gap-8 text-center">
                    <div class="space-y-2">
                        <div class="text-3xl md:text-4xl font-bold text-accent">50+</div>
                        <div class="text-white-90">Tahun Pengalaman</div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-3xl md:text-4xl font-bold text-accent">1000+</div>
                        <div class="text-white-90">Produk Tersertifikasi</div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-3xl md:text-4xl font-bold text-accent">34</div>
                        <div class="text-white-90">Provinsi Terlayani</div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-3xl md:text-4xl font-bold text-accent">99%</div>
                        <div class="text-white-90">Tingkat Kepuasan</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ===== FOOTER ===== -->
    <?php include 'partial/footer.html'; ?>

    <!-- Custom JS -->
    <script src="assets/main.js"></script>
</body>
</html>



