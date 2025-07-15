<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder; // Tambahkan ini!

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

        $this->call(ExamSeeder::class);

    }
}