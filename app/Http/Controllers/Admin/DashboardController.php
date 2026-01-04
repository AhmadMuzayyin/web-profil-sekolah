<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Teacher;
use App\Models\Achievement;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::published()->count(),
            'total_contacts' => Contact::count(),
            'unread_contacts' => Contact::where('is_read', false)->count(),
            'total_galleries' => Gallery::count(),
            'total_teachers' => Teacher::count(),
            'total_achievements' => Achievement::count(),
            'total_views' => Post::sum('views_count'),
        ];

        $recent_posts = Post::with('category')->latest()->take(5)->get();
        $recent_contacts = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_posts', 'recent_contacts'));
    }
}
