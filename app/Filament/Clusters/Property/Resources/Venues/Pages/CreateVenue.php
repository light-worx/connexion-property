<?php

namespace Modules\Property\Filament\Clusters\Property\Resources\Venues\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Property\Filament\Clusters\Property\Resources\Venues\VenueResource;

class CreateVenue extends CreateRecord
{
    protected static string $resource = VenueResource::class;
}
