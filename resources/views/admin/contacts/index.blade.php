@extends('layouts.admin')

@section('title', 'Pesan Kontak')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Pesan Kontak</h1>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subjek</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($contacts as $contact)
            <tr class="{{ $contact->is_read ? '' : 'bg-blue-50' }}">
                <td class="px-6 py-4 whitespace-nowrap">
                    @if($contact->is_read)
                    <span class="px-2 py-1 text-xs rounded-full bg-gray-200 text-gray-700">Dibaca</span>
                    @else
                    <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800 font-semibold">Baru</span>
                    @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $contact->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $contact->email }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ Str::limit($contact->subject, 30) }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $contact->created_at->format('d M Y') }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                    <a href="{{ route('admin.contacts.show', $contact) }}" class="text-blue-600 hover:text-blue-900">Lihat</a>
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-4 text-center text-gray-500">Belum ada pesan</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    @if($contacts->hasPages())
    <div class="px-6 py-4 border-t border-gray-200">
        {{ $contacts->links() }}
    </div>
    @endif
</div>
@endsection
