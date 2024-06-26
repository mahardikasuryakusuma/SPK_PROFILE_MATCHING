<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AspekResource\Pages;
use App\Filament\Resources\AspekResource\RelationManagers;
use App\Models\Aspek;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AspekResource extends Resource
{
    protected static ?string $model = Aspek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('aspek')->required(),
                    TextInput::make('presentase')->integer()->required(),
                    TextInput::make('bobot_core')->integer()->required(),
                    TextInput::make('bobot_secondary')->integer()->required(),
                ])->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('aspek'),
                TextColumn::make('presentase'),
                TextColumn::make('bobot_core'),
                TextColumn::make('bobot_secondary')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAspeks::route('/'),
            'create' => Pages\CreateAspek::route('/create'),
            'edit' => Pages\EditAspek::route('/{record}/edit'),
        ];
    }
}
