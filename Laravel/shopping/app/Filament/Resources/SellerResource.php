<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SellerResource\Pages;
use App\Filament\Resources\SellerResource\RelationManagers;
use App\Models\Seller;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SellerResource extends Resource
{
    protected static ?string $model = Seller::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('seller_details')->schema([
                        TextInput::make('seller_details.first_name')->required(),
                        TextInput::make('seller_details.last_name'),
                        Textarea::make('seller_details.address'),
                        TextInput::make('seller_details.email'),
                        TextInput::make('seller_details.mobile'),
                        DatePicker::make('seller_details.dob'),
                ]),

                Section::make('seller_documents')->schema([

                    Repeater::make('seller_documents')->schema([

                        TextInput::make('points'),

                        // FileUpload::make('aadhar')->image()
                        // Select::make('seller_documents.proof')->options([
                        //     'aadhar'=>"AADHAR Card",
                        //     'pan'=>"PAN Card",
                        //     'passbook'=>"Pass Book",
                        //     'gst_certificate'=>"GST",
                        //     'coi'=>"COI",
                        //     'photo'=>"Photo",
                        //     'last_degree'=>"Last Education",
                        // ]),
                        // FileUpload::make('seller_documents.file')
                    ])
                ]),





                // TextInput::make('seller_details'),

                // TextInput::make('seller_documents'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSellers::route('/'),
            'create' => Pages\CreateSeller::route('/create'),
            'edit' => Pages\EditSeller::route('/{record}/edit'),
        ];
    }
}

// [{"seller_documents":{"proof":"aadhar","file":"pCehd0d8zs7Ae39CQZgP6JhMoWKBIk-metaMFNSUy5wZGY=-.pdf"}},{"seller_documents":{"proof":"pan","file":"vTS8ol9gleXWdWmMG7yySH2fuCWATo-metaMTY5NTg2OTQyNTY1MTRlOWYxMTQzNDBiaXJkLWNvbG9yZnVsLWxvZ28tZ3JhZGllbnQtdmVjdG9yXzM0MzY5NC0xMzY1LmF2aWY=-.avif"}},{"seller_documents":{"proof":"passbook","file":"Igp8zark2cdnHK7mrlUmdngIfZTRIU-metabGlnaHRuaW5nXy1fMjgwNjcgKE9yaWdpbmFsKS5tcDQ=-.mp4"}},{"seller_documents":{"proof":"last_degree","file":"3zkRx6rZBD5LtePRQi9RizzdKpXloG-metaUGl6emEtMzAwNzM5NS5qcGc=-.jpg"}}]
