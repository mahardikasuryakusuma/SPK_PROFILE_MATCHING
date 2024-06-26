<?php

namespace App\Filament\Resources\AspekResource\Pages;

use App\Filament\Resources\AspekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAspeks extends ListRecords
{
    protected static string $resource = AspekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
