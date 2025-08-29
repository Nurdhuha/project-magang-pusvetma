document.addEventListener('DOMContentLoaded', function () {
    lucide.createIcons();

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavContent = document.getElementById('mobile-nav-content');

    // Fungsi untuk menampilkan panel dengan nilai data-menu yang diberikan
    function showMenuPanel(menu) {
        const panels = mobileNavContent.querySelectorAll('.menu-panel');
        panels.forEach(panel => {
            panel.style.display = (panel.getAttribute('data-menu') === menu) ? 'block' : 'none';
        });
    }
    
    // Membuka mobile-nav dengan menampilkan panel utama
    function openMobileMenu() {
        mobileNav.classList.remove('hidden');
        setTimeout(() => {
            mobileNav.classList.add('is-open');
            document.body.style.overflow = 'hidden';
            showMenuPanel('main');
        }, 10);
    }
    
    // Menutup mobile-nav secara penuh
    function closeMobileMenu() {
        mobileNav.classList.remove('is-open');
        document.body.style.overflow = '';
        setTimeout(() => {
            mobileNav.classList.add('hidden');
        }, 400);
    }
    
    // Toggle mobile-menu-button
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function(e) {
            if (mobileNav.classList.contains('is-open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
            e.stopPropagation();
        });
    }
    
    // Delegasi event untuk menangani klik pada tombol menu-item dan tombol back
    mobileNavContent.addEventListener('click', function(e) {
        const target = e.target;
        
        // Jika tombol menu-item diklik (ada atribut data-submenu)
        if (target.classList.contains('menu-item')) {
            const submenu = target.getAttribute('data-submenu');
            if (submenu) {
                showMenuPanel(submenu);
            }
        }
        
        // Jika tombol back (dengan kelas back-button) diklik, kembali ke panel utama.
        if (target.closest('.back-button')) {
            showMenuPanel('main');
        }
    });
    
    // Tutup mobile-nav jika klik di luar
    document.addEventListener('click', function(e) {
        if (!mobileNav.contains(e.target) && !mobileMenuButton.contains(e.target)) {
            if (!mobileNav.classList.contains('hidden')) {
                closeMobileMenu();
            }
        }
    });
    
    // Header scroll effect (jika diperlukan)
    const header = document.getElementById('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('shadow-large');
            } else {
                header.classList.remove('shadow-large');
            }
        });
    }
});
