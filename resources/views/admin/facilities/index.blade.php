@extends('layouts.admin')

@section('title', 'Kelola Fasilitas')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-gray-800">Kelola Fasilitas</h1>
    <a href="{{ route('admin.facilities.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Tambah Fasilitas
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($facilities as $facility)
    <div class="bg-white rounded-lg shadow overflow-hidden">
        @if($facility->image)
        <img src="{{ Storage::url($facility->image) }}" alt="{{ $facility->name }}" class="w-full h-48 object-cover">
        @else
        <div class="w-full h-48 bg-blue-100 flex items-center justify-center">
            <svg class="w-16 h-16 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
        </div>
        @endif
        <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">{{ $facility->name }}</h3>
            <p class="text-sm text-gray-600 mb-3">{{ Str::limit($facility->description ?? '', 100) }}</p>
            <div class="flex space-x-2">
                <a href="{{ route('admin.facilities.edit', $facility) }}" class="text-blue-600 hover:text-blue-900 text-sm">Edit</a>
                <form action="{{ route('admin.facilities.destroy', $facility) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900 text-sm">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full bg-white rounded-lg shadow p-12 text-center">
        <p class="text-gray-500">Belum ada data fasilitas</p>
    </div>
    @endforelse
</div>

@if($facilities->hasPages())
<div class="mt-6">
    {{ $facilities->links() }}
</div>
@endif
@endsection
