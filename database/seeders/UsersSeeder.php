<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nathan Raposo Olivo',
            'email' => 'nathanraposoolivo@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
