<?php

namespace App\Filament\Resources\AspekResource\Pages;

use App\Filament\Resources\AspekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAspek extends EditRecord
{
    protected static string $resource = AspekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
