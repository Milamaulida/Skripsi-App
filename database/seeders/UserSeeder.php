<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'class_id' => null,
            'name' => 'Mila Maulida',
            'email' => 'maulidamila07@gmail.com',
            'password' => Hash::make('Mila070903'), // password di-hash dengan bcrypt
            'phone' => 813164732,
            'identification_number' => 457769,
            'role_id' => 1,
            'status' => 'Active',
            'birth_date' => '2025-05-06',
            'address' => 'Jl.mengger girang 1 no.39',
            'image_path' => 'png',
        ]);

        User::create([
            'class_id' => 1,
            'name' => 'Bramara Saddad Minthadara',
            'email' => 'bramara@gmail.com',
            'password' => Hash::make('Bram12345'),
            'phone' => 813164732,
            'identification_number' => 1233,
            'role_id' => 2,
            'status' => 'Active',
            'birth_date' => '2025-05-06',
            'address' => 'Jl.Moh toha',
            'image_path' => 'png',
        ]);

        User::create([
            'class_id' => 2,
            'name' => 'Zaskia Sungkar',
            'email' => 'zaskia@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => 892849272,
            'identification_number' => 789879,
            'role_id' => 3,
            'status' => 'Active',
            'birth_date' => '2025-02-02',
            'address' => 'Jl.Sunda 23',
            'image_path' => 'png',
        ]);

        User::create([
            'class_id' => null,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => 123456789,
            'identification_number' => 123456,
            'role_id' => 1,
            'status' => 'Active',
            'birth_date' => '2025-02-02',
            'address' => 'Jl.Sunda 23',
            'image_path' => 'png',
        ]);


    }
}
