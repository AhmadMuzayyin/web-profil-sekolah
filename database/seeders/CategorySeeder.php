<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Pengumuman', 'description' => 'Pengumuman resmi dari sekolah'],
            ['name' => 'Prestasi', 'description' => 'Berita tentang prestasi siswa dan sekolah'],
            ['name' => 'Kegiatan', 'description' => 'Kegiatan-kegiatan sekolah'],
            ['name' => 'Berita Umum', 'description' => 'Berita umum seputar sekolah'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
