@extends('layouts.app')

@section('title', 'Galeri Foto')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">Galeri Foto</h1>
        
        <!-- Filter Kategori -->
        <div class="flex flex-wrap justify-center gap-2 mb-8">
            <a href="{{ route('galeri') }}" class="px-4 py-2 rounded-full {{ !request('category') ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100' }} transition">
                Semua
            </a>
            @foreach($categories ?? [] as $category)
            <a href="{{ route('galeri', ['category' => $category->id]) }}" class="px-4 py-2 rounded-full {{ request('category') == $category->id ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100' }} transition">
                {{ $category->name }}
            </a>
            @endforeach
        </div>
        
        <!-- Grid Galeri -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse($galleries ?? [] as $gallery)
            <div class="relative group cursor-pointer overflow-hidden rounded-lg" onclick="openGalleryModal('{{ Storage::url($gallery->image) }}', '{{ $gallery->title }}')">
                <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-48 object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition flex items-center justify-center">
                    <span class="text-white opacity-0 group-hover:opacity-100 transition text-center px-2 font-medium">{{ $gallery->title }}</span>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500">Belum ada foto di galeri</p>
            </div>
            @endforelse
        </div>
        
        @if(isset($galleries) && $galleries->hasPages())
        <div class="mt-8">
            {{ $galleries->links() }}
        </div>
        @endif
    </div>
</div>

<!-- Modal -->
<div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4" onclick="closeGalleryModal()">
    <button onclick="closeGalleryModal()" class="absolute top-4 right-4 text-white text-4xl hover:text-gray-300">&times;</button>
    <div class="max-w-4xl w-full" onclick="event.stopPropagation()">
        <img id="galleryModalImage" src="" alt="" class="w-full rounded-lg">
        <p id="galleryModalTitle" class="text-white text-center mt-4 text-lg"></p>
    </div>
</div>

<script>
function openGalleryModal(src, title) {
    document.getElementById('galleryModalImage').src = src;
    document.getElementById('galleryModalTitle').textContent = title;
    document.getElementById('galleryModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeGalleryModal() {
    document.getElementById('galleryModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeGalleryModal();
});
</script>
@endsection
