<?php

namespace Modules\Property\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class PropertyPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Property';
    }

    public function getId(): string
    {
        return 'property';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
