<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NrClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            ['name' => 'Kelas 7'],
            ['name' => 'Kelas 8'],
            ['name' => 'Kelas 9'],
            ['name' => 'Kelas 10'],
            ['name' => 'Kelas 11'],
            ['name' => 'Kelas 12'],
        ];

        DB::table('nr_class')->insert($classes);
    }
}