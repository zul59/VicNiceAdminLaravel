<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Unit::insert([
            "unit_id" => (string) Str::uuid(),
            "unit_name" => "Kemahasiswaan",
        ]);
        \App\Models\User::insert([
            "username" => "sa",
            "email" => "admin@gmail.com",
            "name" => "admin",
            "password" => "admin",
            "role" => 2,
            "unit_id" => 1,
        ]);
    }
}
