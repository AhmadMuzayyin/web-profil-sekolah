@extends('layouts.app')

@section('title', 'Beranda - SDN Ketawang Karay')
@section('meta_description', 'SDN Ketawang Karay - Sekolah Dasar Negeri berkualitas yang berkomitmen mencetak generasi
    unggul, cerdas, dan berkarakter.')

@section('content')
    <section class="relative bg-gradient-to-br from-blue-700 via-blue-600 to-blue-800 text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-300/20 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <span class="inline-block px-4 py-2 bg-white/20 rounded-full text-sm font-medium mb-6">
                        🎓 Selamat Datang di SDN Ketawang Karay
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Mencetak Generasi <span class="text-yellow-300">Unggul</span> dan <span
                            class="text-yellow-300">Berkarakter</span>
                    </h1>
                    <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-xl mx-auto lg:mx-0">
                        Memberikan pendidikan berkualitas dengan lingkungan belajar yang menyenangkan untuk membentuk masa
                        depan anak bangsa yang cemerlang.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('profil.index') }}"
                            class="px-8 py-4 bg-yellow-400 text-blue-900 font-semibold rounded-lg hover:bg-yellow-300 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            Kenali Kami Lebih Dekat
                        </a>
                        <a href="{{ route('kontak') }}"
                            class="px-8 py-4 bg-white/20 text-white font-semibold rounded-lg hover:bg-white/30 transition border border-white/30">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="relative">
                        <div
                            class="w-full h-96 bg-white/10 rounded-2xl backdrop-blur-sm border border-white/20 flex items-center justify-center">
                            <div class="text-center">
                                <div
                                    class="w-32 h-32 bg-white rounded-full mx-auto mb-4 flex items-center justify-center shadow-xl">
                                    <span class="text-blue-700 font-bold text-4xl">SDN</span>
                                </div>
                                <p class="text-xl font-semibold">Ketawang Karay</p>
                                <p class="text-blue-200">Sejak 1985</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" class="w-full h-auto">
                <path fill="#f9fafb"
                    d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z">
                </path>
            </svg>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800">500+</h3>
                    <p class="text-gray-600">Siswa Aktif</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800">25+</h3>
                    <p class="text-gray-600">Tenaga Pendidik</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800">40+</h3>
                    <p class="text-gray-600">Tahun Berdiri</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800">100+</h3>
                    <p class="text-gray-600">Prestasi</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Keunggulan Kami</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">Mengapa Memilih SDN Ketawang Karay?</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Kami berkomitmen memberikan pendidikan terbaik dengan
                    berbagai keunggulan yang mendukung tumbuh kembang anak secara optimal.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group p-8 bg-gray-50 rounded-2xl hover:bg-blue-600 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="w-14 h-14 bg-blue-100 group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition">
                        <svg class="w-7 h-7 text-blue-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-3 transition">Kurikulum Berkualitas
                    </h3>
                    <p class="text-gray-600 group-hover:text-blue-100 transition">Menerapkan Kurikulum Merdeka yang inovatif
                        dan sesuai dengan perkembangan zaman untuk pembelajaran yang lebih bermakna.</p>
                </div>

                <div class="group p-8 bg-gray-50 rounded-2xl hover:bg-blue-600 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="w-14 h-14 bg-green-100 group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition">
                        <svg class="w-7 h-7 text-green-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-3 transition">Guru Berpengalaman
                    </h3>
                    <p class="text-gray-600 group-hover:text-blue-100 transition">Tenaga pendidik profesional dan
                        berpengalaman yang peduli terhadap perkembangan setiap siswa.</p>
                </div>

                <div
                    class="group p-8 bg-gray-50 rounded-2xl hover:bg-blue-600 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="w-14 h-14 bg-yellow-100 group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition">
                        <svg class="w-7 h-7 text-yellow-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-3 transition">Fasilitas Lengkap
                    </h3>
                    <p class="text-gray-600 group-hover:text-blue-100 transition">Ruang kelas nyaman, perpustakaan,
                        laboratorium komputer, dan lapangan olahraga yang mendukung aktivitas belajar.</p>
                </div>

                <div
                    class="group p-8 bg-gray-50 rounded-2xl hover:bg-blue-600 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="w-14 h-14 bg-purple-100 group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition">
                        <svg class="w-7 h-7 text-purple-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-3 transition">Ekstrakurikuler
                        Beragam</h3>
                    <p class="text-gray-600 group-hover:text-blue-100 transition">Berbagai kegiatan ekstrakurikuler untuk
                        mengembangkan bakat dan minat siswa di berbagai bidang.</p>
                </div>

                <div
                    class="group p-8 bg-gray-50 rounded-2xl hover:bg-blue-600 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="w-14 h-14 bg-red-100 group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition">
                        <svg class="w-7 h-7 text-red-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-3 transition">Lingkungan Kondusif
                    </h3>
                    <p class="text-gray-600 group-hover:text-blue-100 transition">Suasana belajar yang aman, nyaman, dan
                        menyenangkan untuk mendukung proses pembelajaran optimal.</p>
                </div>

                <div
                    class="group p-8 bg-gray-50 rounded-2xl hover:bg-blue-600 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="w-14 h-14 bg-indigo-100 group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition">
                        <svg class="w-7 h-7 text-indigo-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-3 transition">Pendidikan Karakter
                    </h3>
                    <p class="text-gray-600 group-hover:text-blue-100 transition">Menanamkan nilai-nilai karakter mulia
                        seperti kejujuran, disiplin, dan tanggung jawab sejak dini.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Berita Terkini</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">Informasi & Pengumuman</h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition group">
                        @if($post->featured_image)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>
                        @else
                            <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                    </path>
                                </svg>
                            </div>
                        @endif
                        <div class="p-6">
                            <span class="text-xs text-blue-600 font-semibold uppercase">{{ $post->category->name }}</span>
                            <h3 class="text-lg font-bold text-gray-800 mt-2 group-hover:text-blue-600 transition">
                                {{ $post->title }}
                            </h3>
                            <p class="text-gray-600 mt-2 text-sm line-clamp-2">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}</p>
                            <div class="flex items-center justify-between mt-4 pt-4 border-t">
                                <span class="text-xs text-gray-500">{{ $post->published_at->format('d M Y') }}</span>
                                <a href="{{ route('berita.show', $post->slug) }}"
                                    class="text-blue-600 text-sm font-semibold hover:text-blue-700">Selengkapnya →</a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500">Belum ada berita tersedia.</p>
                    </div>
                @endforelse
            </div>

            @if($posts->count() > 0)
                <div class="text-center mt-12">
                    <a href="{{ route('berita.index') }}"
                        class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                        Lihat Semua Berita
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <section class="py-20 bg-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Bergabung Bersama Kami?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">Berikan pendidikan terbaik untuk putra-putri Anda.
                Daftarkan sekarang dan jadilah bagian dari keluarga besar SDN Ketawang Karay.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('kontak') }}"
                    class="px-8 py-4 bg-yellow-400 text-blue-900 font-semibold rounded-lg hover:bg-yellow-300 transition shadow-lg">
                    Daftar Sekarang
                </a>
                <a href="{{ route('profil.index') }}"
                    class="px-8 py-4 bg-white/20 text-white font-semibold rounded-lg hover:bg-white/30 transition border border-white/30">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>
@endsection
