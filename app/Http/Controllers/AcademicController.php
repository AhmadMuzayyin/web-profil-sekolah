<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\SchoolInfo;

class AcademicController extends Controller
{
    public function index()
    {
        $schoolInfo = SchoolInfo::first();
        
        return view('pages.akademik.index', compact('schoolInfo'));
    }

    public function kurikulum()
    {
        $schoolInfo = SchoolInfo::first();
        
        return view('pages.akademik.kurikulum', compact('schoolInfo'));
    }

    public function ekstrakurikuler()
    {
        $extracurriculars = Extracurricular::all();
        
        return view('pages.akademik.ekstrakurikuler', compact('extracurriculars'));
    }
}
