<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopicResource\Pages;
use App\Filament\Resources\TopicResource\RelationManagers;
use App\Models\Topic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TopicResource extends Resource
{
    protected static ?string $model = Topic::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('topic_number')
                    ->label('Topic Number')
                    ->required(),
                Forms\Components\TextInput::make('topic_title')
                    ->label('Topic Title')
                    ->required(),
                Forms\Components\Textarea::make('topic_content')
                    ->label('Topic Content')
                    ->required(),
                Forms\Components\Textarea::make('topic_objective')
                    ->label('Topic Objective')
                    ->required(),
                Forms\Components\Select::make('subject_id')
                    ->label('Subject')
                    ->relationship('subjects', 'title')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('topic_number')->label('Topic Number'),
                TextColumn::make('topic_title')->label('Topic Title'),
                TextColumn::make('topic_content')->label('Topic Content'),
                TextColumn::make('topic_objective')->label('Topic Objective'),
                TextColumn::make('subject_id')->label('Subject ID'),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
                TextColumn::make('updated_at')->label('Updated At')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTopics::route('/'),
            'create' => Pages\CreateTopic::route('/create'),
            'edit' => Pages\EditTopic::route('/{record}/edit'),
        ];
    }
}
