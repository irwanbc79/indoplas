<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductPhoto extends Model implements HasMedia {
    use InteractsWithMedia;

    protected $fillable = ['product_name', 'photo_path', 'alt_text', 'sort_order', 'is_active'];
    protected $casts = ['is_active' => 'boolean'];

    public function registerMediaCollections(): void {
        $this->addMediaCollection('photo')->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void {
        $this->addMediaConversion('thumb')->width(600)->height(450)->sharpen(10)->nonQueued();
        $this->addMediaConversion('zoom')->width(1400)->height(1050)->sharpen(8)->nonQueued();
    }
}
