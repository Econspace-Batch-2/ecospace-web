<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Name')->required(),
                TextInput::make('description')->label('Description')->required(),
                DateTimePicker::make('start_date')->label('Start Date')->required(),
                TextInput::make('harga')->label('Harga')->required(),
                DateTimePicker::make('end_date')->label('End Date')->required(),
                TextInput::make('categories')->label('Categories')->required(),
                TextInput::make('event_image')->label('Event Image')->required(),
                TextInput::make('speaker')->label('Speaker')->required(),
                FileUpload::make('speaker_image')
                    ->label('Speaker Image')
                    ->disk('s3')
                    ->directory('speaker_images')
                    ->image()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('name')->label('Name'),
                TextColumn::make('description')->label('Description'),
                TextColumn::make('start_date')->label('Start Date')->dateTime(),
                TextColumn::make('harga')->label('Harga'),
                TextColumn::make('end_date')->label('End Date')->dateTime(),
                TextColumn::make('categories')->label('Categories'),
                TextColumn::make('event_image')->label('Event Image'),
                TextColumn::make('speaker')->label('Speaker'),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
                TextColumn::make('speaker_image')->label('Speaker Image'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
