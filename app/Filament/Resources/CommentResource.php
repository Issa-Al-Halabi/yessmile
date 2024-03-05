<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Article;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Concerns\Translatable;

class CommentResource extends Resource
{
    use Translatable;

    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left-ellipsis';
    protected static ?string $navigationGroup = "Articles";
    protected static ?string $navigationLabel = "Comments";
    protected static ?string $modelLabel = "Comments";
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('article_id')
                    ->label("Article")
                    ->getOptionLabelFromRecordUsing(fn (Article $record, $livewire) => $record->getTranslation('title', $livewire->activeLocale))
                    ->required()
                    ->relationship("article", "title"),
                Forms\Components\TextInput::make('name')
                    ->label("Name")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label("Email")
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('date')
                    ->label("Date")
                    ->required()
                    ->default(now()),
                Forms\Components\RichEditor::make('comment')
                    ->label("Comment")
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('article.title')
                    ->label("Article")
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label("Name")
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label("Email")
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->label("Date")
                    ->sortable(),
                Tables\Columns\TextColumn::make('comment')
                    ->label("Comment")
                    ->html(),
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
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
