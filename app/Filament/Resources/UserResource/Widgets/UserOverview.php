<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UserOverview extends BaseWidget
{
    protected static ?string $pollingInterval = null;

    protected $listeners = ['updateUserOverview' => '$refresh'];

    protected function getCards(): array
    {
        $usersCount = User::selectRaw('
            count(*) as total,
            SUM(CASE WHEN is_admin THEN 1 ELSE 0 END) AS admin,
            SUM(CASE WHEN is_active THEN 1 ELSE 0 END) AS active
        ')->first();

        return [
            Card::make('Total', $usersCount->total)
                ->color('primary')
                ->description('Total users'),

            Card::make('Admin', $usersCount->admin)
                ->color('danger')
                ->description('Admin users'),

            Card::make('Active', $usersCount->active)
                ->color('success')
                ->description('Active users'),
        ];
    }
}
