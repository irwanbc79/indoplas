<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class GalleryPhoto extends Model implements HasMedia {
    use InteractsWithMedia;

    protected $fillable = ['title', 'is_pinned', 'is_active', 'sort_order'];
    protected $casts = ['is_pinned' => 'boolean', 'is_active' => 'boolean'];

    public function registerMediaCollections(): void {
        $this->addMediaCollection('photo')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);
    }

    public function registerMediaConversions(?Media $media = null): void {
        $this->addMediaConversion('thumb')
            ->width(400)->height(300)->sharpen(10)->nonQueued();
        $this->addMediaConversion('display')
            ->width(1200)->height(900)->sharpen(8)->nonQueued();
    }

    public function getStorageSizeAttribute(): string {
        $bytes = $this->getMedia('photo')->sum(fn($m) => $m->size);
        if ($bytes === 0) return '-';
        $units = ['B', 'KB', 'MB'];
        $i = 0;
        while ($bytes >= 1024 && $i < 2) {
            $bytes /= 1024;
            $i++;
        }
        return round($bytes, 1) . ' ' . $units[$i];
    }
}
