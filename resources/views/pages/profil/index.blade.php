@extends('layouts.app')

@section('title', 'Profil Sekolah - SDN Ketawang Karay')
@section('meta_description', 'Profil lengkap SDN Ketawang Karay - Sejarah, Visi Misi, dan Struktur Organisasi sekolah.')

@section('content')
    <section class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Profil Sekolah</h1>
                <p class="text-xl text-blue-100">Mengenal lebih dekat SDN Ketawang Karay</p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Tentang Kami</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2 mb-6">SDN Ketawang Karay</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        SDN Ketawang Karay merupakan sekolah dasar negeri yang berlokasi di Kecamatan Ganding, Kabupaten
                        Sumenep, Jawa Timur. Sekolah ini telah berdiri sejak tahun 1985 dan terus berkomitmen memberikan
                        pendidikan berkualitas bagi masyarakat sekitar.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Dengan pengalaman lebih dari 40 tahun dalam dunia pendidikan, SDN Ketawang Karay telah melahirkan
                        ribuan alumni yang sukses di berbagai bidang. Kami bangga menjadi bagian dari perjalanan pendidikan
                        generasi penerus bangsa.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-blue-50 rounded-lg">
                            <h4 class="font-bold text-blue-700">NPSN</h4>
                            <p class="text-gray-600">20527xxx</p>
                        </div>
                        <div class="p-4 bg-blue-50 rounded-lg">
                            <h4 class="font-bold text-blue-700">Akreditasi</h4>
                            <p class="text-gray-600">A (Unggul)</p>
                        </div>
                        <div class="p-4 bg-blue-50 rounded-lg">
                            <h4 class="font-bold text-blue-700">Status</h4>
                            <p class="text-gray-600">Negeri</p>
                        </div>
                        <div class="p-4 bg-blue-50 rounded-lg">
                            <h4 class="font-bold text-blue-700">Kurikulum</h4>
                            <p class="text-gray-600">Kurikulum Merdeka</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="w-full h-96 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center">
                        <div class="text-center">
                            <div
                                class="w-40 h-40 bg-white rounded-full mx-auto mb-4 flex items-center justify-center shadow-xl">
                                <span class="text-blue-700 font-bold text-5xl">SDN</span>
                            </div>
                            <p class="text-2xl font-bold text-blue-800">Ketawang Karay</p>
                            <p class="text-blue-600">Est. 1985</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Jelajahi Profil Kami</h2>
                <p class="text-gray-600 mt-2">Pilih informasi yang ingin Anda ketahui</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <a href="{{ route('profil.sejarah') }}"
                    class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition text-center">
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-blue-600 transition">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Sejarah</h3>
                    <p class="text-gray-600">Perjalanan panjang SDN Ketawang Karay dari awal berdiri hingga sekarang.</p>
                </a>

                <a href="{{ route('profil.visi-misi') }}"
                    class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition text-center">
                    <div
                        class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-green-600 transition">
                        <svg class="w-8 h-8 text-green-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Visi & Misi</h3>
                    <p class="text-gray-600">Tujuan dan langkah kami dalam mencerdaskan generasi bangsa.</p>
                </a>

                <a href="{{ route('profil.struktur-organisasi') }}"
                    class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition text-center">
                    <div
                        class="w-16 h-16 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-purple-600 transition">
                        <svg class="w-8 h-8 text-purple-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Struktur Organisasi</h3>
                    <p class="text-gray-600">Susunan kepengurusan dan tenaga pendidik sekolah.</p>
                </a>
            </div>
        </div>
    </section>
@endsection
