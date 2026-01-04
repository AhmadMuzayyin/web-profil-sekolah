<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SchoolInfoController extends Controller
{
    public function edit()
    {
        $schoolInfo = SchoolInfo::firstOrCreate([]);
        
        return view('admin.school-info.edit', compact('schoolInfo'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'about' => 'nullable|string',
            'history' => 'nullable|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'organizational_structure_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'accreditation' => 'nullable|string|max:255',
            'npsn' => 'nullable|string|max:255',
            'principal_name' => 'nullable|string|max:255',
            'total_students' => 'nullable|integer',
            'total_teachers' => 'nullable|integer',
            'total_staff' => 'nullable|integer',
        ]);

        $schoolInfo = SchoolInfo::firstOrCreate([]);

        if ($request->hasFile('organizational_structure_image')) {
            if ($schoolInfo->organizational_structure_image) {
                Storage::disk('public')->delete($schoolInfo->organizational_structure_image);
            }
            $validated['organizational_structure_image'] = $request->file('organizational_structure_image')
                ->store('school-info', 'public');
        }

        $schoolInfo->update($validated);

        return redirect()->route('admin.school-info.edit')
            ->with('success', 'Informasi sekolah berhasil diperbarui.');
    }
}
