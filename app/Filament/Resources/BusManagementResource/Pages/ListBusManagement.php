<?php

namespace App\Filament\Resources\BusManagementResource\Pages;

use App\Filament\Resources\BusManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBusManagement extends ListRecords
{
    protected static string $resource = BusManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
