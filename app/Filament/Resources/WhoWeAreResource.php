<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhoWeAreResource\Pages;
use App\Models\WhoWeAre;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WhoWeAreResource extends Resource
{
    use  Translatable;

    protected static ?string $model = WhoWeAre::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = "Who We Are";
    protected static ?string $modelLabel = "Who We Are";
    protected static ?string $pluralModelLabel = "Who We Are";


    protected static ?string $navigationGroup = "About Us";
    protected static ?int $navigationSort = 1;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('General Informations')
                            ->icon('heroicon-o-chat-bubble-bottom-center-text')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label("Title")
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('body')
                                    ->label("Body")
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image')
                                    ->label("Image")
                                    ->image()
                                    ->required()
                                    ->directory('whoWeAre')
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('Features')
                            ->icon('heroicon-o-document-chart-bar')
                            ->schema([
                                Forms\Components\Repeater::make('features')
                                    ->label("Features")
                                    ->defaultItems(0)
                                    ->grid(3)
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label("Title")
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('number')
                                            ->label("Number")
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\FileUpload::make('image')
                                            ->label("Image")
                                            ->image()
                                            ->required()
                                            ->columnSpan('full')
                                            ->nullable(false)
                                            ->disk('public')
                                            ->directory('articles')
                                            ->visibility('public')
                                            ->imageEditor(),
                                    ]),
                            ]),
                        Tabs\Tab::make('Banner')
                            ->icon('heroicon-o-cursor-arrow-ripple')
                            ->schema([
                                Forms\Components\TextInput::make('banner_title')
                                    ->label("Title")
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('banner_description')
                                    ->label("Description")
                                    ->required()
                                    ->maxLength(255),

                            ]),
                        Tabs\Tab::make('Why Choose Us')
                            ->icon('heroicon-o-user-group')
                            ->schema([
                                Forms\Components\Repeater::make('why_choose_us')
                                    ->label("Why Choose Us")
                                    ->defaultItems(0)
                                    ->grid(3)
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label("Title")
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                            ]),
                    ])
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('features')
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->getStateUsing(function (WhoWeAre $record) {
                        $features = [];
                        foreach ($record->features as $feature) {
                            $features[] = $feature["title"];
                        }
                        return $features;
                    }),
                Tables\Columns\TextColumn::make('why_choose_us')
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->color("success")
                    ->getStateUsing(function (WhoWeAre $record) {
                        $why_choose_us_array = [];
                        foreach ($record->why_choose_us as $why_choose_us) {
                            $why_choose_us_array[] = $why_choose_us["title"];
                        }
                        return $why_choose_us_array;
                    }),

                Tables\Columns\TextColumn::make('banner_title')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color("danger")
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('banner_description')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color("warning")
                    ->toggleable(isToggledHiddenByDefault: true),

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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListWhoWeAres::route('/'),
            'create' => Pages\CreateWhoWeAre::route('/create'),
            'edit' => Pages\EditWhoWeAre::route('/{record}/edit'),
        ];
    }
}
