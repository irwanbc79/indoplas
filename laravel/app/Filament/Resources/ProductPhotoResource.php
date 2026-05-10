<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProductPhotoResource\Pages;
use App\Models\ProductPhoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductPhotoResource extends Resource {
    protected static ?string $model = ProductPhoto::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Foto Produk';
    protected static ?string $modelLabel = 'Foto Produk';
    protected static ?string $pluralModelLabel = 'Foto Produk';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form {
        return $form->schema([
            Forms\Components\Section::make()->schema([
                Forms\Components\TextInput::make('product_name')->label('Nama Produk')->required()->maxLength(255),
                Forms\Components\TextInput::make('alt_text')->label('Keterangan Foto')->maxLength(255),
                Forms\Components\TextInput::make('sort_order')->label('Urutan Tampil')->numeric()->default(0),
                Forms\Components\Toggle::make('is_active')->label('Tampilkan')->default(true),
            ])->columns(2),
            Forms\Components\Section::make('Upload Foto')->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('photo')
                    ->collection('photo')
                    ->label('Foto Produk')
                    ->image()
                    ->imageEditor()
                    ->imagePreviewHeight('300')
                    ->maxSize(5120)
                    ->helperText('Max 5MB. Akan otomatis di-resize. Format: JPG, PNG, WEBP'),
            ]),
        ]);
    }

    public static function table(Table $table): Table {
        return $table->columns([
            Tables\Columns\SpatieMediaLibraryImageColumn::make('photo')->collection('photo')->conversion('thumb')->label('Foto')->size(80)->extraImgAttributes(['style'=>'border-radius:6px;object-fit:cover;']),
            Tables\Columns\TextColumn::make('product_name')->label('Produk')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('sort_order')->label('Urutan')->sortable(),
            Tables\Columns\IconColumn::make('is_active')->label('Aktif')->boolean(),
            Tables\Columns\TextColumn::make('updated_at')->label('Diperbarui')->since()->sortable(),
        ])->defaultSort('sort_order')->reorderable('sort_order')->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListProductPhotos::route('/'),
            'create' => Pages\CreateProductPhoto::route('/create'),
            'edit' => Pages\EditProductPhoto::route('/{record}/edit'),
        ];
    }
}
