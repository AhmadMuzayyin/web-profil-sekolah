<nav class="bg-blue-700 text-white sticky top-0 z-50 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                    <span class="text-blue-700 font-bold text-lg">SD</span>
                </div>
                <span class="font-bold text-lg hidden sm:block">SDN Ketawang Karay</span>
            </a>

            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-600 transition {{ request()->routeIs('home') ? 'bg-blue-800' : '' }}">
                    Beranda
                </a>

                <div class="relative dropdown-hover">
                    <a href="{{ route('profil.index') }}"
                        class="px-3 py-2 rounded-md hover:bg-blue-600 transition flex items-center {{ request()->routeIs('profil.*') ? 'bg-blue-800' : '' }}">
                        Profil
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </a>
                    <div class="dropdown-menu absolute left-0 mt-0 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden">
                        <a href="{{ route('profil.sejarah') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-700">Sejarah</a>
                        <a href="{{ route('profil.visi-misi') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-700">Visi & Misi</a>
                        <a href="{{ route('profil.struktur-organisasi') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-700">Struktur
                            Organisasi</a>
                    </div>
                </div>

                <div class="relative dropdown-hover">
                    <a href="{{ route('akademik.index') }}"
                        class="px-3 py-2 rounded-md hover:bg-blue-600 transition flex items-center {{ request()->routeIs('akademik.*') ? 'bg-blue-800' : '' }}">
                        Akademik
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </a>
                    <div class="dropdown-menu absolute left-0 mt-0 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden">
                        <a href="{{ route('akademik.kurikulum') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-700">Kurikulum</a>
                        <a href="{{ route('akademik.ekstrakurikuler') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-700">Ekstrakurikuler</a>
                    </div>
                </div>

                <a href="{{ route('fasilitas') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-600 transition {{ request()->routeIs('fasilitas') ? 'bg-blue-800' : '' }}">
                    Fasilitas
                </a>

                <a href="{{ route('galeri') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-600 transition {{ request()->routeIs('galeri') ? 'bg-blue-800' : '' }}">
                    Galeri
                </a>

                <a href="{{ route('berita') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-600 transition {{ request()->routeIs('berita') ? 'bg-blue-800' : '' }}">
                    Berita
                </a>

                <a href="{{ route('kontak') }}"
                    class="px-3 py-2 rounded-md hover:bg-blue-600 transition {{ request()->routeIs('kontak') ? 'bg-blue-800' : '' }}">
                    Kontak
                </a>
            </div>

            <button id="mobile-menu-button" class="lg:hidden p-2 rounded-md hover:bg-blue-600 focus:outline-none">
                <svg id="menu-open-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="menu-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="lg:hidden bg-blue-800 hidden">
        <div class="px-4 py-3 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md hover:bg-blue-600">Beranda</a>

            <div>
                <button class="mobile-dropdown-toggle w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-blue-600">
                    <span>Profil</span>
                    <svg class="mobile-dropdown-icon w-4 h-4 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content pl-4 space-y-1 hidden">
                    <a href="{{ route('profil.sejarah') }}"
                        class="block px-3 py-2 rounded-md hover:bg-blue-600 text-sm">Sejarah</a>
                    <a href="{{ route('profil.visi-misi') }}"
                        class="block px-3 py-2 rounded-md hover:bg-blue-600 text-sm">Visi & Misi</a>
                    <a href="{{ route('profil.struktur-organisasi') }}"
                        class="block px-3 py-2 rounded-md hover:bg-blue-600 text-sm">Struktur Organisasi</a>
                </div>
            </div>

            <div>
                <button class="mobile-dropdown-toggle w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-blue-600">
                    <span>Akademik</span>
                    <svg class="mobile-dropdown-icon w-4 h-4 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div class="mobile-dropdown-content pl-4 space-y-1 hidden">
                    <a href="{{ route('akademik.kurikulum') }}"
                        class="block px-3 py-2 rounded-md hover:bg-blue-600 text-sm">Kurikulum</a>
                    <a href="{{ route('akademik.ekstrakurikuler') }}"
                        class="block px-3 py-2 rounded-md hover:bg-blue-600 text-sm">Ekstrakurikuler</a>
                </div>
            </div>

            <a href="{{ route('fasilitas') }}" class="block px-3 py-2 rounded-md hover:bg-blue-600">Fasilitas</a>
            <a href="{{ route('galeri') }}" class="block px-3 py-2 rounded-md hover:bg-blue-600">Galeri</a>
            <a href="{{ route('berita') }}" class="block px-3 py-2 rounded-md hover:bg-blue-600">Berita</a>
            <a href="{{ route('kontak') }}" class="block px-3 py-2 rounded-md hover:bg-blue-600">Kontak</a>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-open-icon');
            const closeIcon = document.getElementById('menu-close-icon');
            
            if (menu) menu.classList.toggle('hidden');
            if (openIcon) openIcon.classList.toggle('hidden');
            if (closeIcon) closeIcon.classList.toggle('hidden');
        });
    }

    // Mobile dropdown toggles
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(function(button) {
        button.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.mobile-dropdown-icon');
            
            if (content) content.classList.toggle('hidden');
            if (icon) icon.classList.toggle('rotate-180');
        });
    });

    // Desktop dropdown hover
    document.querySelectorAll('.dropdown-hover').forEach(function(dropdown) {
        dropdown.addEventListener('mouseenter', function() {
            const menu = this.querySelector('.dropdown-menu');
            if (menu) menu.classList.remove('hidden');
        });
        
        dropdown.addEventListener('mouseleave', function() {
            const menu = this.querySelector('.dropdown-menu');
            if (menu) menu.classList.add('hidden');
        });
    });
</script>
