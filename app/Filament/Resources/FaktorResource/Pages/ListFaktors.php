<?php

namespace App\Filament\Resources\FaktorResource\Pages;

use App\Filament\Resources\FaktorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaktors extends ListRecords
{
    protected static string $resource = FaktorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
