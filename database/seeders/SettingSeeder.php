<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'school_name', 'value' => 'SDN Ketawang Karay', 'type' => 'text'],
            ['key' => 'school_address', 'value' => 'Jl. Pendidikan No. 123, Ketawang Karay, Kecamatan Ganding, Kabupaten Sumenep', 'type' => 'textarea'],
            ['key' => 'school_phone', 'value' => '(0328) 123-4567', 'type' => 'text'],
            ['key' => 'school_email', 'value' => 'info@sdnketawangkaray.sch.id', 'type' => 'text'],
            ['key' => 'school_logo', 'value' => null, 'type' => 'image'],
            ['key' => 'facebook_url', 'value' => '#', 'type' => 'text'],
            ['key' => 'twitter_url', 'value' => '#', 'type' => 'text'],
            ['key' => 'instagram_url', 'value' => '#', 'type' => 'text'],
            ['key' => 'youtube_url', 'value' => '#', 'type' => 'text'],
            ['key' => 'meta_description', 'value' => 'SDN Ketawang Karay - Sekolah Dasar Negeri yang berkualitas dengan pendidikan terbaik untuk generasi masa depan.', 'type' => 'textarea'],
            ['key' => 'meta_keywords', 'value' => 'SDN Ketawang Karay, Sekolah Dasar, Pendidikan, Sekolah Negeri, Sumenep', 'type' => 'text'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value'], 'type' => $setting['type']]
            );
        }
    }
}
