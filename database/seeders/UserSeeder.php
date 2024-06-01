<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([  
            'name' => 'Victor Arana Suarez',
            'email' => 'victorarana@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(49)->create();
    }
}
