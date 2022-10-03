<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 0; $i < 10; $i++) {
        # code...
        DB::table('users')->insert([
            'name' => 'Muhammad Hanief',
            'nip' => '197020292005',
            'nim' => '222011686',
            'jurusan' => 'DIV Komputasi Statistik',
            'tahunLulus' => '2024',
            'tempatLahir' => 'Padang',
            'tanggalLahir' => '2001-08-25',
            'nomorPonsel' => '085376470953',
            // 'email' => Str::random(10) . '@gmail.com',
            'email' => 'haniefm19@gmail.com',
            'password' => Hash::make('hanif12345'),
        ]);
        // }
    }
}