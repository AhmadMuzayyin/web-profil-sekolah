@extends('layouts.app')

@section('title', 'Visi & Misi - SDN Ketawang Karay')
@section('meta_description', 'Visi dan Misi SDN Ketawang Karay dalam mencetak generasi unggul dan berkarakter.')

@section('content')
    <section class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm mb-4">
                <a href="{{ route('profil.index') }}" class="text-blue-200 hover:text-white">Profil</a>
                <span class="mx-2">/</span>
                <span>Visi & Misi</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Visi & Misi</h1>
            <p class="text-xl text-blue-100">Arah dan tujuan pendidikan kami</p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl p-8 text-white">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold mb-6">Visi</h2>
                    <p class="text-xl leading-relaxed text-blue-100">
                        "Terwujudnya peserta didik yang <span class="text-yellow-300 font-semibold">CERDAS</span>, <span
                            class="text-yellow-300 font-semibold">BERKARAKTER</span>, <span
                            class="text-yellow-300 font-semibold">BERAKHLAK MULIA</span>, dan <span
                            class="text-yellow-300 font-semibold">BERWAWASAN LINGKUNGAN</span> berdasarkan iman dan takwa."
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Misi</h2>
                    <ol class="space-y-4">
                        <li class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm">1</span>
                            <p class="text-gray-600">Melaksanakan pembelajaran aktif, kreatif, efektif, dan menyenangkan
                                (PAKEM) untuk mengembangkan potensi peserta didik secara optimal.</p>
                        </li>
                        <li class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm">2</span>
                            <p class="text-gray-600">Menanamkan nilai-nilai karakter dan akhlak mulia melalui pembiasaan dan
                                keteladanan.</p>
                        </li>
                        <li class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm">3</span>
                            <p class="text-gray-600">Mengembangkan budaya literasi dan numerasi di lingkungan sekolah.</p>
                        </li>
                        <li class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm">4</span>
                            <p class="text-gray-600">Menumbuhkan semangat keunggulan dan prestasi kepada seluruh warga
                                sekolah.</p>
                        </li>
                        <li class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm">5</span>
                            <p class="text-gray-600">Menciptakan lingkungan sekolah yang bersih, sehat, dan ramah
                                lingkungan.</p>
                        </li>
                        <li class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm">6</span>
                            <p class="text-gray-600">Menjalin kerjasama yang harmonis dengan orang tua dan masyarakat.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Tujuan Sekolah</h2>
                <p class="text-gray-600 mt-2">Target yang ingin dicapai dalam penyelenggaraan pendidikan</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Lulusan Berkualitas</h3>
                    <p class="text-gray-600 text-sm">Menghasilkan lulusan yang memiliki kompetensi akademik dan non-akademik
                        yang baik.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Karakter Mulia</h3>
                    <p class="text-gray-600 text-sm">Membentuk peserta didik yang memiliki karakter mulia dan berakhlak
                        baik.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Budaya Literasi</h3>
                    <p class="text-gray-600 text-sm">Membudayakan kegiatan membaca dan menulis di kalangan peserta didik.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Prestasi Gemilang</h3>
                    <p class="text-gray-600 text-sm">Meraih prestasi di berbagai bidang akademik maupun non-akademik.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Sekolah Adiwiyata</h3>
                    <p class="text-gray-600 text-sm">Mewujudkan sekolah yang berwawasan dan peduli lingkungan.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Kemitraan Harmonis</h3>
                    <p class="text-gray-600 text-sm">Menjalin hubungan baik dengan orang tua, masyarakat, dan stakeholder.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
