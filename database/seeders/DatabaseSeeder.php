<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Newbie Laravel',
            'email' => 'chandanv1010@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
