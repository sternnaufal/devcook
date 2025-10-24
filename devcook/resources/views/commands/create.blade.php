@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Tambah Command Baru</h2>

<form method="POST" action="{{ route('commands.store') }}" class="space-y-4">
    @csrf
    <div>
        <label class="block font-medium">Judul</label>
        <input type="text" name="title" class="w-full border rounded p-2" required>
    </div>
    <div>
        <label class="block font-medium">Kategori</label>
        <input type="text" name="category" class="w-full border rounded p-2">
    </div>
    <div>
        <label class="block font-medium">Deskripsi</label>
        <textarea name="description" class="w-full border rounded p-2"></textarea>
    </div>
    <div>
        <label class="block font-medium">Command</label>
        <textarea name="command_text" class="w-full border rounded p-2 font-mono" rows="6" required></textarea>
    </div>
    <button class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
