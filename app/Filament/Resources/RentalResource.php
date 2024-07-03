<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RentalResource\Pages;
use App\Filament\Resources\RentalResource\RelationManagers;
use App\Models\Rental;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RentalResource extends Resource
{
    protected static ?string $model = Rental::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('bus_id')->label('Bus')->relationship('bus', 'name')->required(),
                Select::make('user_id')->label('Customer')->relationship('user', 'name')->required(),
                TimePicker::make('pickup_time')->label('Pickup Time')->required()->default('08:00'),
                DatePicker::make('start_date')->label('Start Date')->required()->default(now())->native(false),
                DatePicker::make('end_date')->label('End Date')->required()->native(false),
                TextInput::make('pickup_location')->label('Pickup Location')->required(),
                TextInput::make('destination')->label('Destination')->required(),
                Select::make('status')->label('Status')->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'declined' => 'Declined',
                ])->required(),
                Select::make('payment_status')->label('Payment Status')->options([
                    'unpaid' => 'Unpaid',
                    'paid' => 'Paid',
                ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('Customer')->searchable(),
                TextColumn::make('bus.name')->label('Bus')->searchable(),
                TextColumn::make('pickup_time')->searchable(),
                TextColumn::make('start_date')->searchable(),
                TextColumn::make('end_date')->searchable(),
                TextColumn::make('pickup_location')->searchable(),
                TextColumn::make('destination')->searchable(),
                TextColumn::make('status')->searchable()->badge()->color(fn (string $state): string => match ($state) {
                    'pending' => 'warning',
                    'approved' => 'success',
                    'declined' => 'danger',
                }),
                TextColumn::make('payment_status')->searchable()->color(fn (string $state): string => match ($state) {
                    'unpaid' => 'danger',
                    'paid' => 'success',
                })->icon(fn (string $state): string => match ($state) {
                    'unpaid' => 'heroicon-c-x-circle',
                    'paid' => 'heroicon-m-check-circle',
                }),
            ])
            ->filters([
                SelectFilter::make('status')->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'declined' => 'Declined',
                ]),
                SelectFilter::make('payment_status')->options([
                    'unpaid' => 'Unpaid',
                    'paid' => 'Paid',
                ])
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
            'index' => Pages\ListRentals::route('/'),
            'create' => Pages\CreateRental::route('/create'),
            'edit' => Pages\EditRental::route('/{record}/edit'),
        ];
    }
}
