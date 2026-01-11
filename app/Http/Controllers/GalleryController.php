<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $categories = GalleryCategory::withCount('galleries')->get();

        $query = Gallery::with('galleryCategory')->latest();

        if ($request->has('category') && $request->category !== '') {
            $query->where('gallery_category_id', $request->category);
        }

        $galleries = $query->paginate(12);

        return view('pages.galeri', compact('galleries', 'categories'));
    }
}
