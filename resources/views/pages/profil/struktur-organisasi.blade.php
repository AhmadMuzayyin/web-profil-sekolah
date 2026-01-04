@extends('layouts.app')

@section('title', 'Struktur Organisasi - SDN Ketawang Karay')
@section('meta_description', 'Struktur organisasi dan tenaga pendidik SDN Ketawang Karay.')

@section('content')
    <section class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm mb-4">
                <a href="{{ route('profil.index') }}" class="text-blue-200 hover:text-white">Profil</a>
                <span class="mx-2">/</span>
                <span>Struktur Organisasi</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Struktur Organisasi</h1>
            <p class="text-xl text-blue-100">Susunan kepengurusan dan tenaga pendidik</p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Pimpinan Sekolah</h2>
            </div>

            <div class="flex justify-center mb-16">
                <div class="text-center">
                    <div
                        class="w-40 h-40 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full mx-auto mb-4 flex items-center justify-center shadow-xl">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Drs. Ahmad Sulaiman, M.Pd</h3>
                    <p class="text-blue-600 font-semibold">Kepala Sekolah</p>
                    <p class="text-gray-500 text-sm mt-1">NIP. 196512101990031005</p>
                </div>
            </div>

            <div class="border-t-2 border-blue-200 my-8"></div>

            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-800">Tenaga Pendidik</h2>
                <p class="text-gray-600">Guru-guru yang berdedikasi tinggi</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-green-400 to-green-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Siti Aminah, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 1A</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Nur Hidayah, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 1B</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Bambang Wijaya, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 2A</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-red-400 to-red-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Dewi Rahayu, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 2B</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Hadi Santoso, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 3A</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Sri Wahyuni, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 3B</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-teal-400 to-teal-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Agus Prasetyo, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 4A</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Ratna Sari, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 4B</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Budi Hartono, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 5A</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-lime-400 to-lime-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Endang Lestari, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 5B</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-rose-400 to-rose-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Muhammad Rizki, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 6A</p>
                </div>

                <div class="text-center p-4 bg-gray-50 rounded-xl hover:shadow-md transition">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-violet-400 to-violet-600 rounded-full mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800">Yuni Astuti, S.Pd</h4>
                    <p class="text-sm text-gray-600">Guru Kelas 6B</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-800">Guru Mata Pelajaran & Tenaga Kependidikan</h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Fikri Maulana, S.Pd.I</h4>
                        <p class="text-sm text-gray-600">Guru PAI</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Dedi Kurniawan, S.Pd</h4>
                        <p class="text-sm text-gray-600">Guru PJOK</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Wiwik Handayani</h4>
                        <p class="text-sm text-gray-600">Operator Sekolah</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Sumarno</h4>
                        <p class="text-sm text-gray-600">Penjaga Sekolah</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Siti Khoiriyah</h4>
                        <p class="text-sm text-gray-600">Pustakawan</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Fatimah, S.Pd</h4>
                        <p class="text-sm text-gray-600">Bendahara Sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
