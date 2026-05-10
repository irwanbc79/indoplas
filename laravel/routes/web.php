<?php
use Illuminate\Support\Facades\Route;
use App\Models\WorkPost;
use App\Models\GalleryPhoto;

Route::get('/', function () {
    $latestPosts = WorkPost::where('is_published', true)->with('media')->latest('posted_at')->take(3)->get();
    $pinnedGallery = GalleryPhoto::where('is_pinned', true)->where('is_active', true)->with('media')->orderBy('sort_order')->get();
    return view('welcome', compact('latestPosts', 'pinnedGallery'));
});

Route::get('/portofolio', function () {
    $posts = WorkPost::where('is_published', true)->with('media')->latest('posted_at')->paginate(9);
    return view('portfolio', compact('posts'));
})->name('portfolio');

Route::get('/galeri', function () {
    $photos = GalleryPhoto::where('is_active', true)->with('media')->orderBy('sort_order')->paginate(24);
    return view('galeri', compact('photos'));
})->name('galeri');
