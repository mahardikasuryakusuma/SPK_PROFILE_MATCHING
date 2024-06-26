<?php

namespace App\Filament\Resources\FaktorResource\Pages;

use App\Filament\Resources\FaktorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFaktor extends EditRecord
{
    protected static string $resource = FaktorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
