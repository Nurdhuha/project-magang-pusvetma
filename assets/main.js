document.addEventListener('DOMContentLoaded', function () {
    lucide.createIcons();
    
    // Mobile Menu Toggle
    var mobileMenuButton = document.getElementById('mobile-menu-button');
    var mobileNav = document.getElementById('mobile-nav');
    if (mobileMenuButton && mobileNav) {
        mobileMenuButton.addEventListener('click', () => {
            mobileNav.classList.toggle('hidden');
        });
        document.addEventListener('mousedown', function(e) {
            if (!mobileNav.classList.contains('hidden') &&
                !mobileNav.contains(e.target) &&
                !mobileMenuButton.contains(e.target)) {
                mobileNav.classList.add('hidden');
            }
        });
    }
    
    // Desktop Dropdown (tidak ada perubahan)
    function setupPopupMenu(btnId, menuId, navId) {
        const btn = document.getElementById(btnId);
        const menu = document.getElementById(menuId);
        const nav = document.getElementById(navId);
        if (!btn || !menu || !nav) return;
        let closeTimer = null;
        const CLOSE_DELAY = 75;
        function openMenu() {
            clearTimeout(closeTimer);
            nav.classList.add('menu-open');
            btn.setAttribute('aria-expanded', 'true');
        }
        function closeMenu() {
            clearTimeout(closeTimer);
            nav.classList.remove('menu-open');
            btn.setAttribute('aria-expanded', 'false');
        }
        function scheduleClose() {
            clearTimeout(closeTimer);
            closeTimer = setTimeout(closeMenu, CLOSE_DELAY);
        }
        nav.addEventListener('pointerenter', openMenu);
        nav.addEventListener('pointerleave', scheduleClose);
        menu.addEventListener('pointerenter', openMenu);
        menu.addEventListener('pointerleave', scheduleClose);
        btn.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') { closeMenu(); btn.focus(); }
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                openMenu();
                const first = menu.querySelector('a, button');
                first && first.focus();
            }
        });
        menu.addEventListener('keydown', (e) => { if (e.key === 'Escape') { closeMenu(); btn.focus(); } });
        nav.addEventListener('focusin', openMenu);
        nav.addEventListener('focusout', scheduleClose);
        document.addEventListener('click', (e) => { if (!nav.contains(e.target)) closeMenu(); });
    }
    ['profil', 'standar', 'layanan', 'intern', 'publikasi', 'informasi', 'kontak', 'siaga'].forEach(name => {
        setupPopupMenu(`${name}-btn`, `${name}-menu`, `nav-${name}`);
    });
    
    // Header scroll effect
    const header = document.getElementById('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50)
                header.classList.add('shadow-large');
            else
                header.classList.remove('shadow-large');
        });
    }
    
    // --- LOGIKA POPUP MOBILE TERPUSAT ---
    
    // Buat backdrop popup (jika belum ada)
    const backdrop = document.getElementById('mobile-popup-backdrop') || (() => {
        const bd = document.createElement('div');
        bd.id = 'mobile-popup-backdrop';
        bd.className = 'mobile-popup-backdrop hide';
        document.body.appendChild(bd);
        return bd;
    })();
    
    const allPopups = document.querySelectorAll('.fixed.inset-0.z-50');
    
    function closePopup(popup) {
        popup.classList.remove('show');
        popup.classList.add('hide');
        setTimeout(() => popup.classList.add('hidden'), 350);
        // Jika tidak ada popup lain terbuka, enable scroll & tombol header kembali aktif
        const anyOpen = Array.from(allPopups).some(p => p.classList.contains('show'));
        if (!anyOpen) {
            backdrop.classList.add('hide');
            document.body.style.overflow = '';
            header && header.classList.remove('popup-open');
        }
    }
    
    function openPopup(popup) {
        if (!popup) return;
        popup.classList.remove('hidden', 'hide');
        popup.classList.add('show');
        backdrop.classList.remove('hide');
        document.body.style.overflow = 'hidden';
        header && header.classList.add('popup-open'); // Disable tombol header
    }
    
    // Set up popup mobile untuk menu utama (misal: profil, standar, dll)
    ['profil', 'standar', 'layanan', 'intern', 'publikasi', 'informasi', 'siaga', 'kontak'].forEach(name => {
        const btn = document.getElementById(`mobile-${name}-btn`);
        const popup = document.getElementById(`mobile-${name}-popup`);
        if (btn && popup) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                openPopup(popup);
            });
        }
    });
    
    // Logika untuk submenu Kelembagaan dalam menu Profil mobile
    const kelembagaanBtn = document.getElementById('mobile-kelembagaan-btn');
    const kelembagaanPopup = document.getElementById('mobile-kelembagaan-popup');
    const kelembagaanBack = document.getElementById('mobile-kelembagaan-back');
    if (kelembagaanBtn && kelembagaanPopup && kelembagaanBack) {
        kelembagaanBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            openPopup(kelembagaanPopup);
        });
    
        // Tombol kembali hanya menutup submenu Kelembagaan saja
        kelembagaanBack.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            closePopup(kelembagaanPopup);
        });
    
        // Klik di luar area submenu Kelembagaan menutup submenu
        document.addEventListener('mousedown', function(e) {
            if (
                kelembagaanPopup.classList.contains('show') &&
                !kelembagaanPopup.contains(e.target) &&
                !kelembagaanBtn.contains(e.target)
            ) {
                closePopup(kelembagaanPopup);
            }
        });
    
        // Tombol Escape hanya menutup submenu Kelembagaan
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && kelembagaanPopup.classList.contains('show')) {
                e.stopPropagation();
                closePopup(kelembagaanPopup);
            }
        });
    }
    
    // Global keydown: tutup popup non-submenu jika tidak ada interaksi khusus
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            allPopups.forEach(p => {
                if (p.id !== 'mobile-kelembagaan-popup' && p.classList.contains('show')) {
                    closePopup(p);
                }
            });
        }
    });
    
    backdrop.addEventListener('click', function(e) {
        // Tutup semua popup kecuali submenu Kelembagaan (agar menu Profil tidak tertutup)
        allPopups.forEach(p => {
            if (p.id !== 'mobile-kelembagaan-popup' && p.classList.contains('show')) {
                closePopup(p);
            }
        });
    });
});
