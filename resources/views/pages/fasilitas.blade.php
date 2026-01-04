@extends('layouts.app')

@section('title', 'Fasilitas Sekolah')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">Fasilitas Sekolah</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($facilities ?? [] as $facility)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
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
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $facility->name }}</h3>
                    <p class="text-gray-600 text-sm">{{ $facility->description }}</p>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500">Belum ada data fasilitas</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
