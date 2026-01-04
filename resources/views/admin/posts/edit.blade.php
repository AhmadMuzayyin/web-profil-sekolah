@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Edit Berita</h1>
    <p class="text-gray-600">Edit berita "{{ $post->title }}"</p>
</div>

<form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow p-6 space-y-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('slug') border-red-500 @enderror">
                    @error('slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">Ringkasan</label>
                    <textarea name="excerpt" id="excerpt" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('excerpt') border-red-500 @enderror">{{ old('excerpt', $post->excerpt) }}</textarea>
                    @error('excerpt')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Konten <span class="text-red-500">*</span></label>
                    <textarea name="content" id="content" rows="15" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror">{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description (SEO)</label>
                    <textarea name="meta_description" id="meta_description" rows="2" maxlength="160"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('meta_description') border-red-500 @enderror">{{ old('meta_description', $post->meta_description) }}</textarea>
                    <p class="mt-1 text-xs text-gray-500">Maksimal 160 karakter</p>
                    @error('meta_description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Publish</h3>
                
                <div class="space-y-4">
                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" name="is_published" value="1" {{ old('is_published', $post->is_published) ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Publikasikan</span>
                        </label>
                    </div>

                    <div>
                        <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Publish</label>
                        <input type="datetime-local" name="published_at" id="published_at" 
                            value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Kategori</h3>
                
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Pilih Kategori <span class="text-red-500">*</span></label>
                    <select name="category_id" id="category_id" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('category_id') border-red-500 @enderror">
                        <option value="">Pilih kategori...</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Featured Image</h3>
                
                @if($post->featured_image)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full rounded-lg">
                    </div>
                @endif
                
                <div>
                    <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar Baru</label>
                    <input type="file" name="featured_image" id="featured_image" accept="image/*"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('featured_image') border-red-500 @enderror">
                    <p class="mt-1 text-xs text-gray-500">JPG, PNG, WEBP. Max 2MB</p>
                    @error('featured_image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    
                    <div id="imagePreview" class="mt-4 hidden">
                        <img id="preview" src="" alt="Preview" class="w-full rounded-lg">
                    </div>
                </div>
            </div>

            <div class="flex space-x-3">
                <button type="submit" class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Update
                </button>
                <a href="{{ route('admin.posts.index') }}" class="flex-1 px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition text-center">
                    Batal
                </a>
            </div>
        </div>
    </div>
</form>

<script>
    // Image preview
    document.getElementById('featured_image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
                document.getElementById('imagePreview').classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
