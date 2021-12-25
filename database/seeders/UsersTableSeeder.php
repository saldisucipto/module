<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // make data for User
        DB::table('users')->insert([
            'name' => 'Saldi Sucipto',
            'email' => 'saldi@module.com',
            'password' => Hash::make('password')
        ]);
    }
}
