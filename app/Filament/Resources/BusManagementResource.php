<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BusManagementResource\Pages;
use App\Filament\Resources\BusManagementResource\RelationManagers;
use App\Models\Bus;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BusManagementResource extends Resource
{
    protected static ?string $model = Bus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('plate_number')->required(),
                TextInput::make('capacity')->label('Passanger Capacity')->required()->numeric()->maxValue(100),
                TextInput::make('price_per_day')->required()->numeric()->mask(RawJs::make('$money($input)'))->stripCharacters(',')->prefix('Rp'),
                Select::make('transmission')->options([
                    'automatic' => 'Automatic',
                    'manual' => 'Manual',
                ]),
                Select::make('fuel_type')->options([
                    'petrol' => 'Petrol',
                    'diesel' => 'Diesel',
                    'electric' => 'Electric',
                ]),
                FileUpload::make('image')->image()->directory('buses')->required(),
                Textarea::make('description')->nullable()->rows(3),
                CheckboxList::make('facilities')->relationship(titleAttribute: 'name')->required()->columns(4)->columnSpanFull()->bulkToggleable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Image'),
                TextColumn::make('name')->searchable(),
                TextColumn::make('plate_number')->searchable(),
                TextColumn::make('capacity')->searchable(),
                TextColumn::make('transmission')->searchable(),
                TextColumn::make('fuel_type')->searchable(),
                TextColumn::make('price_per_day')->searchable()->money('IDR'),
                TextColumn::make('description')->searchable(),
                TextColumn::make('facilities.name')->searchable(),
            ])
            ->filters([
                SelectFilter::make('transmission')->options([
                    'automatic' => 'Automatic',
                    'manual' => 'Manual',
                ]),
                SelectFilter::make('fuel_type')->options([
                    'petrol' => 'Petrol',
                    'diesel' => 'Diesel',
                    'electric' => 'Electric',
                ]),
                SelectFilter::make('facilities')->relationship('facilities', 'name')->multiple()->preload(),
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
            'index' => Pages\ListBusManagement::route('/'),
            'create' => Pages\CreateBusManagement::route('/create'),
            'edit' => Pages\EditBusManagement::route('/{record}/edit'),
        ];
    }
}
