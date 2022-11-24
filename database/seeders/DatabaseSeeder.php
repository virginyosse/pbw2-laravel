<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'fullname' => 'Tes AJa',
            'password' => Hash::make("123"),
            'username' => 'tes',
            'address' => 'bdg',
            'phonenumber' => '081111111',
            'agama' => 'tes agama',
            'jeniskelamin' => 1
        ]);
    }
}
