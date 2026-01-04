@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
    <p class="text-gray-600">Selamat datang kembali, {{ Auth::user()->name }}!</p>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-1">
                <p class="text-sm font-medium text-gray-600">Total Berita</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['total_posts'] }}</p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
        </div>
        <p class="text-xs text-gray-500 mt-2">{{ $stats['published_posts'] }} dipublikasikan</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-1">
                <p class="text-sm font-medium text-gray-600">Pesan Kontak</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['total_contacts'] }}</p>
            </div>
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
        <p class="text-xs text-gray-500 mt-2">{{ $stats['unread_contacts'] }} belum dibaca</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-1">
                <p class="text-sm font-medium text-gray-600">Total Foto</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['total_galleries'] }}</p>
            </div>
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="flex-1">
                <p class="text-sm font-medium text-gray-600">Total Views</p>
                <p class="text-3xl font-bold text-gray-900">{{ number_format($stats['total_views']) }}</p>
            </div>
            <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent Posts -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-800">Berita Terbaru</h2>
        </div>
        <div class="p-6">
            @forelse($recent_posts as $post)
                <div class="flex items-start space-x-4 mb-4 pb-4 border-b last:border-0">
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-800">{{ $post->title }}</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            <span class="font-medium">{{ $post->category->name }}</span> • 
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                    <span class="px-2 py-1 text-xs font-medium rounded-full {{ $post->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                        {{ $post->is_published ? 'Published' : 'Draft' }}
                    </span>
                </div>
            @empty
                <p class="text-gray-500 text-center py-4">Belum ada berita</p>
            @endforelse
            <a href="{{ route('admin.posts.index') }}" class="block text-center text-blue-600 hover:text-blue-700 font-medium mt-4">
                Lihat Semua Berita →
            </a>
        </div>
    </div>

    <!-- Recent Contacts -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-800">Pesan Kontak Terbaru</h2>
        </div>
        <div class="p-6">
            @forelse($recent_contacts as $contact)
                <div class="flex items-start space-x-4 mb-4 pb-4 border-b last:border-0">
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-800">{{ $contact->name }}</h3>
                        <p class="text-sm text-gray-600 mt-1">{{ Str::limit($contact->message, 60) }}</p>
                        <p class="text-xs text-gray-500 mt-1">{{ $contact->created_at->diffForHumans() }}</p>
                    </div>
                    @if(!$contact->is_read)
                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                    @endif
                </div>
            @empty
                <p class="text-gray-500 text-center py-4">Belum ada pesan kontak</p>
            @endforelse
            <a href="{{ route('admin.contacts.index') }}" class="block text-center text-blue-600 hover:text-blue-700 font-medium mt-4">
                Lihat Semua Pesan →
            </a>
        </div>
    </div>
</div>
@endsection
