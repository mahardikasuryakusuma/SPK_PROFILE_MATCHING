<?php

namespace Database\Seeders;

use App\Models\Bobot as ModelsBobot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bobot extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['selisih' => 0, 'bobot' => 5, 'keterangan' => 'Tidak ada selisih (kompetensi sesuai dgn yg dibutuhkan)'],
            ['selisih' => 1, 'bobot' => 4.5, 'keterangan' => 'Kompetensi individu kelebihan 1 tingkat'],
            ['selisih' => -1, 'bobot' => 4, 'keterangan' => 'Kompetensi individu kekurangan 1 tingkat'],
            ['selisih' => 2, 'bobot' => 3.5, 'keterangan' => 'Kompetensi individu kelebihan 2 tingkat'],
            ['selisih' => -2, 'bobot' => 3, 'keterangan' => 'Kompetensi individu kekurangan 2 tingkat'],
            ['selisih' => 3, 'bobot' => 2.5, 'keterangan' => 'Kompetensi individu kelebihan 3 tingkat'],
            ['selisih' => -3, 'bobot' => 2, 'keterangan' => 'Kompetensi individu kekurangan 3 tingkat'],
            ['selisih' => 4, 'bobot' => 1.5, 'keterangan' => 'Kompetensi individu kelebihan 4 tingkat'],
            ['selisih' => -4, 'bobot' => 1, 'keterangan' => 'Kompetensi individu kekurangan 4 tingkat'],
        ];

        foreach ($data as $item) {
            ModelsBobot::create($item);
        }
    }
}
