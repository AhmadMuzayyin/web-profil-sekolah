@extends('layouts.admin')

@section('title', 'Kelola Galeri')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-gray-800">Kelola Galeri Foto</h1>
    <a href="{{ route('admin.galleries.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Tambah Foto
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @forelse($galleries as $gallery)
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-1">{{ $gallery->title }}</h3>
            @if($gallery->category)
            <p class="text-sm text-gray-500 mb-2">{{ $gallery->category->name }}</p>
            @endif
            @if($gallery->is_featured)
            <span class="inline-block px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded mb-2">Featured</span>
            @endif
            <div class="flex space-x-2 mt-3">
                <a href="{{ route('admin.galleries.edit', $gallery) }}" class="text-blue-600 hover:text-blue-900 text-sm">Edit</a>
                <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900 text-sm">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full bg-white rounded-lg shadow p-12 text-center">
        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <p class="text-gray-500">Belum ada foto</p>
    </div>
    @endforelse
</div>

@if($galleries->hasPages())
<div class="mt-6">
    {{ $galleries->links() }}
</div>
@endif
@endsection
