@extends('layouts.admin')

@section('title', 'Edit Ekstrakurikuler')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Edit Ekstrakurikuler</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.extracurriculars.update', $extracurricular) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Nama Ekstrakurikuler <span class="text-red-500">*</span>
            </label>
            <input type="text" name="name" id="name" value="{{ old('name', $extracurricular->name) }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror">
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-4">
            <div>
                <label for="coach" class="block text-sm font-medium text-gray-700 mb-2">
                    Pembina
                </label>
                <input type="text" name="coach" id="coach" value="{{ old('coach', $extracurricular->coach) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('coach') border-red-500 @enderror">
                @error('coach')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="schedule" class="block text-sm font-medium text-gray-700 mb-2">
                    Jadwal
                </label>
                <input type="text" name="schedule" id="schedule" value="{{ old('schedule', $extracurricular->schedule) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('schedule') border-red-500 @enderror">
                @error('schedule')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                Deskripsi
            </label>
            <textarea name="description" id="description" rows="4"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror">{{ old('description', $extracurricular->description) }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        @if($extracurricular->image)
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
            <img src="{{ Storage::url($extracurricular->image) }}" alt="{{ $extracurricular->name }}" class="w-48 h-48 object-cover rounded">
        </div>
        @endif

        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                Ganti Gambar
            </label>
            <input type="file" name="image" id="image" accept="image/*"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('image') border-red-500 @enderror">
            <p class="mt-1 text-xs text-gray-500">Format: JPEG, PNG, JPG, WEBP. Maksimal 2MB</p>
            @error('image')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Update
            </button>
            <a href="{{ route('admin.extracurriculars.index') }}" class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
