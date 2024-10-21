<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('prodis')->insert([
            [
                'kode' => 'A',
                'nama' => 'Komunikasi Digital dan Media'
            ],
            [
                'kode' => 'B',
                'nama' => 'Ekowisata'
            ],
            [
                'kode' => 'C',
                'nama' => 'Teknologi Rekayasa Perangkat Lunak'
            ],
            [
                'kode' => 'D',
                'nama' => 'Teknologi Rekayasa Komputer'
            ]
        ]);
    }
}
