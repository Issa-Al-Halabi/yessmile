<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsultationRequestResource\Pages;
use App\Filament\Resources\ConsultationRequestResource\RelationManagers;
use App\Models\ConsultationRequest;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConsultationRequestResource extends Resource
{
    protected static ?string $model = ConsultationRequest::class;

    use  Translatable;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Consultation details')
                            ->schema([
                                Forms\Components\TextInput::make('patient_name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('age')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('country')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('diagnose_description')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('images')
                            ->schema([
                                Forms\Components\FileUpload::make('images')
                                    ->required()
                                    ->multiple()
                                    ->image()
                                    ->imageEditor(),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('patient_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('age')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('diagnose_description')
                    ->searchable()
                    ->html()
                    ->toggledHiddenByDefault(false),
                Tables\Columns\ImageColumn::make('images')

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
            'index' => Pages\ListConsultationRequests::route('/'),
            'create' => Pages\CreateConsultationRequest::route('/create'),
            'edit' => Pages\EditConsultationRequest::route('/{record}/edit'),
        ];
    }
}
