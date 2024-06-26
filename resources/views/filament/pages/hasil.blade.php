<x-filament-panels::page>

    @php
        $settings = new \App\Filament\Pages\Hasil();
        $results = $settings->PM();
    @endphp
</x-filament-panels::page>
