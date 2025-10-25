<?php

namespace Modules\Property\Filament\Clusters\Property\Resources\Venues\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Property\Filament\Clusters\Property\Resources\Venues\VenueResource;

class EditVenue extends EditRecord
{
    protected static string $resource = VenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
