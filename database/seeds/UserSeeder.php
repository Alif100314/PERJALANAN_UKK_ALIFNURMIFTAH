<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nik' => '12345678',
            'name' => 'Alif Nur Miftah',
            'alamat' => 'Jl Sonoan dikit',
            'no_telp' => '08678556',
            'foto' => 'default.png',
            'role' => 'admin',
            'email' => 'alif13@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
