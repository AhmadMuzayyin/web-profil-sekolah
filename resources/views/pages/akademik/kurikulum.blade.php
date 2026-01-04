@extends('layouts.app')

@section('title', 'Kurikulum - SDN Ketawang Karay')
@section('meta_description', 'Kurikulum SDN Ketawang Karay - Menerapkan Kurikulum Merdeka untuk pembelajaran yang
    bermakna.')

@section('content')
    <section class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm mb-4">
                <a href="{{ route('akademik.index') }}" class="text-blue-200 hover:text-white">Akademik</a>
                <span class="mx-2">/</span>
                <span>Kurikulum</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Kurikulum</h1>
            <p class="text-xl text-blue-100">Kurikulum Merdeka untuk pembelajaran bermakna</p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Kurikulum Merdeka</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2 mb-6">Pembelajaran yang Berpusat pada Siswa
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        SDN Ketawang Karay menerapkan Kurikulum Merdeka sebagai panduan dalam menyelenggarakan pendidikan.
                        Kurikulum ini memberikan keleluasaan bagi guru untuk merancang pembelajaran yang sesuai dengan
                        karakteristik dan kebutuhan peserta didik.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Dengan pendekatan pembelajaran berbasis proyek, siswa diajak untuk belajar secara aktif,
                        mengeksplorasi berbagai topik, dan mengembangkan keterampilan abad 21 yang diperlukan untuk masa
                        depan.
                    </p>

                    <div class="bg-blue-50 p-6 rounded-xl">
                        <h4 class="font-bold text-blue-800 mb-3">Profil Pelajar Pancasila</h4>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm text-gray-700">Beriman & Bertakwa</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm text-gray-700">Berkebhinekaan Global</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm text-gray-700">Bergotong Royong</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm text-gray-700">Mandiri</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm text-gray-700">Bernalar Kritis</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm text-gray-700">Kreatif</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl p-8 flex items-center justify-center min-h-[400px]">
                    <div class="text-center">
                        <div
                            class="w-32 h-32 bg-white rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg">
                            <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-800">Kurikulum Merdeka</h3>
                        <p class="text-blue-600">Merdeka Belajar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Struktur Kurikulum</h2>
                <p class="text-gray-600 mt-2">Mata pelajaran yang diajarkan di SDN Ketawang Karay</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Pendidikan Agama</h3>
                    <p class="text-gray-600 text-sm">Pendidikan Agama Islam dan Budi Pekerti</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">PPKn</h3>
                    <p class="text-gray-600 text-sm">Pendidikan Pancasila dan Kewarganegaraan</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Bahasa Indonesia</h3>
                    <p class="text-gray-600 text-sm">Keterampilan berbahasa dan literasi</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Matematika</h3>
                    <p class="text-gray-600 text-sm">Numerasi dan pemecahan masalah</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">IPAS</h3>
                    <p class="text-gray-600 text-sm">Ilmu Pengetahuan Alam dan Sosial</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Seni & Budaya</h3>
                    <p class="text-gray-600 text-sm">Seni rupa, musik, dan budaya lokal</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">PJOK</h3>
                    <p class="text-gray-600 text-sm">Pendidikan Jasmani, Olahraga & Kesehatan</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Bahasa Inggris</h3>
                    <p class="text-gray-600 text-sm">Muatan lokal bahasa asing</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Waktu Pembelajaran</h2>
                <p class="text-gray-600 mt-2">Jadwal kegiatan belajar mengajar</p>
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="bg-gray-50 rounded-2xl overflow-hidden">
                    <div class="bg-blue-600 text-white p-4 text-center">
                        <h3 class="font-bold text-lg">Senin - Sabtu</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex justify-between items-center pb-4 border-b">
                            <span class="text-gray-600">Masuk Sekolah</span>
                            <span class="font-semibold text-gray-800">07.00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center pb-4 border-b">
                            <span class="text-gray-600">Upacara (Senin)</span>
                            <span class="font-semibold text-gray-800">07.00 - 07.30 WIB</span>
                        </div>
                        <div class="flex justify-between items-center pb-4 border-b">
                            <span class="text-gray-600">KBM Pagi</span>
                            <span class="font-semibold text-gray-800">07.30 - 10.00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center pb-4 border-b">
                            <span class="text-gray-600">Istirahat</span>
                            <span class="font-semibold text-gray-800">10.00 - 10.30 WIB</span>
                        </div>
                        <div class="flex justify-between items-center pb-4 border-b">
                            <span class="text-gray-600">KBM Siang</span>
                            <span class="font-semibold text-gray-800">10.30 - 12.30 WIB</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Pulang Sekolah</span>
                            <span class="font-semibold text-gray-800">12.30 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
