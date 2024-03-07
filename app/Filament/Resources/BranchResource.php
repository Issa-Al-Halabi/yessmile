<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchResource\Pages;
use App\Models\Branch;
use Cheesegrits\FilamentGoogleMaps\Fields\Geocomplete;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Cheesegrits\FilamentGoogleMaps\Columns\MapColumn;

class BranchResource extends Resource
{
    use Translatable;
    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = "About Us";
    protected static ?string $navigationLabel = "Branches";
    protected static ?string $modelLabel = "Branches";
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Geocomplete::make('location')
                    ->isLocation()
                    ->geocodeOnLoad(),
                Map::make('location')
                    ->mapControls([
                        'mapTypeControl'    => true,
                        'scaleControl'      => true,
                        'streetViewControl' => true,
                        'rotateControl'     => true,
                        'fullscreenControl' => true,
                        'searchBoxControl'  => false,
                        'zoomControl'       => false,
                    ])
                    ->height(fn () => '600px')
                    ->defaultZoom(5)
                    ->autocomplete('full_address')
                    ->autocompleteReverse(true)
                    ->reverseGeocode([
                        'street' => '%n %S',
                        'city' => '%L',
                        'state' => '%A1',
                        'zip' => '%z',
                    ])
                    ->debug()
                    ->defaultLocation([34.826610, 38.727261])
                    ->draggable()
                    ->clickable(false)
                    ->geolocate()
                    ->geolocateLabel('Get Location')
                    ->geolocateOnLoad(true, false)
                    ->geoJsonContainsField('geojson')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lat')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('lang')
                    ->badge()
                    ->searchable(),
                MapColumn::make('location')
                    ->extraAttributes([
                        'class' => 'my-funky-class'
                    ])
                    ->extraImgAttributes(
                        fn ($record): array => ['title' => $record->lat . ',' . $record->lang]
                    )
                    ->height('150')
                    ->width('250')
                    ->type('hybrid')
                    ->zoom(15)
                    ->ttl(60 * 60 * 24 * 30),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListBranches::route('/'),
            'create' => Pages\CreateBranch::route('/create'),
            'edit' => Pages\EditBranch::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'warning' : 'primary';
    }
}
