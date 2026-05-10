<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class WorkPost extends Model implements HasMedia {
    use InteractsWithMedia;

    protected $fillable = ['title','category','location','narration','is_published','posted_at'];
    protected $casts = ['is_published' => 'boolean', 'posted_at' => 'datetime'];

    public function registerMediaCollections(): void {
        $this->addMediaCollection('photos')->acceptsMimeTypes(['image/jpeg','image/png','image/webp']);
    }

    public function registerMediaConversions(?Media $media = null): void {
        $this->addMediaConversion('thumb')->width(800)->height(600)->sharpen(10)->nonQueued();
        $this->addMediaConversion('display')->width(1200)->height(900)->sharpen(8)->nonQueued();
    }
}
