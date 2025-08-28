document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();

    // Mobile Menu Toggle (Tidak ada perubahan)
    var mobileMenuButton = document.getElementById('mobile-menu-button');
    var mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        document.addEventListener('mousedown', function(e) {
            if (!mobileMenu.classList.contains('hidden') && !mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    }

    // Desktop Dropdown (Tidak ada perubahan)
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
            if (e.key === 'ArrowDown') { e.preventDefault(); openMenu(); const first = menu.querySelector('a, button'); first && first.focus(); }
        });
        menu.addEventListener('keydown', (e) => { if (e.key === 'Escape') { closeMenu(); btn.focus(); } });
        nav.addEventListener('focusin', openMenu);
        nav.addEventListener('focusout', scheduleClose);
        document.addEventListener('click', (e) => { if (!nav.contains(e.target)) closeMenu(); });
    }
    ['profil', 'standar', 'layanan', 'intern', 'publikasi', 'informasi', 'kontak', 'siaga'].forEach(name => {
        setupPopupMenu(`${name}-btn`, `${name}-menu`, `nav-${name}`);
    });

    // Header scroll effect (Tidak ada perubahan)
    const header = document.getElementById('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) header.classList.add('shadow-large');
            else header.classList.remove('shadow-large');
        });
    }

    // --- LOGIKA POPUP MOBILE BARU YANG TERPUSAT ---

    const backdrop = document.getElementById('mobile-popup-backdrop') || (() => {
        const bd = document.createElement('div');
        bd.id = 'mobile-popup-backdrop';
        bd.className = 'mobile-popup-backdrop hide';
        document.body.appendChild(bd);
        return bd;
    })();

    const allPopups = document.querySelectorAll('.fixed.inset-0.z-50');

    function closeAllPopups() {
        allPopups.forEach(popup => {
            if (popup.classList.contains('show')) {
                popup.classList.remove('show');
                popup.classList.add('hide');
                setTimeout(() => popup.classList.add('hidden'), 350);
            }
        });
        backdrop.classList.add('hide');
        document.body.style.overflow = ''; // Enable scroll
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeAllPopups();
    });
    
    backdrop.addEventListener('click', closeAllPopups);

    // PERBAIKAN: Fungsi openPopup yang lebih robust
    function openPopup(popupToOpen) {
        if (!popupToOpen) return;

        // Langsung tutup semua popup lain secara sinkron
        allPopups.forEach(p => {
            if (p !== popupToOpen) {
                p.classList.remove('show');
                p.classList.add('hidden');
            }
        });
        
        // Buka popup yang dituju
        popupToOpen.classList.remove('hidden', 'hide');
        popupToOpen.classList.add('show');
        backdrop.classList.remove('hide');
        document.body.style.overflow = 'hidden'; // Disable scroll
    }
    
    ['profil', 'standar', 'layanan', 'intern', 'publikasi', 'informasi', 'siaga', 'kontak'].forEach(name => {
        const btn = document.getElementById(`mobile-${name}-btn`);
        const popup = document.getElementById(`mobile-${name}-popup`);
        if (btn && popup) {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                openPopup(popup);
            });
        }
    });

    // Penanganan khusus untuk beralih antara popup Profil dan Kelembagaan
    const profilPopup = document.getElementById('mobile-profil-popup');
    const kelembagaanPopup = document.getElementById('mobile-kelembagaan-popup');
    const kelembagaanBtn = document.getElementById('mobile-kelembagaan-btn');
    const kelembagaanBack = document.getElementById('mobile-kelembagaan-back');

    if (profilPopup && kelembagaanPopup && kelembagaanBtn && kelembagaanBack) {
        function switchPopup(from, to) {
            from.classList.remove('show');
            from.classList.add('hide');
            setTimeout(() => {
                from.classList.add('hidden');
                to.classList.remove('hidden', 'hide');
                to.classList.add('show');
            }, 350);
        }

        kelembagaanBtn.addEventListener('click', (e) => {
            e.preventDefault();
            switchPopup(profilPopup, kelembagaanPopup);
        });

        kelembagaanBack.addEventListener('click', () => {
            switchPopup(kelembagaanPopup, profilPopup);
        });
    }
});
