<?php

namespace Database\Seeders;

use App\Models\Faktor as ModelsFaktor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Faktor extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id_aspek' => 1, 'faktor' => 'Common Sense', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 1, 'faktor' => 'Verbalisasi Ide', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 1, 'faktor' => 'Sistematika Berpikir', 'target' => 4, 'type' => 'core'],
            ['id_aspek' => 1, 'faktor' => 'Penalaran dan Solusi Real', 'target' => 4, 'type' => 'core'],
            ['id_aspek' => 1, 'faktor' => 'Konsentrasi', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 1, 'faktor' => 'Logika Praktis', 'target' => 4, 'type' => 'core'],
            ['id_aspek' => 1, 'faktor' => 'Fleksibilitas Berpikir', 'target' => 4, 'type' => 'core'],
            ['id_aspek' => 1, 'faktor' => 'Imajinasi Kreatif', 'target' => 5, 'type' => 'core'],
            ['id_aspek' => 1, 'faktor' => 'Antisipasi', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 1, 'faktor' => 'Potensi Kecerdasan', 'target' => 4, 'type' => 'core'],
            ['id_aspek' => 2, 'faktor' => 'Energi Psikis', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 2, 'faktor' => 'Ketelitian dan tanggung jawab', 'target' => 4, 'type' => 'core'],
            ['id_aspek' => 2, 'faktor' => 'Kehati-hatian', 'target' => 2, 'type' => 'secondary'],
            ['id_aspek' => 2, 'faktor' => 'Pengendalian Perasaan', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 2, 'faktor' => 'Dorongan Berprestasi', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 2, 'faktor' => 'Vitalitas dan Perencanaan', 'target' => 5, 'type' => 'core'],
            ['id_aspek' => 3, 'faktor' => 'Dominance (Kekuasaan)', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 3, 'faktor' => 'Influences (Pengaruh)', 'target' => 3, 'type' => 'secondary'],
            ['id_aspek' => 3, 'faktor' => 'Steadiness (Keteguhan Hati)', 'target' => 4, 'type' => 'core'],
            ['id_aspek' => 3, 'faktor' => 'Compliance (Pemenuhan)', 'target' => 5, 'type' => 'core'],
        ];

        foreach ($data as $item) {
            ModelsFaktor::create($item);
        }
    }
}
