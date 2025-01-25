<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "logo" => "no-image.png",
                "favicon" => "no-image.png",
                "nama_instansi" => "MadHome",
                "link_fb" => "#",
                "link_ig" => "#",
                "link_tiktok" => "#",
                "deskripsi" => "-",
                "map" => "-",
                "alamat" => "-",
                "no_wa" => "081803437657",
                "email" => "madhome@gmail.com",
                "analytic" => "-",
            ],
        ];

        Setting::insert($data);
    }
}
