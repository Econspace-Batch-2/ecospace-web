<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubjectResource\Pages;
use App\Filament\Resources\SubjectResource\RelationManagers;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubjectResource extends Resource
{
    protected static ?string $model = Subject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('image'),
                Forms\Components\TextInput::make('tutor'),
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('majors')->required(),
                Forms\Components\TextInput::make('category')->required(),
                Forms\Components\TextInput::make('semester')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\Textarea::make('references')->required(),
                Forms\Components\Select::make('subject_univ')
                    ->multiple()
                    ->options([
                        'ugm.svg' => 'UGM',
                        'unair.svg' => 'UNAIR',
                        'ub.svg' => 'UB',
                        'ui.svg' => 'UI',
                        'unj.svg' => 'UNJ',
                    ])
                    ->required()
                    ->saveRelationshipsUsing(function ($component, $state) {
                        return json_encode($state);
                    }),
                Forms\Components\Select::make('univ')
                    ->multiple()
                    ->options([
                        'UGM' => 'UGM',
                        'UNAIR' => 'UNAIR',
                    ])
                    ->required()
                    ->saveRelationshipsUsing(function ($component, $state) {
                        return json_encode($state);
                    }),
                Forms\Components\Select::make('status')->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                ])->required(),
                Forms\Components\TextInput::make('appointlet_url')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('image'),
                TextColumn::make('tutor'),
                TextColumn::make('title'),
                TextColumn::make('majors'),
                TextColumn::make('category'),
                TextColumn::make('semester'),
                TextColumn::make('description'),
                TextColumn::make('references'),
                TextColumn::make('subject_univ'),
                TextColumn::make('univ'),
                TextColumn::make('status'),
                TextColumn::make('appointlet_url'),
                TextColumn::make('created_at')->dateTime(),
                TextColumn::make('updated_at')->dateTime(),
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
            'index' => Pages\ListSubjects::route('/'),
            'create' => Pages\CreateSubject::route('/create'),
            'edit' => Pages\EditSubject::route('/{record}/edit'),
        ];
    }
}
