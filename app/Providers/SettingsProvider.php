<?php

namespace Modules\Property\Providers;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs\Tab;

class SettingsProvider
{
    public function getSettingsTab(): Tab
    {
        return Tab::make('Property')
            ->icon('heroicon-o-home-modern')
            ->schema([
                TextInput::make('property_default_status')
                    ->label('Default Property Status')
                    ->required(),
                TextInput::make('property_contact_email')
                    ->label('Contact Email')
                    ->email(),
            ]);
    }
}
