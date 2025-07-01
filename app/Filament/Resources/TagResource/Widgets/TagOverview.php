<?php

namespace App\Filament\Resources\TagResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Tag;

class TagOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Tags', Tag::all()->count()),
        ];
    }
}
