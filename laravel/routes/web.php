<?php
use Illuminate\Support\Facades\Route;
use App\Models\WorkPost;

Route::get('/', function () {
    $latestPosts = WorkPost::where('is_published', true)->with('media')->latest('posted_at')->take(3)->get();
    return view('welcome', compact('latestPosts'));
});

Route::get('/portofolio', function () {
    $posts = WorkPost::where('is_published', true)->with('media')->latest('posted_at')->paginate(9);
    return view('portfolio', compact('posts'));
})->name('portfolio');
