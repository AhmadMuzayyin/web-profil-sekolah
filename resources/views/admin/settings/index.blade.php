@extends('layouts.admin')

@section('title', 'Pengaturan Website')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Pengaturan Website</h1>
    <p class="text-gray-600">Kelola pengaturan umum website</p>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Dasar</h3>

        <div class="mb-4">
            <label for="site_name" class="block text-sm font-medium text-gray-700 mb-2">
                Nama Website <span class="text-red-500">*</span>
            </label>
            <input type="text" name="site_name" id="site_name" value="{{ old('site_name', $settings['site_name'] ?? '') }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('site_name') border-red-500 @enderror">
            @error('site_name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="site_description" class="block text-sm font-medium text-gray-700 mb-2">
                Deskripsi Website
            </label>
            <textarea name="site_description" id="site_description" rows="3"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('site_description') border-red-500 @enderror">{{ old('site_description', $settings['site_description'] ?? '') }}</textarea>
            @error('site_description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        @if(isset($settings['site_logo']) && $settings['site_logo'])
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Logo Saat Ini</label>
            <img src="{{ Storage::url($settings['site_logo']) }}" alt="Logo" class="h-20">
        </div>
        @endif

        <div class="mb-6">
            <label for="site_logo" class="block text-sm font-medium text-gray-700 mb-2">
                Logo Website
            </label>
            <input type="file" name="site_logo" id="site_logo" accept="image/*"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('site_logo') border-red-500 @enderror">
            <p class="mt-1 text-xs text-gray-500">Format: JPEG, PNG, JPG, WEBP. Maksimal 2MB</p>
            @error('site_logo')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <h3 class="text-lg font-semibold text-gray-800 mb-4 mt-8">Kontak</h3>

        <div class="mb-4">
            <label for="site_address" class="block text-sm font-medium text-gray-700 mb-2">
                Alamat
            </label>
            <textarea name="site_address" id="site_address" rows="2"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('site_address') border-red-500 @enderror">{{ old('site_address', $settings['site_address'] ?? '') }}</textarea>
            @error('site_address')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="site_phone" class="block text-sm font-medium text-gray-700 mb-2">
                    Telepon
                </label>
                <input type="text" name="site_phone" id="site_phone" value="{{ old('site_phone', $settings['site_phone'] ?? '') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('site_phone') border-red-500 @enderror">
                @error('site_phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="site_email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email
                </label>
                <input type="email" name="site_email" id="site_email" value="{{ old('site_email', $settings['site_email'] ?? '') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('site_email') border-red-500 @enderror">
                @error('site_email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <h3 class="text-lg font-semibold text-gray-800 mb-4 mt-8">Media Sosial</h3>

        <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="facebook_url" class="block text-sm font-medium text-gray-700 mb-2">
                    Facebook URL
                </label>
                <input type="url" name="facebook_url" id="facebook_url" value="{{ old('facebook_url', $settings['facebook_url'] ?? '') }}"
                    placeholder="https://facebook.com/username"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('facebook_url') border-red-500 @enderror">
                @error('facebook_url')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="instagram_url" class="block text-sm font-medium text-gray-700 mb-2">
                    Instagram URL
                </label>
                <input type="url" name="instagram_url" id="instagram_url" value="{{ old('instagram_url', $settings['instagram_url'] ?? '') }}"
                    placeholder="https://instagram.com/username"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('instagram_url') border-red-500 @enderror">
                @error('instagram_url')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="twitter_url" class="block text-sm font-medium text-gray-700 mb-2">
                    Twitter URL
                </label>
                <input type="url" name="twitter_url" id="twitter_url" value="{{ old('twitter_url', $settings['twitter_url'] ?? '') }}"
                    placeholder="https://twitter.com/username"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('twitter_url') border-red-500 @enderror">
                @error('twitter_url')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="youtube_url" class="block text-sm font-medium text-gray-700 mb-2">
                    YouTube URL
                </label>
                <input type="url" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', $settings['youtube_url'] ?? '') }}"
                    placeholder="https://youtube.com/@username"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('youtube_url') border-red-500 @enderror">
                @error('youtube_url')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex space-x-4 mt-8">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
