@extends('layouts.app')

@section('title', 'Sejarah - SDN Ketawang Karay')
@section('meta_description', 'Sejarah perjalanan SDN Ketawang Karay dari awal berdiri tahun 1985 hingga sekarang.')

@section('content')
    <section class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm mb-4">
                <a href="{{ route('profil.index') }}" class="text-blue-200 hover:text-white">Profil</a>
                <span class="mx-2">/</span>
                <span>Sejarah</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Sejarah Sekolah</h1>
            <p class="text-xl text-blue-100">Perjalanan panjang SDN Ketawang Karay</p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-600 leading-relaxed mb-6">
                    SDN Ketawang Karay didirikan pada tahun 1985 sebagai upaya pemerintah untuk menyediakan layanan
                    pendidikan dasar bagi masyarakat di wilayah Kecamatan Ganding, Kabupaten Sumenep. Pendirian sekolah ini
                    merupakan respons atas meningkatnya kebutuhan pendidikan di daerah tersebut.
                </p>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Awal Mula (1985-1995)</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Pada awal berdirinya, SDN Ketawang Karay hanya memiliki 3 ruang kelas dengan jumlah siswa sekitar 90
                    orang. Gedung sekolah masih sangat sederhana dengan dinding semi permanen. Meskipun dengan keterbatasan
                    fasilitas, semangat belajar siswa dan dedikasi para guru tetap tinggi.
                </p>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Masa Perkembangan (1995-2010)</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Memasuki tahun 1995, SDN Ketawang Karay mulai mengalami perkembangan signifikan. Gedung sekolah
                    direnovasi menjadi bangunan permanen dengan penambahan ruang kelas baru. Pada periode ini, sekolah mulai
                    meraih berbagai prestasi di tingkat kecamatan dan kabupaten.
                </p>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4">Era Modern (2010-Sekarang)</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Di era modern ini, SDN Ketawang Karay terus berbenah dan meningkatkan kualitas pendidikan. Sekolah kini
                    dilengkapi dengan berbagai fasilitas modern seperti laboratorium komputer, perpustakaan, dan ruang
                    multimedia. Kurikulum yang diterapkan juga terus disesuaikan dengan perkembangan zaman.
                </p>
            </div>

            <div class="mt-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Tonggak Sejarah</h3>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-24 text-right">
                            <span class="text-blue-600 font-bold">1985</span>
                        </div>
                        <div class="w-px bg-blue-200"></div>
                        <div class="flex-1 pb-6">
                            <div class="w-3 h-3 bg-blue-600 rounded-full -ml-[7px] mb-2"></div>
                            <h4 class="font-semibold text-gray-800">Pendirian Sekolah</h4>
                            <p class="text-gray-600 text-sm">SDN Ketawang Karay resmi didirikan dengan 3 ruang kelas.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-24 text-right">
                            <span class="text-blue-600 font-bold">1995</span>
                        </div>
                        <div class="w-px bg-blue-200"></div>
                        <div class="flex-1 pb-6">
                            <div class="w-3 h-3 bg-blue-600 rounded-full -ml-[7px] mb-2"></div>
                            <h4 class="font-semibold text-gray-800">Renovasi Gedung</h4>
                            <p class="text-gray-600 text-sm">Pembangunan gedung permanen dan penambahan fasilitas.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-24 text-right">
                            <span class="text-blue-600 font-bold">2005</span>
                        </div>
                        <div class="w-px bg-blue-200"></div>
                        <div class="flex-1 pb-6">
                            <div class="w-3 h-3 bg-blue-600 rounded-full -ml-[7px] mb-2"></div>
                            <h4 class="font-semibold text-gray-800">Akreditasi Pertama</h4>
                            <p class="text-gray-600 text-sm">Meraih akreditasi B dari BAN-S/M.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-24 text-right">
                            <span class="text-blue-600 font-bold">2015</span>
                        </div>
                        <div class="w-px bg-blue-200"></div>
                        <div class="flex-1 pb-6">
                            <div class="w-3 h-3 bg-blue-600 rounded-full -ml-[7px] mb-2"></div>
                            <h4 class="font-semibold text-gray-800">Akreditasi A</h4>
                            <p class="text-gray-600 text-sm">Berhasil meningkatkan akreditasi menjadi A (Unggul).</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-24 text-right">
                            <span class="text-blue-600 font-bold">2022</span>
                        </div>
                        <div class="w-px bg-blue-200"></div>
                        <div class="flex-1">
                            <div class="w-3 h-3 bg-blue-600 rounded-full -ml-[7px] mb-2"></div>
                            <h4 class="font-semibold text-gray-800">Implementasi Kurikulum Merdeka</h4>
                            <p class="text-gray-600 text-sm">Menerapkan Kurikulum Merdeka sebagai sekolah penggerak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
