@extends('layouts.app')

@section('title', 'Ekstrakurikuler - SDN Ketawang Karay')
@section('meta_description', 'Kegiatan ekstrakurikuler SDN Ketawang Karay untuk mengembangkan bakat dan minat siswa.')

@section('content')
    <section class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm mb-4">
                <a href="{{ route('akademik.index') }}" class="text-blue-200 hover:text-white">Akademik</a>
                <span class="mx-2">/</span>
                <span>Ekstrakurikuler</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Ekstrakurikuler</h1>
            <p class="text-xl text-blue-100">Mengembangkan bakat dan minat siswa</p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Pengembangan Diri</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">Kegiatan Ekstrakurikuler</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">SDN Ketawang Karay menyediakan berbagai kegiatan
                    ekstrakurikuler untuk mengembangkan potensi, bakat, dan minat siswa di luar jam pelajaran.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-600 uppercase">Wajib</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Pramuka</h3>
                        <p class="text-gray-600 text-sm mb-4">Kegiatan kepanduan untuk membentuk karakter, kemandirian, dan
                            jiwa kepemimpinan siswa.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Sabtu, 07.30 - 10.00 WIB
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-blue-600 uppercase">Seni</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Drum Band</h3>
                        <p class="text-gray-600 text-sm mb-4">Latihan marching band untuk mengembangkan bakat musik dan
                            kekompakan tim.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Rabu, 14.00 - 16.00 WIB
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-yellow-600 uppercase">Religius</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Tahfidz Quran</h3>
                        <p class="text-gray-600 text-sm mb-4">Program menghafal Al-Quran dengan metode yang menyenangkan dan
                            mudah dipahami.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Senin & Kamis, 13.00 - 14.30 WIB
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-red-600 uppercase">Olahraga</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Pencak Silat</h3>
                        <p class="text-gray-600 text-sm mb-4">Seni bela diri tradisional Indonesia untuk melatih fisik,
                            mental, dan disiplin.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Selasa, 14.00 - 16.00 WIB
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-purple-600 uppercase">Seni</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Tari Tradisional</h3>
                        <p class="text-gray-600 text-sm mb-4">Melestarikan budaya melalui tarian tradisional Madura dan
                            Nusantara.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Jumat, 14.00 - 15.30 WIB
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-indigo-400 to-indigo-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-indigo-600 uppercase">Akademik</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Olimpiade Sains</h3>
                        <p class="text-gray-600 text-sm mb-4">Pembinaan siswa berprestasi untuk mengikuti kompetisi
                            olimpiade sains.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Senin & Rabu, 13.00 - 14.30 WIB
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-teal-600 uppercase">Olahraga</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Sepak Bola</h3>
                        <p class="text-gray-600 text-sm mb-4">Latihan sepak bola untuk mengembangkan kemampuan fisik dan
                            kerjasama tim.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Kamis, 14.00 - 16.00 WIB
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-pink-400 to-pink-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-pink-600 uppercase">Seni</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Seni Lukis</h3>
                        <p class="text-gray-600 text-sm mb-4">Mengembangkan kreativitas dan ekspresi melalui seni lukis dan
                            menggambar.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Selasa, 13.00 - 14.30 WIB
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition group">
                    <div class="h-48 bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-orange-600 uppercase">Teknologi</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-3">Komputer</h3>
                        <p class="text-gray-600 text-sm mb-4">Pengenalan komputer dan teknologi informasi untuk bekal di
                            era digital.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Jumat, 13.00 - 14.30 WIB
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-blue-600 rounded-2xl p-8 md:p-12 text-center text-white">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Tertarik Mengikuti Ekstrakurikuler?</h2>
                <p class="text-blue-100 mb-6 max-w-2xl mx-auto">Daftarkan diri Anda ke kegiatan ekstrakurikuler favorit dan
                    kembangkan potensi Anda bersama kami!</p>
                <a href="{{ route('kontak') }}"
                    class="inline-flex items-center px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition">
                    Hubungi Kami untuk Info Lebih Lanjut
                </a>
            </div>
        </div>
    </section>
@endsection
