<?php

namespace App\Http\Controllers;

use App\Models\SchoolInfo;
use App\Models\Teacher;

class ProfileController extends Controller
{
    public function index()
    {
        $schoolInfo = SchoolInfo::first();
        
        return view('pages.profil.index', compact('schoolInfo'));
    }

    public function sejarah()
    {
        $schoolInfo = SchoolInfo::first();
        
        return view('pages.profil.sejarah', compact('schoolInfo'));
    }

    public function visiMisi()
    {
        $schoolInfo = SchoolInfo::first();
        
        return view('pages.profil.visi-misi', compact('schoolInfo'));
    }

    public function strukturOrganisasi()
    {
        $schoolInfo = SchoolInfo::first();
        $teachers = Teacher::orderBy('sort_order')->get();
        
        return view('pages.profil.struktur-organisasi', compact('schoolInfo', 'teachers'));
    }
}
