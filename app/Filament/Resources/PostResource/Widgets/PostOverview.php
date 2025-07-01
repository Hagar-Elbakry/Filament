<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Posts', Post::all()->count()),
            Stat::make('Published', Post::where('is_published', true)->count())
                ->description('increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('UnPublished', Post::where('is_published', false)->count())
                ->description('decrease')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger'),
        ];
    }
}
