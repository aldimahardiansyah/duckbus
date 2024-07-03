<?php

namespace App\Filament\Resources\BusManagementResource\Pages;

use App\Filament\Resources\BusManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBusManagement extends EditRecord
{
    protected static string $resource = BusManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
