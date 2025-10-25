<?php

namespace Modules\Property\Filament\Clusters\Property\Resources\Venues;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Property\Filament\Clusters\Property\PropertyCluster;
use Modules\Property\Filament\Clusters\Property\Resources\Venues\Pages\CreateVenue;
use Modules\Property\Filament\Clusters\Property\Resources\Venues\Pages\EditVenue;
use Modules\Property\Filament\Clusters\Property\Resources\Venues\Pages\ListVenues;
use Modules\Property\Filament\Clusters\Property\Resources\Venues\Schemas\VenueForm;
use Modules\Property\Filament\Clusters\Property\Resources\Venues\Tables\VenuesTable;
use Modules\Property\Models\Venue;

class VenueResource extends Resource
{
    protected static ?string $model = Venue::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHomeModern;

    protected static ?string $cluster = PropertyCluster::class;

    protected static ?string $recordTitleAttribute = 'venue';

    public static function form(Schema $schema): Schema
    {
        return VenueForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VenuesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVenues::route('/'),
            'create' => CreateVenue::route('/create'),
            'edit' => EditVenue::route('/{record}/edit'),
        ];
    }
}
