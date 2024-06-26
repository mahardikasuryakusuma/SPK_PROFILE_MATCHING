<?php

namespace Database\Seeders;

use App\Models\Sample as ModelsSample;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Sample extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id_alternatif' => 1, 'id_faktor' => 1, 'value' => 3],
            ['id_alternatif' => 1, 'id_faktor' => 2, 'value' => 5],
            ['id_alternatif' => 1, 'id_faktor' => 3, 'value' => 4],
            ['id_alternatif' => 1, 'id_faktor' => 4, 'value' => 3],
            ['id_alternatif' => 1, 'id_faktor' => 5, 'value' => 4],
            ['id_alternatif' => 1, 'id_faktor' => 6, 'value' => 4],
            ['id_alternatif' => 1, 'id_faktor' => 7, 'value' => 3],
            ['id_alternatif' => 1, 'id_faktor' => 8, 'value' => 5],
            ['id_alternatif' => 1, 'id_faktor' => 9, 'value' => 4],
            ['id_alternatif' => 1, 'id_faktor' => 10, 'value' => 3],
            ['id_alternatif' => 1, 'id_faktor' => 11, 'value' => 1],
            ['id_alternatif' => 1, 'id_faktor' => 12, 'value' => 5],
            ['id_alternatif' => 1, 'id_faktor' => 13, 'value' => 5],
            ['id_alternatif' => 1, 'id_faktor' => 14, 'value' => 5],
            ['id_alternatif' => 1, 'id_faktor' => 15, 'value' => 5],
            ['id_alternatif' => 1, 'id_faktor' => 16, 'value' => 2],
            ['id_alternatif' => 1, 'id_faktor' => 17, 'value' => 3],
            ['id_alternatif' => 1, 'id_faktor' => 18, 'value' => 3],
            ['id_alternatif' => 1, 'id_faktor' => 19, 'value' => 4],
            ['id_alternatif' => 1, 'id_faktor' => 20, 'value' => 5],
            ['id_alternatif' => 2, 'id_faktor' => 1, 'value' => 4],
            ['id_alternatif' => 2, 'id_faktor' => 2, 'value' => 4],
            ['id_alternatif' => 2, 'id_faktor' => 3, 'value' => 3],
            ['id_alternatif' => 2, 'id_faktor' => 4, 'value' => 3],
            ['id_alternatif' => 2, 'id_faktor' => 5, 'value' => 4],
            ['id_alternatif' => 2, 'id_faktor' => 6, 'value' => 3],
            ['id_alternatif' => 2, 'id_faktor' => 7, 'value' => 2],
            ['id_alternatif' => 2, 'id_faktor' => 8, 'value' => 3],
            ['id_alternatif' => 2, 'id_faktor' => 9, 'value' => 3],
            ['id_alternatif' => 2, 'id_faktor' => 10, 'value' => 2],
            ['id_alternatif' => 2, 'id_faktor' => 11, 'value' => 4],
            ['id_alternatif' => 2, 'id_faktor' => 12, 'value' => 2],
            ['id_alternatif' => 2, 'id_faktor' => 13, 'value' => 2],
            ['id_alternatif' => 2, 'id_faktor' => 14, 'value' => 4],
            ['id_alternatif' => 2, 'id_faktor' => 15, 'value' => 5],
            ['id_alternatif' => 2, 'id_faktor' => 16, 'value' => 2],
            ['id_alternatif' => 2, 'id_faktor' => 17, 'value' => 4],
            ['id_alternatif' => 2, 'id_faktor' => 18, 'value' => 5],
            ['id_alternatif' => 2, 'id_faktor' => 19, 'value' => 5],
            ['id_alternatif' => 2, 'id_faktor' => 20, 'value' => 2],
            ['id_alternatif' => 3, 'id_faktor' => 1, 'value' => 3],
            ['id_alternatif' => 3, 'id_faktor' => 2, 'value' => 4],
            ['id_alternatif' => 3, 'id_faktor' => 3, 'value' => 3],
            ['id_alternatif' => 3, 'id_faktor' => 4, 'value' => 3],
            ['id_alternatif' => 3, 'id_faktor' => 5, 'value' => 2],
            ['id_alternatif' => 3, 'id_faktor' => 6, 'value' => 3],
            ['id_alternatif' => 3, 'id_faktor' => 7, 'value' => 4],
            ['id_alternatif' => 3, 'id_faktor' => 8, 'value' => 2],
            ['id_alternatif' => 3, 'id_faktor' => 9, 'value' => 4],
            ['id_alternatif' => 3, 'id_faktor' => 10, 'value' => 4],
            ['id_alternatif' => 3, 'id_faktor' => 11, 'value' => 4],
            ['id_alternatif' => 3, 'id_faktor' => 12, 'value' => 5],
            ['id_alternatif' => 3, 'id_faktor' => 13, 'value' => 5],
            ['id_alternatif' => 3, 'id_faktor' => 14, 'value' => 1],
            ['id_alternatif' => 3, 'id_faktor' => 15, 'value' => 4],
            ['id_alternatif' => 3, 'id_faktor' => 16, 'value' => 1],
            ['id_alternatif' => 3, 'id_faktor' => 17, 'value' => 4],
            ['id_alternatif' => 3, 'id_faktor' => 18, 'value' => 3],
            ['id_alternatif' => 3, 'id_faktor' => 19, 'value' => 4],
            ['id_alternatif' => 3, 'id_faktor' => 20, 'value' => 4],
        ];

        foreach ($data as $item) {
            ModelsSample::create($item);
        }
    }
}
