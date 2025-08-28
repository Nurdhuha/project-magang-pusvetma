document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();

    // Mobile Menu Toggle
    var mobileMenuButton = document.getElementById('mobile-menu-button');
    var mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.addEventListener('mousedown', function(e) {
            if (!mobileMenu.classList.contains('hidden') &&
                !mobileMenu.contains(e.target) &&
                !mobileMenuButton.contains(e.target)
            ) {
                mobileMenu.classList.add('hidden');
            }
        });
    }

    // Desktop Dropdown
    function setupPopupMenu(btnId, menuId, navId) {
        const btn = document.getElementById(btnId);
        const menu = document.getElementById(menuId);
        const nav = document.getElementById(navId);
        if (!btn || !menu || !nav) return;

        let closeTimer = null;
        const CLOSE_DELAY = 75;

        function openMenu() { clearTimeout(closeTimer); nav.classList.add('menu-open'); btn.setAttribute('aria-expanded', 'true'); }
        function closeMenu() { clearTimeout(closeTimer); nav.classList.remove('menu-open'); btn.setAttribute('aria-expanded', 'false'); }
        function scheduleClose() { clearTimeout(closeTimer); closeTimer = setTimeout(closeMenu, CLOSE_DELAY); }

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
        menu.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') { closeMenu(); btn.focus(); }
        });

        nav.addEventListener('focusin', openMenu);
        nav.addEventListener('focusout', scheduleClose);

        document.addEventListener('click', (e) => {
            if (!nav.contains(e.target)) closeMenu();
        });
    }

    setupPopupMenu('profil-btn', 'profil-menu', 'nav-profil');
    setupPopupMenu('standar-btn', 'standar-menu', 'nav-standar');
    setupPopupMenu('layanan-btn', 'layanan-menu', 'nav-layanan');
    setupPopupMenu('intern-btn', 'intern-menu', 'nav-intern');
    setupPopupMenu('publikasi-btn', 'publikasi-menu', 'nav-publikasi');
    setupPopupMenu('informasi-btn', 'informasi-menu', 'nav-informasi');
    setupPopupMenu('kontak-btn', 'kontak-menu', 'nav-kontak');
    setupPopupMenu('siaga-btn', 'siaga-menu', 'nav-siaga');

    // Header scroll effect
    const header = document.getElementById('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) header.classList.add('shadow-large');
            else header.classList.remove('shadow-large');
        });
    }

    // Mobile Popup Function
    function setupMobilePopup(btnId, popupId, popupContentId) {
        const btn = document.getElementById(btnId);
        const popup = document.getElementById(popupId);
        const popupContent = document.getElementById(popupContentId);

        let backdrop = document.getElementById('mobile-popup-backdrop');
        if (!backdrop) {
            backdrop = document.createElement('div');
            backdrop.id = 'mobile-popup-backdrop';
            backdrop.className = 'mobile-popup-backdrop hide';
            document.body.appendChild(backdrop);
        }

        if (!btn || !popup || !popupContent) return;

        function disableScroll() { document.body.style.overflow = 'hidden'; }
        function enableScroll() { document.body.style.overflow = ''; }

        // Fungsi terpusat untuk membuka popup
        function openPopup(p) {
            p.classList.remove('hidden', 'hide');
            p.classList.add('show');
            backdrop.classList.remove('hide');
            disableScroll();
        }

        // Fungsi terpusat untuk menutup semua popup
        function closeAllPopups() {
            document.querySelectorAll('.fixed.inset-0.z-50').forEach(p => {
                p.classList.remove('show');
                p.classList.add('hide');
                setTimeout(() => p.classList.add('hidden'), 350);
            });
            backdrop.classList.add('hide');
            enableScroll();
        }

        btn.addEventListener('click', (e) => {
            e.preventDefault();
            openPopup(popup);
        });

        document.addEventListener('mousedown', (e) => {
            const anyPopupShown = document.querySelector('.fixed.inset-0.z-50.show');
            if (!anyPopupShown) return;

            const isClickOnBackdrop = e.target === backdrop;
            const activePopupContent = anyPopupShown.querySelector('.bg-white');
            const isClickOutside = activePopupContent ? !activePopupContent.contains(e.target) && !btn.contains(e.target) : true;

            if (isClickOnBackdrop || (isClickOutside && !anyPopupShown.contains(e.target))) {
                closeAllPopups();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && document.querySelector('.fixed.inset-0.z-50.show')) {
                closeAllPopups();
            }
        });
    }
    
    // Setup semua popup utama
    ['profil', 'standar', 'layanan', 'intern', 'publikasi', 'informasi', 'siaga', 'kontak'].forEach(name => {
        setupMobilePopup(`mobile-${name}-btn`, `mobile-${name}-popup`, `mobile-${name}-popup-content`);
    });

    // --- PERBAIKAN FINAL: LOGIKA TUKAR ANTAR POPUP ---
    const kelembagaanBtn = document.getElementById('mobile-kelembagaan-btn');
    const kelembagaanPopup = document.getElementById('mobile-kelembagaan-popup');
    const profilPopup = document.getElementById('mobile-profil-popup');
    const kelembagaanBack = document.getElementById('mobile-kelembagaan-back');

    if (kelembagaanBtn && kelembagaanPopup && profilPopup && kelembagaanBack) {
        
        // Fungsi untuk menukar popup dengan animasi
        function switchPopup(from, to) {
            // Sembunyikan popup awal
            from.classList.remove('show');
            from.classList.add('hide');
            
            // Tampilkan popup tujuan setelah jeda singkat
            setTimeout(() => {
                from.classList.add('hidden');
                to.classList.remove('hidden', 'hide');
                to.classList.add('show');
            }, 150); // Jeda 150ms untuk transisi lebih smooth
        }

        // Saat tombol Kelembagaan diklik
        kelembagaanBtn.addEventListener('click', function (e) {
            e.preventDefault();
            switchPopup(profilPopup, kelembagaanPopup);
        });

        // Saat tombol kembali di Kelembagaan diklik
        kelembagaanBack.addEventListener('click', function () {
            switchPopup(kelembagaanPopup, profilPopup);
        });
    }
});
