@extends('layouts.app')

@section('content')

<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 space-y-3 md:space-y-0">
    <form action="{{ route('commands.index') }}" method="GET" class="flex flex-col md:flex-row md:space-x-3 w-full md:w-auto">
        <input type="text" name="search" placeholder="Cari command..." value="{{ request('search') }}" 
            class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 flex-1 mb-2 md:mb-0">
        <select name="category" class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">Semua Kategori</option>
            @foreach($categories as $cat)
            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
            @endforeach
        </select>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition mt-2 md:mt-0">Filter</button>
    </form>

    <a href="{{ route('commands.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
        + Tambah Command
    </a>
</div>

@if(session('success'))
<div class="bg-green-200 text-green-800 p-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($commands as $cmd)
        <div class="bg-white rounded shadow hover:shadow-lg transition p-4 flex flex-col justify-between">
            <div>
                <h2 class="font-semibold text-lg mb-2">{{ $cmd->title }}</h2>
                @php
                    $categoryColors = [
                        'Laravel' => 'bg-green-200 text-green-800',
                        'Frontend' => 'bg-blue-200 text-blue-800',
                        'Git' => 'bg-gray-200 text-gray-800',
                        'Database' => 'bg-orange-200 text-orange-800',
                        'Environment' => 'bg-purple-200 text-purple-800'
                    ];
                    $badgeColor = $categoryColors[$cmd->category] ?? 'bg-gray-100 text-gray-800';
                @endphp
                <span class="inline-block {{ $badgeColor }} text-xs px-2 py-1 rounded-full mb-2">{{ $cmd->category }}</span>

                @if($cmd->description)
                    <p class="text-gray-600 italic mb-2">{{ $cmd->description }}</p>
                @endif

                <pre class="bg-gray-900 text-green-400 p-3 rounded text-sm overflow-x-auto"><code id="cmd-{{ $cmd->id }}">{{ $cmd->command_text }}</code></pre>
            </div>

            <button onclick="copyCommand({{ $cmd->id }})" class="mt-2 bg-gray-800 text-white text-sm px-3 py-1 rounded hover:bg-gray-700 transition">
                Copy
            </button>
        </div>
    @endforeach
</div>

<!-- Pagination Links -->
<div class="mt-6">
    {{ $commands->links('pagination::tailwind') }}
</div>

<script>
function copyCommand(id) {
    const text = document.getElementById(`cmd-${id}`).innerText;
    navigator.clipboard.writeText(text)
        .then(() => { alert('Command copied!'); })
        .catch(() => { alert('Failed to copy'); });
}
</script>

@endsection
