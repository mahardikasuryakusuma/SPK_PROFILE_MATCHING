<?php

namespace Database\Seeders;

use App\Models\Aspek as ModelsAspek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Aspek extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['aspek' => 'Kecerdasan', 'presentase' => 30, 'bobot_core' => 55, 'bobot_secondary' => 45],
            ['aspek' => 'Sikap Kerja', 'presentase' => 30, 'bobot_core' => 55, 'bobot_secondary' => 45],
            ['aspek' => 'Perilaku', 'presentase' => 40, 'bobot_core' => 60, 'bobot_secondary' => 40],
        ];

        foreach ($data as $item) {
            ModelsAspek::create($item);
        }
    }
}
