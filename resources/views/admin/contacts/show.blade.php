@extends('layouts.admin')

@section('title', 'Detail Pesan')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.contacts.index') }}" class="text-blue-600 hover:text-blue-900 inline-flex items-center mb-4">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali ke Daftar Pesan
    </a>
    <h1 class="text-2xl font-bold text-gray-800">Detail Pesan Kontak</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <div class="border-b pb-4 mb-4">
        <div class="flex justify-between items-start">
            <div>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $contact->subject }}</h2>
                <div class="flex items-center space-x-4 text-sm text-gray-500">
                    <span>Dikirim: {{ $contact->created_at->format('d M Y, H:i') }}</span>
                    @if($contact->is_read && $contact->read_at)
                    <span>• Dibaca: {{ $contact->read_at->format('d M Y, H:i') }}</span>
                    @endif
                </div>
            </div>
            @if($contact->is_read)
            <span class="px-3 py-1 text-xs rounded-full bg-gray-200 text-gray-700">Dibaca</span>
            @else
            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-800 font-semibold">Baru</span>
            @endif
        </div>
    </div>

    <div class="mb-6">
        <h3 class="font-semibold text-gray-700 mb-2">Pengirim</h3>
        <div class="grid md:grid-cols-3 gap-4">
            <div>
                <p class="text-sm text-gray-500">Nama</p>
                <p class="text-gray-900">{{ $contact->name }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">Email</p>
                <p class="text-gray-900">
                    <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline">{{ $contact->email }}</a>
                </p>
            </div>
            @if($contact->phone)
            <div>
                <p class="text-sm text-gray-500">Telepon</p>
                <p class="text-gray-900">
                    <a href="tel:{{ $contact->phone }}" class="text-blue-600 hover:underline">{{ $contact->phone }}</a>
                </p>
            </div>
            @endif
        </div>
    </div>

    <div class="mb-6">
        <h3 class="font-semibold text-gray-700 mb-2">Pesan</h3>
        <div class="bg-gray-50 rounded-lg p-4">
            <p class="text-gray-800 whitespace-pre-wrap">{{ $contact->message }}</p>
        </div>
    </div>

    <div class="flex space-x-4">
        @if(!$contact->is_read)
        <form action="{{ route('admin.contacts.read', $contact) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Tandai Sudah Dibaca
            </button>
        </form>
        @endif
        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                Hapus Pesan
            </button>
        </form>
    </div>
</div>
@endsection
