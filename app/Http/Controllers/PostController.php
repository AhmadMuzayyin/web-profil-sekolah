<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'user')
            ->published()
            ->latest('published_at')
            ->paginate(9);
        
        $categories = Category::withCount(['posts' => function ($query) {
            $query->published();
        }])->get();
        
        $latestPosts = Post::with('category')
            ->published()
            ->latest('published_at')
            ->take(5)
            ->get();
        
        return view('pages.berita.index', compact('posts', 'categories', 'latestPosts'));
    }

    public function show($slug)
    {
        $post = Post::with('category', 'user')
            ->where('slug', $slug)
            ->published()
            ->firstOrFail();
        
        $post->incrementViews();
        
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->published()
            ->take(3)
            ->get();
        
        return view('pages.berita.show', compact('post', 'relatedPosts'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $posts = Post::with('category', 'user')
            ->where('category_id', $category->id)
            ->published()
            ->latest('published_at')
            ->paginate(9);
        
        $categories = Category::withCount(['posts' => function ($query) {
            $query->published();
        }])->get();
        
        return view('pages.berita.category', compact('posts', 'category', 'categories'));
    }
}
