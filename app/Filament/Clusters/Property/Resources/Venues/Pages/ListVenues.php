<?php

namespace Modules\Property\Filament\Clusters\Property\Resources\Venues\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Property\Filament\Clusters\Property\Resources\Venues\VenueResource;

class ListVenues extends ListRecords
{
    protected static string $resource = VenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
