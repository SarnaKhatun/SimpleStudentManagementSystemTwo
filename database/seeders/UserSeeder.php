<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::insert([
           'name' => 'Sarna Hasan',
           'email' => 'sarnahasan@gmail.com',
           'password' => bcrypt('12345678'),
            'access_label' => 1,
        ]);
    }
}
