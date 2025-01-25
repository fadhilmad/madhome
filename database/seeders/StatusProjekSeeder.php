<?php

namespace Database\Seeders;

use App\Models\StatusProjek;
use Illuminate\Database\Seeder;

class StatusProjekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["nama" => "Baru"],
            ["nama" => "Scafolding (Perancangan)"],
            ["nama" => "Development"],
            ["nama" => "Selesai"],
        ];

        StatusProjek::insert($data);
    }
}
