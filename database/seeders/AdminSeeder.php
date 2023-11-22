<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'alamat' => 'bandung',
            'no_telepon' => '12345',
            'no_sim' => '12345',
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
            'is_admin' => 1,
        ]);
    }
}
