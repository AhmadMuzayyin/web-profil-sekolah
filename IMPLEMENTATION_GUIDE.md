# Implementation Guide - Web Profil Sekolah

## Overview
This guide documents the completed work and provides detailed instructions for completing the full-stack school website implementation.

## ✅ Completed Work

### 1. Database Layer (100% Complete)
- **Migrations**: All 11 entity migrations created with proper schema
  - Categories, Posts, Gallery Categories, Galleries
  - Teachers, Facilities, Contacts, Settings
  - School Info, Extracurriculars, Achievements
- **Models**: All models with fillable attributes, relationships, and scopes
- **Seeders**: Initial data seeding for Users, Settings, School Info, Categories

### 2. Backend Infrastructure (90% Complete)
- **Helpers**:
  - `SettingHelper`: Cached setting retrieval
  - `SeoHelper`: SEO meta tag generation
- **Storage**: Public disk configured with symbolic link
- **Autoloading**: Helpers registered in composer.json

### 3. Frontend Components (80% Complete)
- **Navbar**: Removed Alpine.js, replaced with vanilla JavaScript
- **SEO Component**: Dynamic meta tags with Open Graph support
- **Breadcrumb Component**: Navigational breadcrumbs
- **Pagination Component**: Tailwind-styled pagination
- **Alert Component**: Flash message display with error handling

### 4. Configuration
- **Environment**: `.env` configured with SQLite database
- **Robots.txt**: SEO-friendly with sitemap reference
- **File Storage**: Directories created for uploads

## 📋 Remaining Implementation Tasks

### Phase 1: Authentication Setup

#### Install Laravel Breeze (Recommended)
```bash
composer require laravel/breeze --dev
php artisan breeze:install blade
php artisan migrate
npm install && npm run build
```

#### Or Configure Auth Manually
Update `routes/web.php` to require authentication:
```php
require __DIR__.'/auth.php'; // If using Breeze
```

### Phase 2: Controllers

#### Frontend Controllers

Create controllers:
```bash
php artisan make:controller Frontend/HomeController
php artisan make:controller Frontend/ProfileController
php artisan make:controller Frontend/AcademicController
php artisan make:controller Frontend/FacilityController
php artisan make:controller Frontend/GalleryController
php artisan make:controller Frontend/PostController
php artisan make:controller Frontend/ContactController
```

**Example: PostController**
```php
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'user')
            ->published()
            ->latest('published_at')
            ->paginate(9);
        
        return view('pages.berita.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->published()
            ->firstOrFail();
        
        $post->incrementViews();
        
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->published()
            ->limit(3)
            ->get();
        
        return view('pages.berita.show', compact('post', 'relatedPosts'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $posts = $category->posts()
            ->published()
            ->latest('published_at')
            ->paginate(9);
        
        return view('pages.berita.category', compact('category', 'posts'));
    }
}
```

#### Admin Controllers

Create admin controllers:
```bash
php artisan make:controller Admin/DashboardController
php artisan make:controller Admin/PostController --resource
php artisan make:controller Admin/CategoryController --resource
php artisan make:controller Admin/GalleryController --resource
php artisan make:controller Admin/GalleryCategoryController --resource
php artisan make:controller Admin/TeacherController --resource
php artisan make:controller Admin/FacilityController --resource
php artisan make:controller Admin/ContactController
php artisan make:controller Admin/SettingController
php artisan make:controller Admin/SchoolInfoController
php artisan make:controller Admin/ExtracurricularController --resource
php artisan make:controller Admin/AchievementController --resource
php artisan make:controller Admin/UserController --resource
```

