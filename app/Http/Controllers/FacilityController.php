<?php

namespace App\Http\Controllers;

use App\Models\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        
        return view('pages.fasilitas', compact('facilities'));
    }
}
