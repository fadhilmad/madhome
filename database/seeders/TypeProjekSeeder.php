<?php

namespace Database\Seeders;

use App\Models\TypeProjek;
use Illuminate\Database\Seeder;

class TypeProjekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["nama" => "Company Profile"],
            ["nama" => "Sistem Manajement"],
            ["nama" => "Android"],
            ["nama" => "Tugas Akhir (PA)"],
        ];

        TypeProjek::insert($data);
    }
}