**Example: Admin/PostController**
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'user')->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')
                ->store('posts', 'public');
        }
        
        Post::create($data);
        
        return redirect()->route('admin.posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        
        if ($request->hasFile('featured_image')) {
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')
                ->store('posts', 'public');
        }
        
        $post->update($data);
        
        return redirect()->route('admin.posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        
        $post->delete();
        
        return redirect()->route('admin.posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}
```

### Phase 3: Form Request Validation

Create form requests:
```bash
php artisan make:request StorePostRequest
php artisan make:request UpdatePostRequest
php artisan make:request StoreContactRequest
php artisan make:request StoreTeacherRequest
php artisan make:request UpdateTeacherRequest
# ... and so on for other entities
```

**Example: StorePostRequest**
```php
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:posts,slug',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'meta_description' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ];
    }
}
```

### Phase 4: Routes

Update `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\AcademicController;
use App\Http\Controllers\Frontend\FacilityController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\ContactController;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::get('/sejarah', [ProfileController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [ProfileController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/struktur-organisasi', [ProfileController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
});

Route::prefix('akademik')->name('akademik.')->group(function () {
    Route::get('/', [AcademicController::class, 'index'])->name('index');
    Route::get('/kurikulum', [AcademicController::class, 'kurikulum'])->name('kurikulum');
    Route::get('/ekstrakurikuler', [AcademicController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
});

Route::get('/fasilitas', [FacilityController::class, 'index'])->name('fasilitas');
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');

Route::prefix('berita')->name('berita.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/{slug}', [PostController::class, 'show'])->name('show');
    Route::get('/kategori/{slug}', [PostController::class, 'category'])->name('category');
});

Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('posts', Admin\PostController::class);
    Route::resource('categories', Admin\CategoryController::class);
    Route::resource('galleries', Admin\GalleryController::class);
    Route::resource('gallery-categories', Admin\GalleryCategoryController::class);
    Route::resource('teachers', Admin\TeacherController::class);
    Route::resource('facilities', Admin\FacilityController::class);
    Route::resource('extracurriculars', Admin\ExtracurricularController::class);
    Route::resource('achievements', Admin\AchievementController::class);
    Route::resource('users', Admin\UserController::class);
    
    Route::get('contacts', [Admin\ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [Admin\ContactController::class, 'show'])->name('contacts.show');
    Route::delete('contacts/{contact}', [Admin\ContactController::class, 'destroy'])->name('contacts.destroy');
    
    Route::get('settings', [Admin\SettingController::class, 'index'])->name('settings.index');
    Route::put('settings', [Admin\SettingController::class, 'update'])->name('settings.update');
    
    Route::get('school-info', [Admin\SchoolInfoController::class, 'edit'])->name('school-info.edit');
    Route::put('school-info', [Admin\SchoolInfoController::class, 'update'])->name('school-info.update');
});

// Sitemap
Route::get('/sitemap.xml', function () {
    // Implement sitemap logic
});
```

### Phase 5: Views

#### Admin Layout
Create `resources/views/layouts/admin.blade.php`:

```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - SDN Ketawang Karay</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-800 text-white">
            <div class="p-6">
                <h1 class="text-xl font-bold">Admin Panel</h1>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-6 hover:bg-blue-700">Dashboard</a>
                <a href="{{ route('admin.posts.index') }}" class="block py-2 px-6 hover:bg-blue-700">Posts</a>
                <a href="{{ route('admin.categories.index') }}" class="block py-2 px-6 hover:bg-blue-700">Categories</a>
                <a href="{{ route('admin.galleries.index') }}" class="block py-2 px-6 hover:bg-blue-700">Gallery</a>
                <a href="{{ route('admin.teachers.index') }}" class="block py-2 px-6 hover:bg-blue-700">Teachers</a>
                <a href="{{ route('admin.facilities.index') }}" class="block py-2 px-6 hover:bg-blue-700">Facilities</a>
                <a href="{{ route('admin.settings.index') }}" class="block py-2 px-6 hover:bg-blue-700">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="flex justify-between items-center py-4 px-6">
                    <h2 class="text-xl font-semibold">@yield('page-title')</h2>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-auto p-6">
                <x-alert />
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
```

#### Frontend Views

Create views in `resources/views/pages/`:

**berita/index.blade.php** - List all posts with pagination
**berita/show.blade.php** - Single post view with SEO
**berita/category.blade.php** - Posts by category
**galeri.blade.php** - Gallery grid with filter
**fasilitas.blade.php** - Facilities list
**kontak.blade.php** - Contact form
**profil/sejarah.blade.php** - School history
**profil/visi-misi.blade.php** - Vision & mission
**profil/struktur-organisasi.blade.php** - Organizational structure

#### Admin Views

Create CRUD views in `resources/views/admin/`:

For each entity create: `index.blade.php`, `create.blade.php`, `edit.blade.php`

### Phase 6: Testing

1. **Run migrations**: `php artisan migrate:fresh --seed`
2. **Test authentication**: Access `/login` and `/register`
3. **Test admin panel**: Login and access `/admin`
4. **Create test data**: Add posts, galleries, teachers, etc.
5. **Test frontend**: Navigate all public pages
6. **Test file uploads**: Upload images for posts, galleries
7. **Test SEO**: Verify meta tags on all pages

### Phase 7: Additional Features

#### Sitemap Generation
Create a sitemap controller to generate XML sitemap of all public pages.

#### Search Functionality
Add search for posts and other content.

#### Comments
Optional: Add comment system for posts.

## Default Credentials

- **Email**: admin@sdnketawangkaray.sch.id
- **Password**: password

## Important Notes

- All models use automatic slug generation from titles
- File uploads use the `public` disk
- SEO component handles meta tags automatically
- Use SettingHelper for retrieving settings with caching
- All admin routes require authentication middleware

## Deployment Checklist

- [ ] Set proper APP_ENV and APP_DEBUG in production
- [ ] Configure database credentials
- [ ] Run `php artisan config:cache`
- [ ] Run `php artisan route:cache`
- [ ] Run `php artisan view:cache`
- [ ] Set up proper file permissions
- [ ] Configure backup strategy
- [ ] Set up SSL certificate
- [ ] Configure email settings for contact form

## Support

For questions or issues, refer to:
- Laravel 12 Documentation
- Tailwind CSS Documentation
- This implementation guide
