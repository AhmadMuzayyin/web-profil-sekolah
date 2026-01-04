<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_description' => 'nullable|string',
            'site_address' => 'nullable|string',
            'site_phone' => 'nullable|string|max:20',
            'site_email' => 'nullable|email|max:255',
            'site_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
        ]);

        foreach ($validated as $key => $value) {
            if ($key === 'site_logo' && $request->hasFile('site_logo')) {
                $oldLogo = Setting::where('key', 'site_logo')->first();
                if ($oldLogo && $oldLogo->value) {
                    Storage::disk('public')->delete($oldLogo->value);
                }
                $value = $request->file('site_logo')->store('settings', 'public');
            }

            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        // Clear settings cache
        Cache::forget('settings');

        return redirect()->route('admin.settings.index')
            ->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
