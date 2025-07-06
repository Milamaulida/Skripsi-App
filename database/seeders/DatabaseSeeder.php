<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Tambahkan ini!
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
    $this->call([
        UserSeeder::class,
    ]);

     $this->call([
        RoleSeeder::class,
    ]);

    $this->call([
    NrClassSeeder::class,
    ]);

}
}
