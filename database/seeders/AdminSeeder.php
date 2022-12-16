<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create
        ([
            'name'     => 'Ahmed Nabil',
            'username' => 'ahmednassag',
            'email'    => 'ahmednassag@gmail.com',
            'password' => bcrypt('12345678'),
            'com_code' => 1,
        ]);
    }
}
