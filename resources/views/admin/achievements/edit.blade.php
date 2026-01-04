@extends('layouts.admin')

@section('title', 'Edit Prestasi')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Edit Prestasi</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.achievements.update', $achievement) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                Judul Prestasi <span class="text-red-500">*</span>
            </label>
            <input type="text" name="title" id="title" value="{{ old('title', $achievement->title) }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror">
            @error('title')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="student_name" class="block text-sm font-medium text-gray-700 mb-2">
                Nama Siswa
            </label>
            <input type="text" name="student_name" id="student_name" value="{{ old('student_name', $achievement->student_name) }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('student_name') border-red-500 @enderror">
            @error('student_name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-4">
            <div>
                <label for="level" class="block text-sm font-medium text-gray-700 mb-2">
                    Tingkat
                </label>
                <select name="level" id="level"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('level') border-red-500 @enderror">
                    <option value="">Pilih Tingkat</option>
                    <option value="Kecamatan" {{ old('level', $achievement->level) == 'Kecamatan' ? 'selected' : '' }}>Kecamatan</option>
                    <option value="Kabupaten/Kota" {{ old('level', $achievement->level) == 'Kabupaten/Kota' ? 'selected' : '' }}>Kabupaten/Kota</option>
                    <option value="Provinsi" {{ old('level', $achievement->level) == 'Provinsi' ? 'selected' : '' }}>Provinsi</option>
                    <option value="Nasional" {{ old('level', $achievement->level) == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                    <option value="Internasional" {{ old('level', $achievement->level) == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                </select>
                @error('level')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="rank" class="block text-sm font-medium text-gray-700 mb-2">
                    Peringkat
                </label>
                <input type="text" name="rank" id="rank" value="{{ old('rank', $achievement->rank) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('rank') border-red-500 @enderror">
                @error('rank')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="year" class="block text-sm font-medium text-gray-700 mb-2">
                    Tahun
                </label>
                <input type="number" name="year" id="year" value="{{ old('year', $achievement->year) }}" min="2000" max="2100"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('year') border-red-500 @enderror">
                @error('year')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                Deskripsi
            </label>
            <textarea name="description" id="description" rows="4"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror">{{ old('description', $achievement->description) }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        @if($achievement->image)
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
            <img src="{{ Storage::url($achievement->image) }}" alt="{{ $achievement->title }}" class="w-48 h-48 object-cover rounded">
        </div>
        @endif

        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                Ganti Gambar/Foto
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
            <a href="{{ route('admin.achievements.index') }}" class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
