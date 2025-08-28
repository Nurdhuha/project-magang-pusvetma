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
            if (window.scrollY > 50) {
                header.classList.add('shadow-large');
            } else {
                header.classList.remove('shadow-large');
            }
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

        btn.addEventListener('click', function(e) {
            e.preventDefault();
            popup.classList.remove('hidden', 'hide');
            popup.classList.add('show');
            backdrop.classList.remove('hide');
            disableScroll();

            if (popupId === 'mobile-profil-popup') {
                const kelembagaanPopup = document.getElementById('mobile-kelembagaan-popup');
                if (kelembagaanPopup) {
                    kelembagaanPopup.classList.remove('show');
                    kelembagaanPopup.classList.add('hidden', 'hide');
                }
                popupContent.classList.remove('hidden');
            }
        });
        
        function closePopup() {
            popup.classList.remove('show');
            popup.classList.add('hide');
            backdrop.classList.add('hide');
            enableScroll();
            setTimeout(() => {
                popup.classList.add('hidden');
                if (popupId === 'mobile-profil-popup') {
                    const kelembagaanPopup = document.getElementById('mobile-kelembagaan-popup');
                    if (kelembagaanPopup) {
                        kelembagaanPopup.classList.remove('show');
                        kelembagaanPopup.classList.add('hidden', 'hide');
                    }
                }
            }, 350);
        }

        document.addEventListener('mousedown', function(e) {
            const kelembagaanPopup = document.getElementById('mobile-kelembagaan-popup');
            const isKelembagaanVisible = kelembagaanPopup && kelembagaanPopup.classList.contains('show');

            const isClickOutside = isKelembagaanVisible ?
                !kelembagaanPopup.contains(e.target) && !btn.contains(e.target) :
                !popupContent.contains(e.target) && !btn.contains(e.target);
            
            if (popup.classList.contains('show') && (isClickOutside || e.target === backdrop)) {
                closePopup();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && popup.classList.contains('show')) {
                closePopup();
            }
        });
    }

    setupMobilePopup('mobile-profil-btn', 'mobile-profil-popup', 'mobile-profil-popup-content');
    setupMobilePopup('mobile-standar-btn', 'mobile-standar-popup', 'mobile-standar-popup-content');
    setupMobilePopup('mobile-layanan-btn', 'mobile-layanan-popup', 'mobile-layanan-popup-content');
    setupMobilePopup('mobile-intern-btn', 'mobile-intern-popup', 'mobile-intern-popup-content');
    setupMobilePopup('mobile-publikasi-btn', 'mobile-publikasi-popup', 'mobile-publikasi-popup-content');
    setupMobilePopup('mobile-informasi-btn', 'mobile-informasi-popup', 'mobile-informasi-popup-content');
    setupMobilePopup('mobile-siaga-btn', 'mobile-siaga-popup', 'mobile-siaga-popup-content');
    setupMobilePopup('mobile-kontak-btn', 'mobile-kontak-popup', 'mobile-kontak-popup-content');

    // --- LOGIKA SUBMENU KELEMBAGAAN MOBILE DENGAN PERBAIKAN FINAL ---
    const kelembagaanBtn = document.getElementById('mobile-kelembagaan-btn');
    const kelembagaanPopup = document.getElementById('mobile-kelembagaan-popup');
    const profilPopupContent = document.getElementById('mobile-profil-popup-content');
    const kelembagaanBack = document.getElementById('mobile-kelembagaan-back');

    if (kelembagaanBtn && kelembagaanPopup && profilPopupContent && kelembagaanBack) {
        // Saat tombol Kelembagaan diklik (sudah benar)
        kelembagaanBtn.addEventListener('click', function (e) {
            e.preventDefault();
            profilPopupContent.classList.add('hidden');
            kelembagaanPopup.classList.remove('hidden', 'hide');
            kelembagaanPopup.classList.add('show');
        });

        // PERBAIKAN: Saat tombol kembali di Kelembagaan diklik
        kelembagaanBack.addEventListener('click', function () {
            // 1. Mulai animasi menyembunyikan menu Kelembagaan
            kelembagaanPopup.classList.remove('show');
            kelembagaanPopup.classList.add('hide');

            // 2. Tunggu animasi selesai (350ms sesuai CSS)
            setTimeout(() => {
                // 3. Sembunyikan total menu Kelembagaan
                kelembagaanPopup.classList.add('hidden');
                // 4. BARU tampilkan kembali konten Profil
                profilPopupContent.classList.remove('hidden');
            }, 350);
        });
    }
});