<?php

namespace Database\Seeders;

use App\Models\SchoolInfo;
use Illuminate\Database\Seeder;

class SchoolInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolInfo::create([
            'about' => 'SDN Ketawang Karay adalah sekolah dasar negeri yang berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada siswa-siswi kami. Kami percaya bahwa setiap anak memiliki potensi unik yang perlu dikembangkan dalam lingkungan yang aman, mendukung, dan menyenangkan.',
            'history' => 'SDN Ketawang Karay didirikan pada tahun 1985 dengan tujuan memberikan akses pendidikan yang merata bagi anak-anak di daerah Ketawang Karay dan sekitarnya. Selama lebih dari 40 tahun, sekolah kami telah menjadi pilar pendidikan di komunitas kami, menghasilkan lulusan-lulusan yang berprestasi dan berkarakter.',
            'vision' => 'Menjadi sekolah dasar yang unggul dalam prestasi, berkarakter mulia, dan berwawasan lingkungan.',
            'mission' => "1. Menyelenggarakan pendidikan yang berkualitas dan inovatif\n2. Mengembangkan potensi siswa secara optimal\n3. Menanamkan nilai-nilai karakter yang kuat\n4. Menciptakan lingkungan belajar yang kondusif\n5. Menjalin kerjasama yang baik dengan orang tua dan masyarakat",
            'motto' => 'Cerdas, Berkarakter, dan Berprestasi',
            'organizational_structure_image' => null,
        ]);
    }
}
