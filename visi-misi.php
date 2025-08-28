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
        <section class="relative gradient-secondary text-white section-padding overflow-hidden shadow-lg">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="assets\images\Hero section.png" alt="Hero Background" class="w-full h-full object-cover opacity-20">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/80"></div>
            </div>
            
            <div class="container mx-auto container-padding relative z-10">
                <div class="text-center space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-primary">
                        Visi Misi <span class="text-primary">BBVF Pusvetma</span>
                    </h1>
                </div>
            </div>
        </section>
        <section id="visi-misi" class="bg-surface section-padding">
            <div class="container mx-auto container-padding">
                <div class="text-center space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold">Visi</h2>
                    <p class="text-lg md:text-xl text-gray-700 text-justify">
                        Menjadi produsen obat hewan yang berdaya saing gloal dan secar proaktif mencgah terjadinya penyuapan serta menjamin keselmatan dan kesehatan kerja
                    </p>
                </div>
            </div>
            <br>
            <div class="container mx-auto container-padding">
                <div class="text-center space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold">Misi</h2>
                    <p class="text-lg md:text-xl text-gray-700 text-justify">
                    1. Memproduksi obat hewan sesuai dengan Cara Pembuatan Obat Hewan yang Baik;
                    <br>2. Melaksanakan penjaminan mutu produk sesuai standar nasioanl dan internasional;
                    <br>3. Meningkatkan mutu an mengembangkan produk;
                    <br>4. Melaksanakan surveilans Penyakit Mulut dan Kuku;
                    <br>5. Menerapkan <i>biosafty</i> dan <i>biosecurity</i>;  
                    <br>6. Meningkatkan pelayanan pemberian informasi, pemasaran, penjualan, distribusi, dan purna jual;
                    <br>7. Meningkatkan kualitas menajemen keuangan dan sumber daya manusia;
                    <br>8. Mengoptimalkan fungsi dan melakukan keuangan dan melakukan pemeliharaan prasarana sarana produksi;
                    <br>9. Mencegah adanya penyuapan disetipa aktivitas pada organisasi; dan 
                    <br>10. Memastikan keselamatan dan kesehatan kerja di lingkungan kerja.

                    </p>
                </div>
            </div>

</main>

<?php include 'partial/footer.html'; ?>
<script src="assets/main.js"></script>
</body>


