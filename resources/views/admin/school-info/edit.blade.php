@extends('layouts.admin')

@section('title', 'Edit Informasi Sekolah')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Informasi Sekolah</h1>
    <p class="text-gray-600">Kelola informasi tentang sekolah, visi, misi, dan lainnya</p>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.school-info.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="about" class="block text-sm font-medium text-gray-700 mb-2">
                Tentang Sekolah
            </label>
            <textarea name="about" id="about" rows="6"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('about') border-red-500 @enderror">{{ old('about', $schoolInfo->about) }}</textarea>
            @error('about')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="history" class="block text-sm font-medium text-gray-700 mb-2">
                Sejarah
            </label>
            <textarea name="history" id="history" rows="6"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('history') border-red-500 @enderror">{{ old('history', $schoolInfo->history) }}</textarea>
            @error('history')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="vision" class="block text-sm font-medium text-gray-700 mb-2">
                Visi
            </label>
            <textarea name="vision" id="vision" rows="3"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('vision') border-red-500 @enderror">{{ old('vision', $schoolInfo->vision) }}</textarea>
            @error('vision')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="mission" class="block text-sm font-medium text-gray-700 mb-2">
                Misi
            </label>
            <textarea name="mission" id="mission" rows="6"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('mission') border-red-500 @enderror">{{ old('mission', $schoolInfo->mission) }}</textarea>
            <p class="mt-1 text-xs text-gray-500">Pisahkan setiap misi dengan enter/baris baru</p>
            @error('mission')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-4">
            <div>
                <label for="npsn" class="block text-sm font-medium text-gray-700 mb-2">
                    NPSN
                </label>
                <input type="text" name="npsn" id="npsn" value="{{ old('npsn', $schoolInfo->npsn) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('npsn') border-red-500 @enderror">
                @error('npsn')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="accreditation" class="block text-sm font-medium text-gray-700 mb-2">
                    Akreditasi
                </label>
                <select name="accreditation" id="accreditation"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('accreditation') border-red-500 @enderror">
                    <option value="">Pilih Akreditasi</option>
                    <option value="A" {{ old('accreditation', $schoolInfo->accreditation) == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ old('accreditation', $schoolInfo->accreditation) == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ old('accreditation', $schoolInfo->accreditation) == 'C' ? 'selected' : '' }}>C</option>
                </select>
                @error('accreditation')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="principal_name" class="block text-sm font-medium text-gray-700 mb-2">
                    Nama Kepala Sekolah
                </label>
                <input type="text" name="principal_name" id="principal_name" value="{{ old('principal_name', $schoolInfo->principal_name) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('principal_name') border-red-500 @enderror">
                @error('principal_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-4">
            <div>
                <label for="total_students" class="block text-sm font-medium text-gray-700 mb-2">
                    Jumlah Siswa
                </label>
                <input type="number" name="total_students" id="total_students" value="{{ old('total_students', $schoolInfo->total_students) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('total_students') border-red-500 @enderror">
                @error('total_students')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="total_teachers" class="block text-sm font-medium text-gray-700 mb-2">
                    Jumlah Guru
                </label>
                <input type="number" name="total_teachers" id="total_teachers" value="{{ old('total_teachers', $schoolInfo->total_teachers) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('total_teachers') border-red-500 @enderror">
                @error('total_teachers')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="total_staff" class="block text-sm font-medium text-gray-700 mb-2">
                    Jumlah Staff
                </label>
                <input type="number" name="total_staff" id="total_staff" value="{{ old('total_staff', $schoolInfo->total_staff) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('total_staff') border-red-500 @enderror">
                @error('total_staff')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        @if($schoolInfo->organizational_structure_image)
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Struktur Organisasi Saat Ini</label>
            <img src="{{ Storage::url($schoolInfo->organizational_structure_image) }}" alt="Struktur Organisasi" class="max-w-md rounded">
        </div>
        @endif

        <div class="mb-6">
            <label for="organizational_structure_image" class="block text-sm font-medium text-gray-700 mb-2">
                Gambar Struktur Organisasi
            </label>
            <input type="file" name="organizational_structure_image" id="organizational_structure_image" accept="image/*"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('organizational_structure_image') border-red-500 @enderror">
            <p class="mt-1 text-xs text-gray-500">Format: JPEG, PNG, JPG, WEBP. Maksimal 2MB</p>
            @error('organizational_structure_image')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
