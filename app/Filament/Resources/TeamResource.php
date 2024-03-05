<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    use Translatable;
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = "Teams";
    protected static ?string $modelLabel = "Team";

    protected static ?string $navigationGroup = "About";
    protected static ?int $navigationSort = 2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('General Informations')
                            ->icon('heroicon-o-chat-bubble-bottom-center-text')
                            ->schema([

                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('job_title')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\FileUpload::make('image')
                                    ->label("Image")
                                    ->image()
                                    ->required()
                                    ->columnSpan('full')
                                    ->nullable(false)
                                    ->disk('public')
                                    ->directory('team')
                                    ->visibility('public')
                                    ->imageResizeMode('force')
                                    ->imageCropAspectRatio('8:5')
                                    ->imageResizeTargetWidth('800')
                                    ->imageResizeTargetHeight('500')
                                    ->imageEditor(),

                            ])->columns(2),
                        Tabs\Tab::make('Work History')
                            ->icon('heroicon-o-briefcase')
                            ->schema([
                                Forms\Components\Repeater::make('work_history')
                                    ->defaultItems(1)
                                    ->grid(3)
                                    ->schema([
                                        Forms\Components\TextArea::make('text')
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                            ]),
                        Tabs\Tab::make('specialities')
                            ->icon('heroicon-o-chat-bubble-left-ellipsis')
                            ->schema([
                                Forms\Components\Repeater::make('specialist')
                                    ->defaultItems(1)
                                    ->grid(3)
                                    ->schema([
                                        Forms\Components\TextArea::make('speciality')
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
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('work_history')
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->getStateUsing(function (Team $record) {
                        $returnedArray = [];
                        foreach ($record->work_history as $work_history) {
                            $returnedArray[] = $work_history["text"];
                        }
                        return $returnedArray;
                    }),
                Tables\Columns\TextColumn::make('specialist')
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->color("success")
                    ->getStateUsing(function (Team $record) {
                        $returnedArray = [];
                        foreach ($record->specialist as $speciality) {
                            $returnedArray[] = $speciality["speciality"];
                        }
                        return $returnedArray;
                    }),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
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
