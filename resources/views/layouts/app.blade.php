<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - CRUD Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-6">
        <nav class="bg-blue-950 p-4 text-white rounded-lg shadow">
            <h1 class="text-2xl font-bold">CRUD Daftar Mahasiswa</h1>
        </nav>

        {{-- Alert Messages --}}
        @if (session('success'))
            <div id="alert-success"
                class="flex items-center justify-between bg-green-100 text-green-700 p-4 rounded-md border border-green-400 my-4 shadow-md transition duration-300">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 mr-2 text-green-700">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>

                    <span>{{ session('success') }}</span>
                </div>
                <button onclick="document.getElementById('alert-success').remove()"
                    class="text-green-700 hover:text-green-900 focus:outline-none">
                    ✖
                </button>
            </div>
        @endif

        @if (session('error'))
            <div id="alert-error"
                class="flex items-center justify-between bg-red-100 text-red-700 p-4 rounded-md border border-red-400 my-4 shadow-md transition duration-300">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 mr-2 text-red-700">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>

                    <span>{{ session('error') }}</span>
                </div>
                <button onclick="document.getElementById('alert-error').remove()"
                    class="text-red-700 hover:text-red-900 focus:outline-none">
                    ✖
                </button>
            </div>
        @endif

        {{-- Alert Error (Validasi) --}}
        @if ($errors->any())
            <div id="alert-validation"
                class="flex flex-col bg-red-100 text-red-700 p-4 rounded-md border border-red-400 my-4 shadow-md transition duration-300">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mr-2 text-red-700">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        <span class="font-medium">Terjadi kesalahan:</span>
                    </div>
                    <button onclick="document.getElementById('alert-validation').remove()"
                        class="text-red-700 hover:text-red-900 focus:outline-none">
                        ✖
                    </button>
                </div>
                <ul class="mt-2 list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-6">
            @yield('content')
        </div>
    </div>
</body>

</html>
