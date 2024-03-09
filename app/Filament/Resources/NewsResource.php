<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use App\Models\Category;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\Tabs;

class NewsResource extends Resource
{
    use Translatable;
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = "Our World";
    protected static ?int $navigationSort = 4;

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
                                Forms\Components\DateTimePicker::make('date')
                                    ->label("Date")
                                    ->default(now())
                                    ->required(),
                                Forms\Components\Textarea::make('short_description')
                                    ->label("Short Description")
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('long_description')
                                    ->label("Long Description")
                                    ->required()
                                    ->columnSpanFull(),
                            ])->columns(3),
                        Tabs\Tab::make('News Image')
                            ->icon('heroicon-o-document-arrow-up')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label("Image")
                                    ->image()
                                    ->required()
                                    ->columnSpan('full')
                                    ->nullable(false)
                                    ->disk('public')
                                    ->directory('articles')
                                    ->visibility('public')
                                    ->imageResizeMode('force')
                                    ->imageCropAspectRatio('8:5')
                                    ->imageResizeTargetWidth('800')
                                    ->imageResizeTargetHeight('500')
                                    ->imageEditor(),
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
                                            ->directory('articles')
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
                                    ]),
                            ]),
                    ])
                    ->columnSpan('full'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label("Title")
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ImageColumn::make('socials.0.image')
                    ->label("socials")
                    ->getStateUsing(function (News $record) {
                        $images = [];
                        foreach ($record->socials as $social) {
                            $images[] = $social["image"];
                        }
                        return $images;
                    }),
                Tables\Columns\TextColumn::make('date')
                    ->label("Date")
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
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
