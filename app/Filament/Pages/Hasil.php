<?php

namespace App\Filament\Pages;

use App\Models\Aspek;
use App\Models\Bobot;
use App\Models\Faktor;
use App\Models\Sample;
use Filament\Pages\Page;

class Hasil extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.hasil';
    public function PM()
    {
        // Mendapatkan semua data dari tabel pm_aspek
        $aspekData = Aspek::all();
        $aspek = [];

        // Mengisi array dengan data dari tabel pm_aspek
        foreach ($aspekData as $row) {
            $aspek[$row->id_aspek] = [
                $row->aspek,
                $row->prosentase,
                $row->bobot_core,
                $row->bobot_secondary,
            ];
        }

        // Mendapatkan semua data dari tabel pm_faktor
        $faktorData = Faktor::all();
        $faktor = [];

        // Mengisi array dengan data dari tabel pm_faktor
        foreach ($faktorData as $row) {
            $faktor[$row->id_faktor] = [
                $row->id_aspek,
                $row->faktor,
                $row->target,
                $row->type,
            ];
        }
        // Mendapatkan semua data aspek dan faktor dari tabel pm_aspek dan pm_faktor
        $aspekData = Aspek::with('faktor')->orderBy('id')->get();

        $aspek = [];
        $faktor = [];

        // Mengisi array dengan data yang didapat
        foreach ($aspekData as $row) {
            $aspek[$row->id_aspek] = [
                $row->aspek,
                $row->prosentase,
                $row->bobot_core,
                $row->bobot_secondary,
            ];

            foreach ($row->faktor as $faktorItem) {
                $faktor[$faktorItem->id_faktor] = [
                    $faktorItem->id_aspek,
                    $faktorItem->faktor,
                    $faktorItem->target,
                    $faktorItem->type,
                ];
            }
        }
        // Mendapatkan semua data dari tabel pm_bobot
        $bobotData = Bobot::all();

        $bobot = [];

        // Mengisi array dengan data yang didapat
        foreach ($bobotData as $row) {
            $bobot[$row->selisih] = [
                'selisih' => $row->selisih,
                'bobot' => $row->bobot,
                'keterangan' => $row->keterangan,
            ];
        }
        // Mendapatkan semua data sample dari tabel pm_sample dengan menggabungkannya dengan pm_alternatif
        $samplesData = Sample::with('alternatif', 'faktor')
            ->orderBy('id_alternatif')
            ->orderBy('id_faktor')
            ->get();

        $sample = [];

        // Mengisi array dengan data yang didapat
        foreach ($samplesData as $row) {
            $alternatifName = $row->alternatif->alternatif; // Mendapatkan nama alternatif/kandidat

            if (!isset($sample[$alternatifName])) {
                $sample[$alternatifName] = [];
            }

            $sample[$alternatifName][$row->id_faktor] = $row->value;
        }
        // Mendapatkan data sample dari tabel pm_sample dan faktor dari tabel pm_faktor
        $samplesData = Sample::with('alternatif', 'faktor')
            ->orderBy('id_alternatif')
            ->orderBy('id_faktor')
            ->get();

        $faktorData = Faktor::all();

        // Menyiapkan variabel penampung berupa array untuk gap
        $gap = [];

        // Melakukan iterasi perhitungan gap untuk setiap data $samplesData yang ada
        foreach ($samplesData as $sample) {
            $alternatifName = $sample->alternatif->alternatif; // Nama alternatif/kandidat
            $gap[$alternatifName] = [];

            // Melakukan iterasi untuk menghitung gap dari setiap faktor yang ada
            foreach ($faktorData as $faktor) {
                $gap[$alternatifName][$faktor->id_faktor] = $sample->value - $faktor->target;
            }
        }
        // Mendapatkan data bobot dari tabel pm_bobot
        $bobotData = Bobot::all();

        // Menyiapkan variabel penampung berupa array untuk terbobot
        $terbobot = [];

        // Melakukan iterasi pembobotan untuk setiap data $gap yang ada
        foreach ($gap as $alternatifName => $data) {
            $terbobot[$alternatifName] = [];

            // Melakukan iterasi untuk pembobotan gap dari setiap faktor yang ada
            foreach ($data as $id_faktor => $value) {
                if (isset($bobot[$value])) {
                    $terbobot[$alternatifName][$id_faktor] = $bobot[$value];
                } else {
                    // Handle jika nilai gap tidak ditemukan dalam $bobot
                    $terbobot[$alternatifName][$id_faktor] = null; // Atau sesuaikan dengan kebutuhan penanganan error
                }
            }
        }
        // Menyiapkan variabel penampung berupa array $hasil
        $hasil = [];

        // Melakukan iterasi untuk setiap alternatif/kandidat
        foreach ($terbobot as $alternatifName => $data) {
            $core = [];
            $secondary = [];

            // Melakukan iterasi untuk setiap faktor
            foreach ($data as $id_faktor => $value) {
                // Ambil data faktor menggunakan Eloquent
                $faktor = Faktor::find($id_faktor); // Sesuaikan dengan cara pengambilan data faktor yang sesuai

                if (!$faktor) {
                    continue; // Skip faktor jika tidak ditemukan
                }

                $id_aspek = $faktor->id_aspek;

                // Inisialisasi $core[$id_aspek] dan $secondary[$id_aspek] jika belum ada
                if (!isset($core[$id_aspek])) {
                    $core[$id_aspek] = [];
                    $secondary[$id_aspek] = [];
                }

                // Memisahkan nilai core dan secondary factor
                if ($faktor->type == 'core') {
                    $core[$id_aspek][] = $value;
                } else {
                    $secondary[$id_aspek][] = $value;
                }
            }

            // Menghitung nilai total untuk setiap aspek utk masing-masing alternatif/kandidat
            foreach ($aspek as $id_aspek => $value) {
                $coreSum = isset($core[$id_aspek]) ? array_sum($core[$id_aspek]) / count($core[$id_aspek]) : 0;
                $secondarySum = isset($secondary[$id_aspek]) ? array_sum($secondary[$id_aspek]) / count($secondary[$id_aspek]) : 0;

                // Menghitung nilai hasil berdasarkan bobot core dan secondary
                $hasil[$alternatifName][$id_aspek] = $coreSum * $value[2] / 100 + $secondarySum * $value[3] / 100;
            }
            
        }
    }
}
