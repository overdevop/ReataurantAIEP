<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'nombre' => 'root',
            'email' => Str::random(10) . '@gmail.com',
            'password' => bcrypt('root'),
            'idRol' => 1,
        ]);
    }
}
