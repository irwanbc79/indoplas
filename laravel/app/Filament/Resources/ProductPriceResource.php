<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProductPriceResource\Pages;
use App\Models\ProductPrice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductPriceResource extends Resource {
    protected static ?string $model = ProductPrice::class;
    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Harga Produk';
    protected static ?string $modelLabel = 'Harga';
    protected static ?string $pluralModelLabel = 'Harga Produk';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form {
        return $form->schema([
            Forms\Components\Section::make()->schema([
                Forms\Components\TextInput::make('product_name')->label('Nama Produk')->required()->maxLength(255)->columnSpanFull(),
                Forms\Components\TextInput::make('category')->label('Kategori')->maxLength(100)->placeholder('Kusen, Pintu, Rangka, dll'),
                Forms\Components\TextInput::make('unit')->label('Satuan')->default('meter')->maxLength(50),
                Forms\Components\TextInput::make('price_min')->label('Harga Mulai (Rp)')->numeric()->prefix('Rp'),
                Forms\Components\TextInput::make('price_max')->label('Harga Sampai (Rp)')->numeric()->prefix('Rp'),
                Forms\Components\TextInput::make('note')->label('Catatan')->maxLength(255)->placeholder('misal: tergantung ukuran & model')->columnSpanFull(),
                Forms\Components\TextInput::make('sort_order')->label('Urutan')->numeric()->default(0),
                Forms\Components\Toggle::make('is_active')->label('Tampilkan di Website')->default(true),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table {
        return $table->columns([
            Tables\Columns\TextColumn::make('product_name')->label('Produk')->searchable()->sortable()->weight('bold'),
            Tables\Columns\TextColumn::make('category')->label('Kategori')->badge()->color('info'),
            Tables\Columns\TextColumn::make('price_min')->label('Harga Mulai')->money('IDR')->sortable(),
            Tables\Columns\TextColumn::make('price_max')->label('Harga Sampai')->money('IDR'),
            Tables\Columns\TextColumn::make('unit')->label('Satuan'),
            Tables\Columns\IconColumn::make('is_active')->label('Aktif')->boolean(),
        ])->defaultSort('sort_order')->reorderable('sort_order')->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListProductPrices::route('/'),
            'create' => Pages\CreateProductPrice::route('/create'),
            'edit' => Pages\EditProductPrice::route('/{record}/edit'),
        ];
    }
}
