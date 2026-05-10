<?php

namespace App\Filament\Widgets;

use App\Models\GalleryPhoto;
use App\Models\WorkPost;
use App\Models\ProductPhoto;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class StorageOverviewWidget extends BaseWidget {
    protected static ?int $sort = 1;

    protected function formatBytes(int $bytes): string {
        if ($bytes < 1024) return $bytes . ' B';
        if ($bytes < 1048576) return round($bytes / 1024, 1) . ' KB';
        return round($bytes / 1048576, 1) . ' MB';
    }

    protected function getStats(): array {
        $totalBytes = (int) Media::sum('size');
        $galleryCount = GalleryPhoto::count();
        $pinnedCount = GalleryPhoto::where('is_pinned', true)->count();
        $workPostCount = WorkPost::count();
        $mediaCount = Media::count();

        return [
            Stat::make('Total Storage Terpakai', $this->formatBytes($totalBytes))
                ->description($mediaCount . ' file media')
                ->icon('heroicon-o-circle-stack')
                ->color('warning'),
            Stat::make('Foto Galeri', $galleryCount . ' foto')
                ->description($pinnedCount . ' dipin ke halaman utama')
                ->icon('heroicon-o-photo')
                ->color('info'),
            Stat::make('Hasil Pekerjaan', $workPostCount . ' posting')
                ->description('Portofolio proyek')
                ->icon('heroicon-o-clipboard-document-check')
                ->color('success'),
        ];
    }
}
