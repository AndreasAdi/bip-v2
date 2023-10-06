<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Products', Product::count()),
            Stat::make('Categories', Category::count()),
            Stat::make('Sub Categories', Subcategory::count()),
        ];
    }
}
