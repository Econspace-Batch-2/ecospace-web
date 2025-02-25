<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PurchaseResource\Pages;
use App\Filament\Resources\PurchaseResource\RelationManagers;
use App\Models\Purchase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Nette\Utils\ImageColor;

class PurchaseResource extends Resource
{
    protected static ?string $model = Purchase::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('university')->label('University')->required(),
                Forms\Components\TextInput::make('appointlet_proof')->label('Appointlet Proof')->required(),
                Forms\Components\TextInput::make('name')->label('Name')->required(),
                Forms\Components\TextInput::make('major')->label('Major')->required(),
                Forms\Components\TextInput::make('whatsapp_link')->label('Whatsapp Link')->required(),
                Forms\Components\TextInput::make('email')->label('Email')->required(),
                Forms\Components\TextInput::make('lecturer_name')->label('Lecturer Name')->required(),
                Forms\Components\TextInput::make('payment_proof')->label('Payment Proof')->required(),
                Forms\Components\TextInput::make('user_id')->label('User Id')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('university'),
                ImageColumn::make('appointlet_proof')
                    ->width(270)
                    ->height(480)
                    ->openUrlInNewTab(),
                TextColumn::make('name'),
                TextColumn::make('major'),
                TextColumn::make('whatsapp_link'),
                TextColumn::make('email'),
                TextColumn::make('lecturer_name'),
                ImageColumn::make('payment_proof')
                    ->width(270)
                    ->height(480)
                    ->openUrlInNewTab(),
                TextColumn::make('user_id'),
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
            'index' => Pages\ListPurchases::route('/'),
            'create' => Pages\CreatePurchase::route('/create'),
            'edit' => Pages\EditPurchase::route('/{record}/edit'),
        ];
    }
}
