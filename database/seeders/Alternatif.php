<?php

namespace Database\Seeders;

use App\Models\Alternatif as ModelsAlternatif;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Alternatif extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['alternatif' => 'Oscar'],
            ['alternatif' => 'Alfian'],
            ['alternatif' => 'Hilmi'],
        ];

        foreach ($data as $item) {
            ModelsAlternatif::create($item);
        }
    }
}
