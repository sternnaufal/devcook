<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSetup Library</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white shadow">
        <div class="container mx-auto flex justify-between items-center px-4 py-3">
            <a href="{{ route('commands.index') }}" class="font-bold text-lg hover:text-gray-300 transition">
                ⚙️ DevSetup Library
            </a>
            <div class="space-x-4">
                <a href="{{ route('commands.index') }}" class="hover:text-gray-300 transition">Home</a>
                <a href="{{ route('commands.create') }}" class="hover:text-gray-300 transition">Tambah Command</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto text-center text-sm">
            &copy; {{ date('Y') }} DevSetup Library. All rights reserved.
        </div>
    </footer>

</body>
</html>
