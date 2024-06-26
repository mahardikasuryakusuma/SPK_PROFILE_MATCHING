<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BobotResource\Pages;
use App\Filament\Resources\BobotResource\RelationManagers;
use App\Models\Bobot;
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

class BobotResource extends Resource
{
    protected static ?string $model = Bobot::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('selisih')->integer()->required(),
                    TextInput::make('bobot')->integer()->required(),
                    TextInput::make('keterangan')->required(),
                ])->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('selisih'),
                TextColumn::make('bobot'),
                TextColumn::make('keterangan'),
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
            'index' => Pages\ListBobots::route('/'),
            'create' => Pages\CreateBobot::route('/create'),
            'edit' => Pages\EditBobot::route('/{record}/edit'),
        ];
    }
}
