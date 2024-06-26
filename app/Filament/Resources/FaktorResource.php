<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaktorResource\Pages;
use App\Filament\Resources\FaktorResource\RelationManagers;
use App\Models\Faktor;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FaktorResource extends Resource
{
    protected static ?string $model = Faktor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('id_aspek')
                        ->label('Aspek')
                        ->relationship('aspek', 'aspek')
                        ->required(),
                    TextInput::make('faktor')->required(),
                    TextInput::make('target')->integer()->required(),
                    Select::make('type')->options([
                        'core' => 'core',
                        'secondary' => 'secondary'
                    ]),
                ])->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('aspek.aspek')->label('Aspek'),
                TextColumn::make('faktor'),
                TextColumn::make('target'),
                TextColumn::make('type'),
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
            'index' => Pages\ListFaktors::route('/'),
            'create' => Pages\CreateFaktor::route('/create'),
            'edit' => Pages\EditFaktor::route('/{record}/edit'),
        ];
    }
}
