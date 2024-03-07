<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutOurTeamResource\Pages;
use App\Filament\Resources\AboutOurTeamResource\RelationManagers;
use App\Models\AboutOurTeam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutOurTeamResource extends Resource
{
    use Translatable;

    protected static ?string $model = AboutOurTeam::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = "About Our Team";

    protected static ?string $modelLabel = "About Our Team";

    protected static ?string $navigationGroup = "About Us";
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('image')
                    ->label("Image")
                    ->image()
                    ->required()
                    ->columnSpan('full')
                    ->nullable(false)
                    ->disk('public')
                    ->directory('aboutteam')
                    ->visibility('public')
                    ->imageResizeMode('force')
                    ->imageCropAspectRatio('8:5')
                    ->imageResizeTargetWidth('800')
                    ->imageResizeTargetHeight('500')
                    ->imageEditor(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->html()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListAboutOurTeams::route('/'),
            'create' => Pages\CreateAboutOurTeam::route('/create'),
            'edit' => Pages\EditAboutOurTeam::route('/{record}/edit'),
        ];
    }
}
