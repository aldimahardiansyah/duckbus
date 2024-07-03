<?php

namespace App\Filament\Widgets;

use App\Models\Bus;
use App\Models\Rental;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Buses', Bus::count()),
            Stat::make('Total Rentals', Rental::count()),
            Stat::make('Total Customers', Rental::distinct('user_id')->count('user_id')),
            Stat::make('Total Revenue', 'Rp ' . number_format(Rental::sum('total_amount'))),
        ];
    }
}
