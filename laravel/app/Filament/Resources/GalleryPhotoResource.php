<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryPhotoResource\Pages;
use App\Models\GalleryPhoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GalleryPhotoResource extends Resource {
    protected static ?string $model = GalleryPhoto::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Galeri Foto';
    protected static ?string $modelLabel = 'Foto Galeri';
    protected static ?string $pluralModelLabel = 'Galeri Foto';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form {
        return $form->schema([
            Forms\Components\Section::make('Upload Foto')->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('photo')
                    ->collection('photo')
                    ->label('Foto')
                    ->image()
                    ->imageEditor()
                    ->maxSize(10240)
                    ->imagePreviewHeight('300')
                    ->helperText('Max 10MB. Otomatis di-resize ke 1200×900 untuk hemat storage. Format: JPG, PNG, WEBP'),
            ]),
            Forms\Components\Section::make('Pengaturan')->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Keterangan Foto')
                    ->maxLength(255)
                    ->placeholder('contoh: Toko Indoplas Calang, Gudang Produk...'),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->helperText('Angka kecil tampil lebih dahulu'),
                Forms\Components\Toggle::make('is_pinned')
                    ->label('Tampilkan di Halaman Utama')
                    ->helperText('Foto yang dipin akan muncul di bagian Galeri halaman depan')
                    ->default(false),
                Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('photo')
                    ->collection('photo')
                    ->conversion('thumb')
                    ->label('Foto')
                    ->size(80)
                    ->extraImgAttributes(['style' => 'border-radius:8px;object-fit:cover;']),
                Tables\Columns\TextColumn::make('title')
                    ->label('Keterangan')
                    ->searchable()
                    ->placeholder('—')
                    ->limit(40),
                Tables\Columns\ToggleColumn::make('is_pinned')
                    ->label('📌 Pin Frontpage')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),
                Tables\Columns\TextColumn::make('storage_size')
                    ->label('Ukuran')
                    ->getStateUsing(fn ($record) => $record->storage_size)
                    ->badge()
                    ->color('gray'),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->reorderable('sort_order')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus')
                    ->successNotificationTitle('Foto berhasil dihapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus Terpilih'),
                ]),
            ]);
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListGalleryPhotos::route('/'),
            'create' => Pages\CreateGalleryPhoto::route('/create'),
            'edit' => Pages\EditGalleryPhoto::route('/{record}/edit'),
        ];
    }
}
