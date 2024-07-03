<?php

namespace App\Filament\Widgets;

use App\Models\Rental;
use Filament\Widgets\ChartWidget;

class RentalsChart extends ChartWidget
{
    protected static ?string $heading = 'Annual Rentals Chart';

    protected int | string | array $columnSpan = 'full';

    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $data = [
            'January' => 0,
            'February' => 0,
            'March' => 0,
            'April' => 0,
            'May' => 0,
            'June' => 0,
            'July' => 0,
            'August' => 0,
            'September' => 0,
            'October' => 0,
            'November' => 0,
            'December' => 0,
        ];

        // get count of rentals for each month
        $rentals = Rental::all();

        foreach ($rentals as $rental) {
            $month = $rental->created_at->format('F');
            $data[$month]++;
        }

        return [
            'labels' => array_keys($data),
            'datasets' => [
                [
                    'label' => 'Rentals',
                    'data' => array_values($data),
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
