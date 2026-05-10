<?php
namespace App\Filament\Resources;

use App\Filament\Resources\WorkPostResource\Pages;
use App\Models\WorkPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WorkPostResource extends Resource {
    protected static ?string $model = WorkPost::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationLabel = 'Hasil Pekerjaan';
    protected static ?string $modelLabel = 'Hasil Pekerjaan';
    protected static ?string $pluralModelLabel = 'Hasil Pekerjaan';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form {
        return $form->schema([
            Forms\Components\Section::make('Informasi Proyek')->schema([
                Forms\Components\TextInput::make('title')->label('Judul Pekerjaan')->required()->maxLength(255)->columnSpanFull()->placeholder('contoh: Pemasangan Kusen U-PVC Rumah 2 Lantai'),
                Forms\Components\TextInput::make('category')->label('Kategori')->maxLength(100)->placeholder('Kusen U-PVC, Rangka Baja, Pintu Kaca, dll'),
                Forms\Components\TextInput::make('location')->label('Lokasi Proyek')->maxLength(255)->placeholder('Calang, Aceh Jaya'),
                Forms\Components\DateTimePicker::make('posted_at')->label('Tanggal Posting')->default(now()),
                Forms\Components\Toggle::make('is_published')->label('Publikasikan')->default(true),
                Forms\Components\Textarea::make('narration')->label('Narasi / Catatan')->rows(5)->columnSpanFull()->placeholder('Ceritakan detail pekerjaan, ukuran, kendala, dan hasil akhirnya...'),
            ])->columns(2),
            Forms\Components\Section::make('Foto Hasil Pekerjaan (Max 3 Foto)')->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('photos')
                    ->collection('photos')
                    ->label('Upload Foto')
                    ->image()
                    ->imageEditor()
                    ->multiple()
                    ->maxFiles(3)
                    ->reorderable()
                    ->imagePreviewHeight('250')
                    ->maxSize(8192)
                    ->helperText('Max 3 foto, masing-masing max 8MB. Otomatis di-resize untuk hemat storage. Format: JPG, PNG, WEBP'),
            ]),
        ]);
    }

    public static function table(Table $table): Table {
        return $table->columns([
            Tables\Columns\SpatieMediaLibraryImageColumn::make('photos')->collection('photos')->conversion('thumb')->label('Foto')->size(80)->stacked()->limit(3)->extraImgAttributes(['style'=>'border-radius:6px;object-fit:cover;']),
            Tables\Columns\TextColumn::make('title')->label('Judul')->searchable()->sortable()->limit(40)->weight('bold'),
            Tables\Columns\TextColumn::make('category')->label('Kategori')->badge()->color('success'),
            Tables\Columns\TextColumn::make('location')->label('Lokasi')->icon('heroicon-m-map-pin'),
            Tables\Columns\IconColumn::make('is_published')->label('Publish')->boolean(),
            Tables\Columns\TextColumn::make('posted_at')->label('Tanggal')->date('d M Y')->sortable(),
        ])->defaultSort('posted_at','desc')->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListWorkPosts::route('/'),
            'create' => Pages\CreateWorkPost::route('/create'),
            'edit' => Pages\EditWorkPost::route('/{record}/edit'),
        ];
    }
}
