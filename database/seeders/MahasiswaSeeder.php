<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mahasiswas')->insert([
            'user_id' => 1,
            'prodi_id' => 3,
            'nim' => 'J3C205003',
            'jenis_kelamin' => 'Pria',
            'hp' => '085782208246',
            'kelas' => 'A1'
        ]);
    }
}
