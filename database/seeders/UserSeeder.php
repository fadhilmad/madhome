<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                "name" => "Super Admin",
                "username" => "superadmin",
                "email" => "superadmin@gmail.com",
                "password" => Hash::make("madhomedev@123"),
            ],
        ];

        User::insert($data);
    }
}
