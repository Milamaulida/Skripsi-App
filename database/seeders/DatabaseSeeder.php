<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Tambahkan ini!
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'maulidamila07@gmail.com')->first();
        if ($user) {
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}
