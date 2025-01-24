<?php

namespace Database\Seeders;

use App\Models\TentangKami;
use Illuminate\Database\Seeder;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [["gambar" => "no-image.png", "deskripsi" => "-"]];

        TentangKami::insert($data);
    }
}
