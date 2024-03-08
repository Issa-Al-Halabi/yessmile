<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Filament\Resources\AboutUsResource\RelationManagers;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutUsResource extends Resource
{
    use Translatable;
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = "Home Page";
    protected static ?string $modelLabel = "Home Page";
    protected static ?string $navigationGroup = "Home";
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
                                Section::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label("Title")
                                            ->required()
                                            ->maxLength(255),

                                        Forms\Components\FileUpload::make('image')
                                            ->image()
                                            ->required()
                                            ->label("Image")
                                            ->columnSpan('full')
                                            ->nullable(false)
                                            ->disk('public')
                                            ->directory('about_us')
                                            ->visibility('public')
                                            ->imageResizeMode('force')
                                            ->imageCropAspectRatio('8:5')
                                            ->imageResizeTargetWidth('800')
                                            ->imageResizeTargetHeight('500')
                                            ->imageEditor(),

                                        Forms\Components\RichEditor::make('body')
                                            ->label("Body")
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                        Tabs\Tab::make('Banner')
                            ->icon('heroicon-o-cursor-arrow-ripple')
                            ->schema([
                                Section::make("banner")->schema([
                                    Forms\Components\TextInput::make('banner_title')
                                        ->label("Title")
                                        ->required()
                                        ->columnSpanFull(),
                                    Forms\Components\TextInput::make('banner_button')
                                        ->label("Button Text")
                                        ->required(),
                                    Forms\Components\RichEditor::make('banner_body')
                                        ->label("Body")
                                        ->required()
                                        ->columnSpanFull(),

                                ])

                            ])

                    ])->columnSpanFull(),

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
                Tables\Columns\TextColumn::make('banner_title')
                ->label("Banner Title")
                ->searchable(),
                Tables\Columns\TextColumn::make('banner_button')
                ->label("banner button")
                ->searchable(),
                Tables\Columns\TextColumn::make('banner_body')
                ->label("banner body")
                ->html()
                ->searchable()
                ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('body')
                    ->label("Body")
                    ->html()
                    ->searchable()
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
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
