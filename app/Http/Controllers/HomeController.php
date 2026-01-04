<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Gallery;
use App\Models\Achievement;
use App\Models\SchoolInfo;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')
            ->published()
            ->latest('published_at')
            ->take(6)
            ->get();
        
        $galleries = Gallery::where('is_featured', true)
            ->latest()
            ->take(8)
            ->get();
        
        $achievements = Achievement::latest()
            ->take(4)
            ->get();
        
        $schoolInfo = SchoolInfo::first();
        
        return view('pages.home', compact('posts', 'galleries', 'achievements', 'schoolInfo'));
    }
}
