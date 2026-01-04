@extends('layouts.app')

@section('title', 'Akademik - SDN Ketawang Karay')
@section('meta_description', 'Informasi akademik SDN Ketawang Karay - Kurikulum dan Kegiatan Ekstrakurikuler.')

@section('content')
    <section class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Akademik</h1>
                <p class="text-xl text-blue-100">Program pembelajaran dan pengembangan siswa</p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Program Unggulan</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2 mb-6">Pendidikan Berkualitas untuk Masa
                        Depan Cemerlang</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        SDN Ketawang Karay berkomitmen memberikan pendidikan berkualitas melalui penerapan Kurikulum Merdeka
                        yang berpusat pada siswa. Kami memfasilitasi pengembangan potensi setiap peserta didik melalui
                        berbagai program akademik dan non-akademik.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Pembelajaran Berbasis Proyek</h4>
                                <p class="text-gray-600 text-sm">Siswa belajar melalui proyek nyata yang relevan dengan
                                    kehidupan sehari-hari.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Pengembangan Karakter</h4>
                                <p class="text-gray-600 text-sm">Integrasi nilai-nilai Profil Pelajar Pancasila dalam setiap
                                    pembelajaran.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Literasi & Numerasi</h4>
                                <p class="text-gray-600 text-sm">Program khusus untuk meningkatkan kemampuan literasi dan
                                    numerasi siswa.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-6 rounded-2xl text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">6</div>
                        <p class="text-gray-600 text-sm">Tingkat Kelas</p>
                    </div>
                    <div class="bg-green-50 p-6 rounded-2xl text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">12</div>
                        <p class="text-gray-600 text-sm">Rombongan Belajar</p>
                    </div>
                    <div class="bg-yellow-50 p-6 rounded-2xl text-center">
                        <div class="text-4xl font-bold text-yellow-600 mb-2">8</div>
                        <p class="text-gray-600 text-sm">Mata Pelajaran</p>
                    </div>
                    <div class="bg-purple-50 p-6 rounded-2xl text-center">
                        <div class="text-4xl font-bold text-purple-600 mb-2">10+</div>
                        <p class="text-gray-600 text-sm">Ekstrakurikuler</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Jelajahi Program Akademik</h2>
                <p class="text-gray-600 mt-2">Pilih informasi yang ingin Anda ketahui</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <a href="{{ route('akademik.kurikulum') }}"
                    class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full mb-6 flex items-center justify-center group-hover:bg-blue-600 transition">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Kurikulum</h3>
                    <p class="text-gray-600 mb-4">Informasi lengkap tentang kurikulum yang diterapkan, struktur
                        pembelajaran, dan mata pelajaran.</p>
                    <span class="text-blue-600 font-semibold group-hover:text-blue-700">Pelajari Lebih Lanjut →</span>
                </a>

                <a href="{{ route('akademik.ekstrakurikuler') }}"
                    class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div
                        class="w-16 h-16 bg-green-100 rounded-full mb-6 flex items-center justify-center group-hover:bg-green-600 transition">
                        <svg class="w-8 h-8 text-green-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Ekstrakurikuler</h3>
                    <p class="text-gray-600 mb-4">Berbagai kegiatan ekstrakurikuler untuk mengembangkan bakat dan minat
                        siswa di luar jam pelajaran.</p>
                    <span class="text-green-600 font-semibold group-hover:text-green-700">Pelajari Lebih Lanjut →</span>
                </a>
            </div>
        </div>
    </section>
@endsection
