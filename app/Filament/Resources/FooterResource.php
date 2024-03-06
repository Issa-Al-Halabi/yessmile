<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Filament\Resources\FooterResource\RelationManagers;
use App\Models\Footer;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = "Setting";
    protected static ?string $pluralModelLabel = "Setting";
    protected static ?string $modelLabel = "Setting";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('General Informations')
                            ->icon('heroicon-o-chat-bubble-bottom-center-text')
                            ->schema([
                                Forms\Components\TextInput::make('phone')
                                    ->tel()
                                    ->numeric()
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                            ])->columns(2),
                        Tabs\Tab::make('Location')
                            ->icon('heroicon-o-map-pin')
                            ->schema([
                                Forms\Components\TextInput::make('lat')
                                    ->numeric()
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('lang')
                                    ->numeric()
                                    ->required()
                                    ->maxLength(255),
                            ])->columns(2),
                        Tabs\Tab::make('Book Now Section')
                            ->icon('heroicon-o-globe-europe-africa')
                            ->schema([
                                Forms\Components\Repeater::make('book_now')
                                    ->grid(3)
                                    ->defaultItems(0)
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label("title")
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('link')
                                            ->label("Link")
                                            ->url()
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                            ]),
                        Tabs\Tab::make('socials')
                            ->icon('heroicon-o-at-symbol')
                            ->schema([
                                Forms\Components\Repeater::make('socials')
                                    ->defaultItems(0)
                                    ->schema([
                                        Forms\Components\FileUpload::make('image')
                                            ->label("Image")
                                            ->image()
                                            ->required()
                                            ->columnSpan('full')
                                            ->nullable(false)
                                            ->disk('public')
                                            ->directory('footer')
                                            ->visibility('public')
                                            ->imageResizeMode('force')
                                            ->imageCropAspectRatio('8:5')
                                            ->imageResizeTargetWidth('800')
                                            ->imageResizeTargetHeight('500')
                                            ->imageEditor(),
                                        Forms\Components\TextInput::make('link')
                                            ->label("Link")
                                            ->url()
                                            ->required()
                                            ->maxLength(255),
                                    ])->grid(3),
                            ]),
                    ])
                    ->columnSpan('full'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('socials.0.image')
                    ->label("socials")
                    ->getStateUsing(function (Footer $record) {
                        $images = [];
                        foreach ($record->socials as $social) {
                            $images[] = $social["image"];
                        }
                        return $images;
                    }),

                Tables\Columns\TextColumn::make('book_now.0')
                    ->label("Book Now Section")
                    ->badge()
                    ->getStateUsing(function (Footer $record) {
                        $titles = [];
                        foreach ($record->book_now as $book_now) {
                            $titles[] = $book_now["title"];
                        }
                        return $titles;
                    }),
                Tables\Columns\TextColumn::make('lat')
                    ->badge()
                    ->color("danger")
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('lang')
                    ->badge()
                    ->color("danger")
                    ->sortable()
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
