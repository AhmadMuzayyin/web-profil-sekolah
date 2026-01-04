<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Kegiatan Belajar', 'description' => 'Foto kegiatan belajar mengajar di kelas'],
            ['name' => 'Kegiatan Ekstrakurikuler', 'description' => 'Foto kegiatan ekstrakurikuler'],
            ['name' => 'Perayaan & Acara', 'description' => 'Foto perayaan dan acara sekolah'],
            ['name' => 'Fasilitas', 'description' => 'Foto fasilitas sekolah'],
        ];

        foreach ($categories as $category) {
            GalleryCategory::create($category);
        }
    }
}
