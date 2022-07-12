<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'type' => 1,
            'password' => bcrypt('admin')
        ];

        User::create($adminUser);
    }
}
