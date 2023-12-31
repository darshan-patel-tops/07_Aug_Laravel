<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                ->options(
                                Category::all()->pluck('category.category_name','id')
                ),
                Select::make('brand_id')
                ->options(
                                // Brand::all()->pluck('brand.brand_name','id')
                                Brand::where('category_id','1')->pluck('brand[brand_name]','id')
                ),
                 Section::make('Product Description')->statePath('products')->schema([
                TextInput::make('name'),
                TextInput::make('price'),
                TextInput::make('description'),
                TextInput::make('quantity'),
                FileUpload::make('image')->image(),])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.category.category_name'),
                TextColumn::make('brand.brand_name'),
                TextColumn::make('name'),
                TextColumn::make('price'),
                TextColumn::make('quantity'),
                ImageColumn::make('image'),
                TextColumn::make('description'),
                ToggleColumn::make('visible')
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
