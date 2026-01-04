@extends('layouts.app')

@section('title', 'Berita & Pengumuman')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Berita & Pengumuman</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                @forelse($posts ?? [] as $post)
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <div class="md:flex">
                        @if($post->featured_image)
                        <div class="md:w-48 flex-shrink-0">
                            <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-48 md:h-full object-cover">
                        </div>
                        @endif
                        <div class="p-6 flex-1">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span>{{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}</span>
                                @if($post->category)
                                <span class="mx-2">•</span>
                                <a href="{{ route('berita.category', $post->category->slug) }}" class="text-blue-600 hover:underline">{{ $post->category->name }}</a>
                                @endif
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800 mb-2 hover:text-blue-600">
                                <a href="{{ route('berita.show', $post->slug) }}">{{ $post->title }}</a>
                            </h2>
                            <p class="text-gray-600 text-sm mb-4">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}</p>
                            <a href="{{ route('berita.show', $post->slug) }}" class="text-blue-600 hover:underline font-medium text-sm">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>
                @empty
                <div class="bg-white rounded-lg shadow-md p-12 text-center">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <p class="text-gray-500">Belum ada berita</p>
                </div>
                @endforelse
                
                @if(isset($posts) && $posts->hasPages())
                <div class="mt-8">
                    {{ $posts->links() }}
                </div>
                @endif
            </div>
            
            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Kategori -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Kategori</h3>
                    <ul class="space-y-2">
                        @foreach($categories ?? [] as $category)
                        <li>
                            <a href="{{ route('berita.category', $category->slug) }}" class="flex justify-between text-gray-600 hover:text-blue-600 transition">
                                <span>{{ $category->name }}</span>
                                <span class="text-gray-400">({{ $category->posts_count ?? 0 }})</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <!-- Berita Terbaru -->
                @if(isset($latestPosts) && $latestPosts->count() > 0)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Berita Terbaru</h3>
                    <ul class="space-y-4">
                        @foreach($latestPosts as $latestPost)
                        <li class="flex space-x-3">
                            @if($latestPost->featured_image)
                            <img src="{{ Storage::url($latestPost->featured_image) }}" alt="{{ $latestPost->title }}" class="w-16 h-16 object-cover rounded flex-shrink-0">
                            @endif
                            <div class="flex-1 min-w-0">
                                <a href="{{ route('berita.show', $latestPost->slug) }}" class="text-sm font-medium text-gray-800 hover:text-blue-600 line-clamp-2">{{ $latestPost->title }}</a>
                                <p class="text-xs text-gray-500 mt-1">{{ $latestPost->published_at ? $latestPost->published_at->format('d M Y') : $latestPost->created_at->format('d M Y') }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
